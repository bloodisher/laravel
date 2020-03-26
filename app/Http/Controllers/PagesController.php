<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return ('About page');
    }
    public function serials(){
        $data = array(
            'title' => 'Page with serials',
            'serials' => ['Game of Thrones' , 'Braking Bad', 'The new Pope' , 'Supernatural']
        );
        return view('pages.serials')->with($data);
    }
    public function multfilms(){
        return view('pages.multfilms');
    }
    public function genre($genre , $id){
        return view('pages.genre' , compact('genre' , 'id'));
        /*return ('this is the serial with id '.$id.' and genre '.$genre.''); */
    }
}
