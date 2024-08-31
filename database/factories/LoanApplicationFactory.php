<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoanApplication>
 */
class LoanApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'cell' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'loan_amount' => $this->faker->numberBetween(10000,100000),
            'loan_purpose' => $this->faker->sentence(),
            'loan_tenure' => $this->faker->numberBetween(1,10),
            'reason_for_loan'=>$this->faker->text(),
            'loan_type' => $this->faker->randomElement(['personal','home']),
            'status' =>  $this->faker->randomElement(['applied','passed','rejected']),
        ];
    }
}
