<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'subject_id' => 5,
            'hari' => 'senin',
            'jam_mulai' => fake()->dateTime(),
            'jam_selesai' => fake()->dateTime(),
            'ruangan' => 'Gedung H',
            'kode_absensi' => fake()->randomNumber(),
            'tahun_akademik' => '2022/2023',
            'semester'=>'ganjil',
        ];
    }
}