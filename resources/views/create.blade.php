@extends('layouts.app')
@section('contents')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Create New Book</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('books.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="bookTitle" class="form-label">Book Title</label>
                            <input type="text" class="form-control" id="bookTitle" name="book_title" value="{{ old('book_title') }}">
                            <span class="text-danger">{{ $errors->first('book_title') }}</span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="authorName" class="form-label">Author Name</label>
                            <input type="text" class="form-control" id="authorName" name="book_author" value="{{ old('book_author') }}">
                            <span class="text-danger">{{ $errors->first('book_author') }}</span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="4" name="book_description" >{{ old('book_description') }}</textarea>
                            <span class="text-danger">{{ $errors->first('book_description') }}</span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="bookCover" class="form-label">Book Cover</label>
                            <input type="file" class="form-control" id="bookCover" accept="image/*" name="book_cover">
                            <span class="text-danger">{{ $errors->first('book_cover') }}</span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="publishDate" class="form-label">Publication Date</label>
                            <input type="date" class="form-control" id="publishDate" name="book_publish_date" value="{{ old('book_publish_date') }}">
                            <span class="text-danger">{{ $errors->first('book_publish_date') }}</span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="isbn" class="form-label">ISBN</label>
                            <input type="text" class="form-control" id="isbn" name="book_isbn" value="{{ old('book_isbn') }}">
                            <span class="text-danger">{{ $errors->first('book_isbn') }}</span>
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Save Book
                            </button>
                            <a href="index.html" class="btn btn-secondary">
                                <i class="bi bi-x-circle"></i> Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection