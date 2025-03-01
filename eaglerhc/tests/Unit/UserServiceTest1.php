<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class UserServiceTest1 extends TestCase
{
    public function testUserCreation()
    {
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('testpassword')
        ]);

        $this->assertEquals('Test User', $user->name);
    }
}