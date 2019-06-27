<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Notice;
use App\Models\Collaborator;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Formation;
use App\Models\User;

class PagesController extends Controller
{
  public function index () {

    $configurationsPage = Configuration::all(); //Parametros para editar textos e imagenes en la pagina principal de la web
    $announcements = Notice::take(2)->orderBy('id','desc')->get();
    $collaborators  = Collaborator::where('is_active', 1)->take(5)->orderBy('id','desc')->get();
    $sliders = Slider::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }


    return view ('welcome', compact('configurationsPage','announcements', 'collaborators', 'sliders', 'infoPage'));

  }

  public function contact () {

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('contact', compact('configurationsPage', 'infoPage'));

  }

  public function secretary () {

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('secretary', compact('configurationsPage', 'infoPage'));

  }

  public function notices () {

    $configurationsPage = Configuration::all();
    $announcements = Notice::where('is_active', 1)->get();;

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('notices', compact('configurationsPage', 'announcements','infoPage'));

  }

  public function nuestroCentro () {

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('nuestroCentro', compact('configurationsPage', 'infoPage'));

  }

  public function formacionSanidad () {

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('formacionSanidad', compact('configurationsPage', 'infoPage'));

  }

  public function formacionAdministracion () {

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('formacionAdministracion', compact('configurationsPage', 'infoPage'));

  }

  public function formacionInformatica () {

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('formacionInformatica', compact('configurationsPage', 'infoPage'));

  }

  public function gradoMedioInformatica () {

    $imagesGallery = Gallery::where([['formation_id', 1],
                                      ['is_active',1]
                                      ])->get();

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('gradoMedioInformatica', compact('imagesGallery', 'configurationsPage', 'infoPage'));

  }

  public function gradoSuperiorInformatica () {

    $imagesGallery = Gallery::where([['formation_id', 2],
                                      ['is_active',1]
                                      ])->get();

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('gradoSuperiorInformatica', compact('imagesGallery', 'configurationsPage', 'infoPage'));

  }

  public function gradoMedioAdministracion () {

    $imagesGallery = Gallery::where([['formation_id', 3],
                                      ['is_active',1]
                                      ])->get();

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('gradoMedioAdministracion', compact('imagesGallery', 'configurationsPage', 'infoPage'));

  }

  public function gradoSuperiorAdministracion () {

    $imagesGallery = Gallery::where([['formation_id', 4],
                                      ['is_active',1]
                                      ])->get();

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('gradoSuperiorAdministracion', compact('imagesGallery', 'configurationsPage', 'infoPage'));

  }

  public function gradoMedioSanidad () {

    $imagesGallery = Gallery::where([['formation_id', 5],
                                      ['is_active',1]
                                      ])->get();

    $configurationsPage = Configuration::all();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('gradoMedioSanidad', compact('imagesGallery', 'configurationsPage', 'infoPage'));

  }

  public function gradoSuperiorSanidad () {

    $configurationsPage = Configuration::all();

    $imagesGallery = Gallery::where([['formation_id', 6],
                                      ['is_active',1]
                                      ])->get();

    foreach ($configurationsPage as $conf){
      if($conf->is_active==1){
        $infoPage[$conf->name] = $conf->content;
      }else{
        $infoPage[$conf->name] = '';
      }
    }

    return view ('gradoSuperiorSanidad', compact('imagesGallery', 'configurationsPage', 'infoPage'));

  }


}
