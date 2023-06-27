<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        Role::truncate();
//        Status::truncate();


//         $user = User::factory()->create();


        $role = new Role();
        $role->name = 'admin';
        $role->save();

        $role = new Role();
        $role->name = 'employee';
        $role->save();

        $role = new Role();
        $role->name = 'customer';
        $role->save();

        $role = new Status();
        $role->name = 'pending';
        $role->color = 'bg-warning';
        $role->save();

        $role = new Status();
        $role->name = 'processing';
        $role->color = 'bg-primary';
        $role->save();

        $role = new Status();
        $role->name = 'confirmed';
        $role->color = 'bg-success';
        $role->save();

        $role = new Status();
        $role->name = 'purchased';
        $role->color = 'bg-secondary';
        $role->save();

        $role = new Status();
        $role->name = 'transmission';
        $role->color = 'bg-secondary';
        $role->save();

        $role = new Status();
        $role->name = 'transit';
        $role->color = 'bg-secondary';
        $role->save();

        $role = new Status();
        $role->name = 'delivered';
        $role->color = 'bg-secondary';
        $role->save();

        $role = new Status();
        $role->name = 'paid';
        $role->color = 'bg-secondary';
        $role->save();

        $role = new Status();
        $role->name = 'cancel';
        $role->color = 'bg-danger';
        $role->save();






        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
