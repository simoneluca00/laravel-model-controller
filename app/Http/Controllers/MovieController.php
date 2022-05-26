<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        
        // recuperare e salvare dentro $movie un'array di oggetti (NO array multidimensionale)
        // NOTE SELECT * FROM 'movies'
        $movies = Movie::all();

        // scrivendo il COMPACT è come se avessimo scritto "[ 'movies' => $movies ]" -> quando scegliamo lo stesso nome sia per la chiave che per il valore
        return view('pages.movie.index', compact( 'movies' ));
    }

    public function show($id){
        
        // recuperare un solo dato dell'array globale 1° metodo
        // $book = Book::find($id);

        // recuperare un solo dato dell'array globale 2° metodo -> restituisce automaticamente una pag.404 nel momento in cui non esiste l'elemento
        $movie = Movie::findOrFail($id);

        // scrivendo il COMPACT è come se avessimo scritto "[ 'movies' => $movies ]" -> quando scegliamo lo stesso nome sia per la chiave che per il valore
        return view('pages.movie.show', compact( 'movie' ));
    }
}
