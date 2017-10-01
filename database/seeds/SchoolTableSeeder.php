<?php

use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\School::class, 4)->create()->each(function($s){
        	foreach (range(1,10) as $i) {
        		$s->courses()->save(factory(App\Course::class)->make());
        	}
        });

        // factory(App\School::class, 4)->create()
        // ->each(function($s){
        //     foreach (range(1,10) as $i) {
        //         $s->courses()->save(factory(App\Course::class)->create(['school_id' => $s->id]))
        //         ->each(function($c){
        //             foreach (range(1,3) as $j) {
        //                 $c->posts()->save(factory(App\Post::class)->create(['course_id' => $c->id]));
        //             }
        //         });
        //     }
        // });
    }
}
