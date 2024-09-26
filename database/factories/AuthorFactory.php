<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class AuthorFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $name = fake()->name();
        $slugName = preg_replace("/[^a-zA-Z]/", "", $name);
        $slugName = substr($slugName, 0, 10);
        $slugName = str_pad($slugName, 10, 'x');
        $slugName = strtolower($slugName);
        $time = time();
        $slugTime = strval($time);
        $slugTime = substr($slugTime, -10);
        $slugTime = str_pad($slugTime, 10, '0');
        $slugTime = strtolower($slugTime);
        $slug = $slugName . $slugTime;
        $email = fake()->unique()->safeEmail();
        $phone = fake()->unique()->phoneNumber();
        $phone = preg_replace('/[^0-9]/', '', $phone);
        $phone = ($phone[0] === '0') ? '62' . substr($phone, 1) : $phone;
        $password = static::$password ??= Hash::make('password');
        return [
            'slug' => $slug,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
        ];
    }
}
