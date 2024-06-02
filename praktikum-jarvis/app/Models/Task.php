<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model    
{
    use HasFactory;

    protected static $tasks = [
        [
            'id' => 1,
            'name' => "Bahasa Indonesia",
            'deadline' => "2024-05-29",
            'status' => "Belum Selesai",
            'description' => "Mengerjakan Tugas Rumah Bahasa Indonesia"
        ],
        [
            'id' => 2,
            'name' => "Bahasa Inggris",
            'deadline' => "2024-05-30",
            'status' => "Belum Selesai",
            'description' => "Mengerjakan Tugas Rumah Bahasa Inggris"
        ],
        [
            'id' => 3,
            'name' => "Matematika",
            'deadline' => "2024-05-31",
            'status' => "Belum Selesai",
            'description' => "Mengerjakan Tugas Rumah Matematika"
        ],
    ];

    // Get all tasks
    public static function getAll()
    {
        return self::$tasks;
    }

    // Find a task by id
    public static function find($id)
    {
        foreach (self::$tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }
        return null;
    }
}