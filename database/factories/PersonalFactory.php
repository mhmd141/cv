<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personal>
 */
class PersonalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'about'=>$this->faker->text(),
           'name'=>$this->faker->name(),
           'phone'=>$this->faker->phoneNumber(),
           'address'=>$this->faker->address(),
           'birthday'=>$this->faker->date(),
           'experience'=>$this->faker->numberBetween(3,15),
           'email'=>$this->faker->email(),
           'happyClients'=>$this->faker->numberBetween(50,150),
           'completeProjects'=>$this->faker->numberBetween(100,300),
           'completeProjects'=>$this->faker->numberBetween(100,300),
          

        ];
    }
}
