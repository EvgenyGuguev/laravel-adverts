<?php


namespace Tests\Unit\Entity\User;


use App\Entity\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RoleTest extends TestCase
{

    use RefreshDatabase;


    /** @test */
    public function change_user_role()
    {
        $user = factory(User::class)->create(
            ['role' => User::ROLE_USER]);

        $this->assertFalse($user->isAdmin());

        $user->changeRole(User::ROLE_ADMIN);

        $this->assertTrue($user->isAdmin());
    }

    /** @test */
    public function role_is_already_assigned()
    {
        $user = factory(User::class)->create(
            ['role' => User::ROLE_USER]);

        $this->expectExceptionMessage('Role is already assigned.');

        $user->changeRole(User::ROLE_ADMIN);

    }

}
