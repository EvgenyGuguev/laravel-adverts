<?php


namespace Tests\Unit\Entity\User;


use App\Entity\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateTest extends TestCase
{

    use RefreshDatabase;

    /** @test */
    public function new_user_create()
    {
        $user = User::new(
            $name = 'name',
            $email = 'email'
        );

//        $user = factory('App\Entity\User')->create();

        $name = $user->name;
        $email = $user->email;

        self::assertNotEmpty($user);

        self::assertEquals($name, $user->name);
        self::assertEquals($email, $user->email);
        self::assertNotEmpty($user->password);

        self::assertFalse($user->isAdmin());
    }

}
