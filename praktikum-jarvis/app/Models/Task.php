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
            'name' => "Bahsa Inggris",
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

    // method
    public static function getAll()
    {
        return self::$tasks;
    }
}
