<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('home', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookStoreRequest $request)
    {
        $imageCover = $request->file('book_cover');
        $imagePath = $imageCover->store('uploads', 'public');

        $book = new Book();
        $book->book_title = $request->book_title;
        $book->book_author = $request->book_author;
        $book->book_cover = $imagePath;
        $book->book_description = $request->book_description;
        $book->book_publish_date = $request->book_publish_date;
        $book->book_isbn = $request->book_isbn;
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book Created Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
