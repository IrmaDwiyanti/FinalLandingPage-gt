<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;
use GoogleTranslate;
use Cache;

class LangController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function change(Request $request)

    {

        App::setLocale($request->lang);

        session()->put('locale', $request->lang);

  

        return redirect()->back();

    }

    public function translate($text)
    {
        // Mengambil bahasa dari session atau default 'id'
        $lang = session()->get('locale', 'id');
    
        // Langsung panggil API Google Translate tanpa menyimpan ke cache
        $translation = GoogleTranslate::trans($text, $lang);
    
        return $translation;
    }
    
    
}
