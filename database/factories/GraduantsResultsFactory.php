<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GraduantsResults>
 */
class GraduantsResultsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $admission = $this->faker->unique()->numberBetween(1020000, 1029999);
        $meanScore = $this->faker->numberBetween(40, 80);


        return [
            'college_cumpus' => $this->faker->randomElement([
                'CONSOLATA INSTITUTE OF PHILOSOPHY',
                'THE CATHOLIC UNIVERSITY OF EASTERN AFRICA',
            ]),
            'school_faculty' => $this->faker->randomElement([
                'Faculty of Arts',
                'Faculty of Science',
                'Faculty of Business Administration',
                'Faculty of Social Sciences',
                'Faculty of Education',
                'Faculty of Law',
                'Faculty of Computer Science',
                'Faculty of Health Sciences',
                'Faculty of Agriculture',
                'Faculty of Environmental Studies',
                'Faculty of Fine Arts',
                'Faculty of Humanities',
                'Faculty of Pharmacy',
            ]),
            'programme' => $this->faker->randomElement([
                'Faculty of Arts and Social Sciences',
                'Faculty of Arts and Social Sciences',
                'FACULTY OF EDUCATION',
                'FACULTY OF ARTS AND SOCIAL SCIENCES',
                'SCHOOL OF BUSINESS',
                'SCHOOL OF BUSINESS',
                'FACULTY OF EDUCATION',
                'FACULTY OF LAW',
                'FACULTY OF EDUCATION',
                'SCHOOL OF BUSINESS',
                'FACULTY OF SCENCE',
            ]),
            'reg_adm_no' => $admission,
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName(),
            'gender' => $this->faker->randomElement([
                'Male',
                'Female'
            ]),
            'mean_score' => $meanScore,
            'degree_class' => $this->faker->randomElement(['First Class', 'Honours', 'Second Class Upper', 'Second Class Lower', 'Pass']),
            'level' => $this->faker->randomElement([
                'Bachelor',
                'Masters',
                'Diploma'
            ]),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'comments' => $this->faker->paragraph(3),

        ];
    }
}
