@extends('dashboard')

@section('content')
<style>
    .container {
        padding: 2rem 0rem;
    }

    h4 {
        margin: 2rem 0rem 1rem;
    }

    .table-image {

        td,
        th {
            vertical-align: middle;
        }
    }
</style>


<div class="container">
    
    <h1>List Your Blogs</h1>

    <a class="btn btn-success" href="{{ route('blogs.create') }}">Create New Blog<i class="fa fa-plus" aria-hidden="true"></i></a>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Date</th>
                        <th scope="col">Author</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>

                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->description }}</td>
                        <td>{{ $blog->created_at->format('Y-m-d') }}</td>
                        <td>{{ $blog->author_name }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('blogs.edit', $blog->id) }}"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection