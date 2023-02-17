<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function news() {
        $news = News::all();

        return view('news', [
            'title' => 'Hotel News',
            'news' => $news
        ]);
    }

    public function newsDetail($id) {
        $news = News::where('id', $id)->first();

        return view('newsDetail', [
            'title' => 'Hotel News Detail',
            'news' => $news
        ]);
    }

    public function promo(){
        return "PROMO!";
    }
}
