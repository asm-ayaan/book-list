<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Book List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="mb-0">Book List</h3>
            <a href="/book-create.html" class="btn btn-success">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <img src="{{ asset('/assets/images/image_1.jpg') }}" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark">
                                <h5 class="mb-2">The Great Gatsby</h5>
                            </a>
                            <p class="text-muted mb-0">A story of decadence and excess, Gatsby explores the darker aspects of the Jazz Age.</p>
                        </td>
                        <td>F. Scott Fitzgerald</td>
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
                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="/assets/images/image_2.jpg" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark book-cover">
                                <h5 class="mb-2">To Kill a Mockingbird</h5>
                            </a>
                            <p class="text-muted mb-0">A powerful story of racial injustice and the loss of innocence in the American South.</p>
                        </td>
                        <td>Harper Lee</td>
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

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="/assets/images/image_3.jpg" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark book-cover">
                                <h5 class="mb-2">To Kill a Mockingbird</h5>
                            </a>
                            <p class="text-muted mb-0">A powerful story of racial injustice and the loss of innocence in the American South.</p>
                        </td>
                        <td>Harper Lee</td>
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

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="/assets/images/image_4.jpg" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark book-cover">
                                <h5 class="mb-2">To Kill a Mockingbird</h5>
                            </a>
                            <p class="text-muted mb-0">A powerful story of racial injustice and the loss of innocence in the American South.</p>
                        </td>
                        <td>Harper Lee</td>
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

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="/assets/images/image_5.jpg" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark book-cover">
                                <h5 class="mb-2">To Kill a Mockingbird</h5>
                            </a>
                            <p class="text-muted mb-0">A powerful story of racial injustice and the loss of innocence in the American South.</p>
                        </td>
                        <td>Harper Lee</td>
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

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="/assets/images/image_6.jpg" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark book-cover">
                                <h5 class="mb-2">To Kill a Mockingbird</h5>
                            </a>
                            <p class="text-muted mb-0">A powerful story of racial injustice and the loss of innocence in the American South.</p>
                        </td>
                        <td>Harper Lee</td>
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

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="/assets/images/image_7.jpg" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark book-cover">
                                <h5 class="mb-2">To Kill a Mockingbird</h5>
                            </a>
                            <p class="text-muted mb-0">A powerful story of racial injustice and the loss of innocence in the American South.</p>
                        </td>
                        <td>Harper Lee</td>
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

                    <tr>
                        <th scope="row">2</th>
                        <td>
                            <img src="/assets/images/image_8.jpg" alt="Book Cover" class="img-thumbnail" style="width: 100px;">
                        </td>
                        <td>
                            <a href="/book-view.html" class="text-decoration-none text-dark book-cover">
                                <h5 class="mb-2">To Kill a Mockingbird</h5>
                            </a>
                            <p class="text-muted mb-0">A powerful story of racial injustice and the loss of innocence in the American South.</p>
                        </td>
                        <td>Harper Lee</td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>