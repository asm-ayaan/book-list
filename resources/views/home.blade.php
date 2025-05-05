@extends('layouts.app')

@section('contents')
    <section class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Book List</h3>
            <a href="{{ route('books.create') }}" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Add New Book
            </a>
        </div>
        <div class="book-list">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Book Cover</th>
                        <th scope="col">Book Details</th>
                        <th scope="col">Author</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <img src="{{ asset($book->book_cover) }}" alt="Book Cover" class="img-thumbnail"
                                style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark">
                                <h5 class="mb-2">{{ $book->book_title }}</h5>
                            </a>
                            <p class="text-muted mb-0">{{ $book->book_description }}</p>
                        </td>
                        <td>{{ $book->book_author }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/book-view.html" class="btn btn-info btn-sm text-white">
                                    <i class="bi bi-eye"></i> View
                                </a>
                                <button type="button" class="btn btn-primary btn-sm">
                                    <i class="bi bi-pencil"></i> Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
@endsection
