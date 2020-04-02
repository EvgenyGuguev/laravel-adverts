<?php

namespace App\Entity;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    public const ROLE_USER = 'user';
    public const ROLE_ADMIN = 'admin';

    protected $fillable = [
        'name', 'last_name', 'email', 'password', 'role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function new ($name, $email): self
    {
        return static::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(Str::random()),
            'role' => self::ROLE_USER,
        ]);
    }

    public function verify()
    {
        $this->forceFill(['email_verified_at' => now()]);
        $this->save();
    }

    public function changeRole($role): void
    {
        if (!in_array($role, [self::ROLE_USER, self::ROLE_ADMIN], true)) {
            throw new \InvalidArgumentException('Undefined role  "'. $role .'" ');
        }
        if ($this->role === $role) {
            throw  new \DomainException('Role is already assigned.');
        }
        $this->update(['role' => $role]);
    }

    public function isAdmin()
    {
        return $this->role === self::ROLE_ADMIN;
    }
}
