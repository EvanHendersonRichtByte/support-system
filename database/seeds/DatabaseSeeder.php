<?php

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
        
        $this->call(RoleSeeder::class);
        $this->call(RoleUserSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(AnnouncementSeeder::class);
        factory(App\User::class, 5)->create()->each(function ($user) {
            $user->tickets()->save(factory(App\Ticket::class)->make());
        });
        
    }
}
