<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Poste;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poste>
 */
class PosteFactory extends Factory
{

    // @var string
    // protected $model = \App\Models\Poste::class;
    protected $model = Poste::class;

    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
        ];
    }
}
