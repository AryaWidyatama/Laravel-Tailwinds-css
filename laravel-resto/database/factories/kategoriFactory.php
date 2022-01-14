<?php

namespace Database\Factories;

use App\Models\kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class kategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @var string  
     */
    protected $model = kategori::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
            'kategori' => $this->faker->name(),
        ];
    }
}
