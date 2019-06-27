<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\Slider;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cfg = array(
                array('name' => 'slider1','image' => 'uploads/slider/5e09b87e1f82d6a240931d32400c861f.png','alternative_text' => 'imagen de slider1'),
                array('name' => 'slider2','image' => 'uploads/slider/cfd1db7c2f36825ace52f54df243cd6b.png','alternative_text' => 'imagen de slider2'),
                array('name' => 'slider3','image' => 'uploads/slider/7711a58a1524170fa492405fd6303f3d.png','alternative_text' => 'imagen de slider3'),
                array('name' => 'slider4','image' => 'uploads/slider/053db78935f78eaebc83a37904f53015.png','alternative_text' => 'imagen de slider4'),
                array('name' => 'slider5','image' => 'uploads/slider/8be99dc93dbcb78b5fb49845b73c207f.png','alternative_text' => 'imagen de slider5'),
      );

      foreach($cfg as $cf){ Slider::create($cf); }
    }
}
