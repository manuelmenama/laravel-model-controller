<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class PageController extends Controller
{
    public function index() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function blog() {
        return view('blog');
    }

    public function movie() {

        //quary al database
        $movies = Movie::all();

        //dd($movies);

        return view('movie', compact('movies'));
    }

    public function movie_detail($id) {

        $movie = Movie::find($id);

        //dd($id);
        return view('movie-detail', compact('movie'));
    }
}
