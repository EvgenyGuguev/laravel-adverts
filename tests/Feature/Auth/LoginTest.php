<?php


namespace Tests\Feature\Auth;


use App\Entity\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    //можно так
    public function testForm(): void
    {
        $response = $this->get('/login');

        $response
            ->assertStatus(200)
            ->assertSee('Login');
    }

    // или так
    public function test_user_can_view_a_login_form(): void
    {
        $response = $this->get('/login');

        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }

    public function test_user_errors_with_empty_form(): void
    {
        $response = $this->post('/login', [
            'email' => '',
            'password' => '',
        ]);

        $response
            ->assertStatus(302)
            ->assertSessionHasErrors(['email', 'password']);
    }


    public function testNoActiveUser(): void
    {
        $user = factory(User::class)->create(['email_verified_at' => null]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'secret',
        ]);

        $response
            ->assertStatus(302)
            ->assertRedirect('/');

    }


    public function test_active_user(): void
    {
        $user = factory(User::class)->create(['email_verified_at' => now()]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response
            ->assertStatus(302)
            ->assertRedirect('/cabinet');

        $this->assertAuthenticatedAs($user);
    }

    // нужно исправить, чтобы редирект шел не на /home а на /cabinet
    public function test_user_cannot_view_a_login_form_when_authenticated(): void
    {
        $user = factory(User::class)->make();

        $response = $this->actingAs($user)->get('/login');
        $response->assertRedirect('/home');
    }

}
