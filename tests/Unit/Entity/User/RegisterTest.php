<?php


namespace Tests\Unit\Entity\User;


use App\Entity\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function testRequest(): void
    {
        $user = factory('App\Entity\User')->create();

        self::assertNotEmpty($user);

        self::assertNotEmpty($user->password);
        self::assertNotEmpty($user->email);
        self::assertNotEmpty($user->name);


        self::assertFalse($user->isAdmin());
    }


}
