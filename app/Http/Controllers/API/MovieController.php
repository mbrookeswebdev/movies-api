<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $movies = DB::table('movies')->orderBy('noOfVotes', 'desc')->paginate(5);

        if ($movies) {
            return response($movies, 200);
        } else {
            return response(RESPONSE::HTTP_NOT_FOUND);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $newMovie = new Movie;
        $newMovie->title = $request->input('title');
        $newMovie->descr = $request->input('descr');
        $newMovie->rating = $request->input('rating');
        $newMovie->imdb_score = $request->input('imdb_score');
        $newMovie->noOfVotes = $request->input('noOfVotes');
        $newMovie->save();

        if ($newMovie) {
            return response($newMovie, RESPONSE::HTTP_CREATED);
        } else {
            return response(RESPONSE::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show ($id)
    {
        $movie = Movie::findorFail($id);

        if ($movie) {
            return response($movie, RESPONSE::HTTP_OK);
        } else {
            return response(RESPONSE::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        $putRequest = $request;
        $movie = Movie::findOrFail($id);

        if (!$movie) {
            return response(RESPONSE::HTTP_NOT_FOUND);
        }

        if ($request->isMethod('patch')) {
            if ($request->input('title')) {
                $movie->title = $request->input('title');
            }
            if ($request->input('descr')) {
                $movie->descr = $request->input('descr');
            }
            if ($request->input('rating')) {
                $movie->rating = $request->input('rating');
            }
            if ($request->input('imdb_score')) {
                $movie->imdb_score = $request->input('imdb_score');
            }
            if ($request->input('noOfVotes')) {
                $movie->noOfVotes = $request->input('noOfVotes');
            }
        } else {
            $this->updateAll($movie, $putRequest);
        }

        $result = $movie->save();

        if ($result) {
            return response($movie, RESPONSE::HTTP_OK);
        } else {
            return response(RESPONSE::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function updateAll ($movie, Request $putRequest)
    {
        $movie->title = $putRequest->input('title');
        $movie->rating = $putRequest->input('rating');
        $movie->descr = $putRequest->input('descr');
        $movie->imdb_score = $putRequest->input('imdb_score');
        $movie->noOfVotes = $putRequest->input('noOfVotes');
        $result = $movie->save();

        if ($result) {
            return response($movie, RESPONSE::HTTP_OK);
        } else {
            return response(RESPONSE::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy ($id)
    {
        $movie = Movie::findOrFail($id);

        try {
            $movie->delete();
            return response(RESPONSE::HTTP_OK);
        } catch (\Exception $e) {
            return response(RESPONSE::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
