<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create users
        User::factory()->create(['name' => 'John Doe', 'email' => 'john@example.com']);

        // Create announcements
        Announcement::factory()->create(['title' => 'Company Update', 'content' => 'Annual meeting details.']);
        Announcement::factory()->create(['title' => 'Holiday Notice', 'content' => 'Office closed on Dec 25.']);

        // Create tasks
        Task::factory()->create(['title' => 'Prepare Presentation', 'description' => 'Prepare Q4 report presentation.']);
        Task::factory()->create(['title' => 'Submit Expense Report', 'description' => 'Submit expenses for reimbursement.']);
    }
}
