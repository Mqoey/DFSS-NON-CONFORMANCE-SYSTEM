<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NonConformativeForm>
 */
class NonConformativeFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_id' => random_int(1, 205),
            'inspector_id' => random_int(1, 346),
            'inspector_admin_id' => random_int(1, 211),
            'non_conformity' => $this->faker->sentence,
            'corrective_action' => $this->faker->sentence,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
