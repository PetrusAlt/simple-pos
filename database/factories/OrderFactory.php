<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Orders>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customer_id = Customer::all();
        $number = rand(0, count($customer_id)-1);

        return [
            /**
                $table->uuid("id")->pimary();
                $table->uuid("customer_id");
                $table->string("name");
                $table->string("phone");
                $table->decimal("total", 15);
                $table->decimal("grandtotal", 15);
            */

            'id' => fake()->uuid(),
            'customer_id' => $customer_id[$number]['id'],
            'name' => 'transaction: ' . $customer_id[$number]['name'],
            'phone' => $customer_id[$number]['phone'],
            'total' => rand(2500000, 4000000),
            'grandtotal' => rand(2500000, 4000000),
        ];
    }
}
