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
        $email = fake()->unique()->freeEmail();
        $phone = fake()->unique()->phoneNumber();
        $phone = preg_replace('/[^0-9]/', '', $phone);
        $phone = ($phone[0] === '0') ? '62' . substr($phone, 1) : $phone;
        $pass = static::$password ??= Hash::make('password');
        $slug = $name . $email;
        $slug = preg_replace("/[^a-zA-Z]/", "", $slug);
        $slug = substr($slug, 0, 20);
        $slug = strtolower($slug);
        return [
            'slug' => $slug,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $pass,
        ];
    }
}
