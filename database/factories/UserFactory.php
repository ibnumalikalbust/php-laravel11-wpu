<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    protected static ?string $password;

    public function definition(): array
    {
        $name = fake()->name();
        $unixName = preg_replace("/[^a-zA-Z]/", "", $name);
        $unixName = substr($unixName, 0, 10);
        $unixName = str_pad($unixName, 10, 'x');
        $unixName = strtolower($unixName);
        $time = time();
        $unixTime = strval($time);
        $unixTime = substr($unixTime, -10);
        $unixTime = str_pad($unixTime, 10, '0');
        $unixTime = strtolower($unixTime);
        $unix = $unixName . $unixTime;
        $email = fake()->unique()->safeEmail();
        $phone = fake()->unique()->phoneNumber();
        $phone = preg_replace('/[^0-9]/', '', $phone);
        $phone = ($phone[0] === '0') ? '62' . substr($phone, 1) : $phone;
        $password = static::$password ??= Hash::make('password');
        return [
            'unix' => $unix,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
        ];
    }
}
