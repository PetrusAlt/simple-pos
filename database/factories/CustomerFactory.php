<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            /** 
             * TABLE DESCRIPTION:
             * $table->uuid("id")->pimary();
             * $table->string("name");
             * $table->longText("address");
             * $table->string("phone");
             * $table->longText("description"); 
            */

            'id' => fake()->uuid(),
            'name' => fake()->name(),
            'address' => fake()->streetAddress(),
            'phone' => fake()->phoneNumber(),
            // "description" => fake()->description(),
        ];
    }
}
