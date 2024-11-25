<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function attachAnnouncement()
    {
        $user = User::find(1); // Fetch a user by ID
        $announcement = Announcement::find(1); // Fetch an announcement by ID

        if ($user && $announcement) {
            // Correctly save the announcement to the user using polymorphic relationship
            $user->announcements()->attach($announcement->id); // Attach the announcement to the user
            return "Announcement '{$announcement->title}' attached to user '{$user->name}'.";
        }

        return "User or Announcement not found.";
    }
    public function attachTask()
    {
        $user = User::find(1); // Fetch the user by ID
        $task = Task::find(2); // Fetch the task by ID

        if ($user && $task) {
            // Correctly save the task to the user using polymorphic relationship
            $user->tasks()->attach($task->id); // Attach the task to the user
            return "Task '{$task->title}' attached to user '{$user->name}'.";
        }

        return "User or Task not found.";
    }
}
