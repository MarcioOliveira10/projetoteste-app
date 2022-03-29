<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Str;
use App\Models\Aluno;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
    */
        public function run()
       {
          //  \App\Models\Aluno::factory(3)
               // ->create();
                Aluno::factory()
                   ->count(1)
                   ->hasTelefone(1)
                   ->create();
      }
 
}
