<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		$format_id = \App\Format::where('meta_name','=','video')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => 'screen cast',
		'link' => '0.mp4',
		'description' => 'P4 Screencast Laravel Video Books',
		'thumbnail' => 'thumbnail.png',
        'format_id' => $format_id,
        'user_id' => 1,
        ]);
 
        $format_id = \App\Format::where('meta_name','=','video')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => 'screen cast',
		'link' => '1.mp4',
		'description' => 'Gumball: Darwin Plays the Guitar',
		'thumbnail' => 'thumbnail1.png',
        'format_id' => $format_id,
        'user_id' => 1,
        ]);

        $format_id = \App\Format::where('meta_name','=','video')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
        'title' => 'screen cast',
		'link' => '2.mp4',
		'description' => 'Gumball: The Fan',
		'thumbnail' => 'thumbnail2.png',		
        'format_id' => $format_id, 
        'user_id' => 1,
        ]);

        $format_id = \App\Format::where('meta_name','=','video')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => 'screen cast',
		'link' => '3.mp4',
		'description' => 'Gumball: Sarah The Stalker',
		'thumbnail' => 'thumbnail3.png',
        'format_id' => $format_id,
        'user_id' => 1,
        ]);
		
		$format_id = \App\Format::where('meta_name','=','video')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => 'screen cast',
		'link' => '4.mp4',
		'description' => "Howdy Ya'll",
		'thumbnail' => 'thumbnail4.png',
        'format_id' => $format_id,
        'user_id' => 1,
        ]);
		
		$format_id = \App\Format::where('meta_name','=','video')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => 'flash cast',
		'link' => '5.mp4',
		'description' => "Zombies Attack",
		'thumbnail' => 'thumbnail5.png',
        'format_id' => $format_id,
        'user_id' => 1,
        ]);
		
		$format_id = \App\Format::where('meta_name','=','video')->pluck('id');
        DB::table('books')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'title' => 'pdf cast',
		'link' => '6.mp4',
		'description' => "Death Marches On",
		'thumbnail' => 'thumbnail6.png',
        'format_id' => $format_id,
        'user_id' => 1,
        ]);
		
    }
}
