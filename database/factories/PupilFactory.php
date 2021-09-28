<?php

namespace Database\Factories;

use App\Models\Pupil;
use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PupilFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pupil::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $tutors = Tutor::pluck('id')->toArray();
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'code' => $this->faker->numberBetween(1, 99999),
            'genre' => $this->faker->randomElement(['M', 'F']),
            'birth_date' => $this->faker->dateTimeBetween('-15 years', '-2 years'),
            'tutor_id' => $this->faker->randomElement($tutors),
        ];
    }
}
