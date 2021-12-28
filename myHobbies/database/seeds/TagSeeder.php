<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Sports' => 'primary',//blue
            'Relaxation' => 'secondary',//grey
            'Fun' => 'warning',//yellow
            'Nature' => 'success',//green
            'Inspiration' => 'light',//gray
            'Friends' => 'info',
            'Love' => 'danger',
            'Interest' => 'dark',
        ];
        foreach ($tags as $key => $value) {
            $tag = new Tag(
                [
                    'name' => $key,
                    'style' => $value,
                ]
            );

            $tag->save();
        }
    }
}
