<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Room;
use App\RoomType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'role' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);

        User::create([
            'name' => 'Antonius Kevin',
            'role' => 'Guest',
            'email' => 'antonius@gmail.com',
            'password' => bcrypt('anton123')
        ]);

        User::create([
            'name' => 'Vallencius Gavriel',
            'role' => 'Guest',
            'email' => 'vallencius@gmail.com',
            'password' => bcrypt('vallen123')
        ]);

        RoomType::create([
            'type' => 'Single'
        ]);
        RoomType::create([
            'type' => 'Double'
        ]);
        RoomType::create([
            'type' => 'Queen'
        ]);
        RoomType::create([
            'type' => 'King'
        ]);

        Room::create([
            'name' => 'Lavender Room',
            'room_type' => 1,
            'price' => 200000,
            'available' => 15,
            'image' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Room::create([
            'name' => 'Bougenville Room',
            'room_type' => 1,
            'price' => 250000,
            'available' => 15,
            'image' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Room::create([
            'name' => 'Rose Room',
            'room_type' => 2,
            'price' => 400000,
            'available' => 10,
            'image' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Room::create([
            'name' => 'Jasmine Room',
            'room_type' => 3,
            'price' => 700000,
            'available' => 7,
            'image' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);

        Room::create([
            'name' => 'Lotus Room',
            'room_type' => 4,
            'price' => 800000,
            'available' => 5,
            'image' => 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80'
        ]);
    }
}
