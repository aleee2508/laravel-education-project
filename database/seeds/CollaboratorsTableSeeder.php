<?php

use Illuminate\Database\Seeder;
use App\Models\Collaborator;

class CollaboratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cfg = array(
                array('name' => 'mysql','image' => 'uploads/colaboradores/940ec5447d1c34998c93c49ecaaa5c80.png','is_active' => 1),
                array('name' => 'laravel','image' => 'uploads/colaboradores/26f4bccfd2f294ed9d051eff11d6134b.png','is_active' => 1),
                array('name' => 'git','image' => 'uploads/colaboradores/2290113b2bfa8cbc400b1aaa7037ea79.png','is_active' => 1),
                array('name' => 'javascript','image' => 'uploads/colaboradores/3d9cc7e7c95c6270d2ee65bad1bf12eb.png','is_active' => 1),
                array('name' => 'composer','image' => 'uploads/colaboradores/850371c434d35de020afd0edb4f2440b.png','is_active' => 1),
      );

      foreach($cfg as $cf){ Collaborator::create($cf); }
    }
}
