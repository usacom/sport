<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class Dialogs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $type = ['private','group'];

//        $dialogList = DB::table('dialogList')->insert([
//            'type' => 'private',
//            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
//        ]);
//        dd($dialogList);
//        $dialogUser = DB::table('dialogUsers')->insert([
//            'idDialog' => 3,
//            'idUser' => 2
//        ]);
        $dialogMessages = DB::table('dialogMessages')->insert([
            'idDialog' => 3,
            'idUser' => 1,
            'text' => str_random()
        ]);

    }
}
