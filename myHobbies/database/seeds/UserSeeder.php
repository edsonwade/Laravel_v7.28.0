<?php

use Carbon\Carbon;
use App\Models\Hobby;
use  Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 100)->create()
            ->each(function ($user) {
                factory(Hobby::class, 100)->create([
                    'user_id' => $user->id,
                ])->each(function ($hobby) {
                    $tag_id = range(1, 100);
                    shuffle($tag_id);
                    $assigmnet = array_slice($tag_id, 0, rand(0, 100));
                    foreach ($assigmnet as $tag_id) {
                        DB::table('hobby_tag')
                            ->insert([
                                'hobby_id'=>$hobby->id,
                                'tag_id' =>$tag_id->id,
                                'created_at' => Carbon::now(),
                                'update_at' => Carbon::now(),
                            ]);
                    }
                });
            });
    }

}
