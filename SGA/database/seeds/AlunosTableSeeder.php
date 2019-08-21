<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10 ; $i++) { 
       	   DB::table('alunos')->insert([
            'nome' => Str::random(10),
            'datanascimento' => '12/03/2016'
        ]);
    }
  }
}
