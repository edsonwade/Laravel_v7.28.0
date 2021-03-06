<?php

use App\Models\Hobby;

use Illuminate\Database\Seeder;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hobby::create([
            'name' => 'football',
            'description' => "Football is my favourite hobby. It’s a team sport, in which you can score only by placing the ball inside the goal of the opposite team. Teams content 11 players – field players and a goalkeeper. The goalkeeper’s role is to protect the goal. He’s the only person that can touch the ball with his hands, but only in his penalty area"
        ]);
        Hobby::create([
            'name' => 'basktball',
            'description' => " Basketball is mine because, I’ve been doing it ever since I was a kid and it’s the one activity I can do and lose myself in. I have grown to love it and it has taught me a lot in the process.",
        ]);
        Hobby::create([
            'name' => 'Gym',
            'description' => "I like it because it's nice and always makes me feel good afterwards."
        ]);
        Hobby::create([
            'name' => 'listen music',
            'description' => "singing and listening to music. Even my voice is not good but I still like to sing. While I listen to music, I feel relax and calm. Singing is an excellent way of entertainment.",
        ]);



    }
}
