<?php

namespace Database\Factories;

use App\Models\Tasca;
use App\Models\Projecte;
use Illuminate\Database\Eloquent\Factories\Factory;

class TascaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tasca::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'completed' => $this->faker->boolean,
            'description' => $this->faker->paragraph,
        ];
    }
}
