@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Add New Blog</h3>
                    <div class="card-body">
                        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data"> @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Title" name="title" class="form-control" id="title" autofocus required>
                            </div>
                            <div class="form-group mb-3">
                                <textarea name="description" id="description" class="form-control" id="description" autofocus required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <input type="file" placeholder="Thumbnail Image" name="thumbnail_image" class="form-control" id="thumbnail_image" autofocus required>
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-block">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection