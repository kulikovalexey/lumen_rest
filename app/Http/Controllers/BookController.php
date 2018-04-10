<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $Books  = Book::all();

        return response()->json($Books);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBook($id)
    {
        $Book  = Book::find($id);

        return response()->json($Book);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createBook(Request $request)
    {
        $Book = Book::create($request->all());

        return response()->json($Book);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteBook($id)
    {
        $Book  = Book::find($id);
        $Book->delete();

        return response()->json('deleted');
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateBook(Request $request,$id){
        $Book  = Book::find($id);
        $Book->title = $request->input('title');
        $Book->author = $request->input('author');
        $Book->isbn = $request->input('isbn');
        $Book->save();

        return response()->json($Book);
    }
}