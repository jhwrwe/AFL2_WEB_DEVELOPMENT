<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{


     /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition():array
    {
        return [
            'name' => $faker->name,
            'majors' => $faker->word, // Assuming 'majors' is a single word
            'CV' => $faker->word, // Assuming 'CV' is a single word
            'email' => $faker->unique()->safeEmail, // Generating a unique email
            'password' => $faker->password, // Generating a random password
            'username' => $faker->userName, // Generating a username
            'nationality' => $faker->country, // Generating a random country name
            'gender' => $faker->randomElement(['Male', 'Female']), // Randomly selecting 'Male' or 'Female'
            'Additional_information' => $faker->paragraph, // Generating a paragraph of text
            'Hobbys' => $faker->text, // Generating random text
            'age' => $faker->numberBetween(18, 65), // Generating a random age between 18 and 65
            'image' => null,
        ];
    }
}
