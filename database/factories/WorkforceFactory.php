<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workforce>
 */
class WorkforceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /**
         * name VARCHAR(50),
         * email VARCHAR(100) UNIQUE,
         * phone_number VARCHAR(20),
         * address TEXT,
         * date_of_birth DATE,
         * hire_date DATE,
         * position VARCHAR(50),
         * department VARCHAR(50),
         * supervisor_id INT,
         * salary DECIMAL(10, 2),
         * travel_allowance DECIMAL(10, 2),
         * daily_allowance DECIMAL(10, 2),
         */
        //create Bangladeshi phone number without +88
        $phone_number = '01' . $this->faker->numberBetween(1, 9) . $this->faker->numberBetween(10000000, 99999999);
        //random element of designation of a product distributors
        $position = $this->faker->randomElement(['Manager', 'Assistant Manager', 'Executive', 'Officer', 'Trainee', 'Intern']);

        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone_number' => $phone_number,
            'address' => $this->faker->address(),
            'date_of_birth' => $this->faker->date($max = '2000-01-01', $timezone = 'Asia/Dhaka'),
            'hire_date' => $this->faker->dateTime($max = 'now', $timezone = 'Asia/Dhaka'),
            'department' => $this->faker->randomElement(['IT', 'HR', 'Marketing', 'Sales', 'Finance', 'Accounting']),
            'supervisor_id' => Employee::all()->random()->id,
            'travel_allowance' => $this->faker->numberBetween(1, 9)*500,
            'daily_allowance' => $this->faker->numberBetween(1, 9)*500,
            'position' => $position,
            'status' => $this->faker->boolean(80),
            'salary' => $this->faker->numberBetween(15, 50)*1000,
        ];
    }
}
