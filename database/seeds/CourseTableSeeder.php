<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Course::class, 4)->create()->each(function($c){
            $c->save();
        });
        // DB::table('courses')->insert([
        // 	'name' => 'Datorarkitektur',
        // 	'code' => 'edt621',
        // 	'school' => 'lth',
        // ]);
    }
}
