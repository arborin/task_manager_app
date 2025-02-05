<?php

namespace Database\Seeders;

use App\Models\TaskStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $status = ['Pending', 'In Progress', 'Completed'];

        TaskStatus::truncate();

        foreach ($status as $status) {
            TaskStatus::create([
                'name' => $status
            ]);
        }
    }
}
