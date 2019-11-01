<?php

use App\User;
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
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(ImageSeeder::class);
        $this->call(CommentSeeder::class);
        $user = new User([
            'name' => 'Kaspar Suursalu',
            'email' => 'kasparsu@gmail.com',
            'password' => bcrypt(env('DEFAULT_USER_PASSWORD', '')),
            'email_verified_at' => now()
        ]);
        $user->save();
        factory(User::class)->create(['name' => 'Deleted']);
    }
}
