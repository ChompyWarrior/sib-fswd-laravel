<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengguna>
 */
class PenggunaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'id_grup_pengguna' =>$this->faker->numberBetween(),
            'nama' => $this->faker->name(),
            'email'=> $this->faker->email(),
            'alamat'=>$this->faker->address()
        ];
    }
}
