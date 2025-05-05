@extends('layouts.app')
@section('contents')
<div class="container my-5">
    <a href="{{ route('books.index') }}" class="back-button mb-4 d-inline-block">
        <i class="bi bi-arrow-left"></i> Back to Book List
    </a>
    
    <div class="book-details">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset($book->book_cover) }}" alt="Book Cover" class="img-fluid book-cover rounded">
            </div>
            <div class="col-md-8">
                <h2 class="mb-3">{{ $book->book_title }}</h2>
                <div class="mb-4">
                    <h5 class="text-muted">Author</h5>
                    <p class="fs-5">{{ $book->book_author }}</p>
                </div>
                <div class="mb-4">
                    <h5 class="text-muted">Description</h5>
                    <p class="lead">{{ $book->book_description }}</p>
                </div>
                <div class="mb-4">
                    <h5 class="text-muted">Publication Details</h5>
                    <ul class="list-unstyled">
                        <li><strong>Published:</strong> {{ date('d-m-Y', strtotime($book->book_publish_date)) }}</li>
                        <li><strong>ISBN:</strong> {{ $book->book_isbn }}</li>
                    
                    </ul>
                </div>
                <div class="mt-4">
                    <button class="btn btn-primary me-2">
                        <i class="bi bi-pencil"></i> Edit Book
                    </button>
                    <button class="btn btn-danger">
                        <i class="bi bi-trash"></i> Delete Book
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection