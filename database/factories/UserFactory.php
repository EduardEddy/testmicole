<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Helpers\HandleRandomNumber;
use App\Helpers\HandleOptions;
use App\Helpers\HandleAddress;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $address = fake()->address();
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'hs_id' => HandleRandomNumber::getNew(99999),
            'director_id' => HandleRandomNumber::getNew(99999),
            'mec_id' => HandleRandomNumber::getNew(99999),
            'country_id' => HandleRandomNumber::getNew(206),
            'region_id' => HandleRandomNumber::getNew(99999),
            'city_id' => HandleRandomNumber::getNew(99999),
            'postal' => HandleRandomNumber::getNew(999999),
            'phone' => fake()->phoneNumber(),
            'email2' => fake()->unique()->safeEmail(),
            'website' => fake()->url(),
            'fax' => fake()->phoneNumber(),
            'address' => $address,
            'address_short' => HandleAddress::getShortAddress($address),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'plan_preference' => HandleOptions::planPreferences(),
            'leads' => HandleRandomNumber::getNew(99),
            'business_status' => HandleOptions::businessStatus(),
            'google_user_ratings_total' => HandleRandomNumber::getNew(99),
            'google_rating' => HandleRandomNumber::getNewDecimalNumber(),
            'revisor' => fake()->name(),
            'active' => rand(0,1)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
