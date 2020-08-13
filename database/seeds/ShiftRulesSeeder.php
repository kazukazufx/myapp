<?php

use Illuminate\Database\Seeder;

class ShiftRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //データのクリア処理。これがないと元あるデータに追加してしまう。
        DB::table('shift_rules')->truncate();
        
        //データの入力
        DB::table('shift_rules')->insert([
            ['duty' => 'A', 'required_number' => '2'],
            ['duty' => 'AC', 'required_number' => '0'],
            ['duty' => 'AD', 'required_number' => '0'],
            ['duty' => 'a', 'required_number' => '0'],
            ['duty' => '0817', 'required_number' => '0'],
            ['duty' => '0917', 'required_number' => '0'],
            ['duty' => 'C', 'required_number' => '1'],
            ['duty' => '1120', 'required_number' => '0'],
            ['duty' => 'D', 'required_number' => '2'],
            ['duty' => 'y', 'required_number' => '1'],
            ['duty' => 'y900', 'required_number' => '0'],
            ['duty' => '休', 'required_number' => '0'],
            ]);
    }
}
