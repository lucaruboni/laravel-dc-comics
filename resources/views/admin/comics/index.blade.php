@extends('layout.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Admin Comics</h1>
        <a href="{{route('comics.create')}}" class="btn btn-dark d-block">
            <i class="fas fa-plus-circle fa-sm fa-fw"></i>
            New comics
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped
        table-hover
        table-borderless
        table-secondary
        align-middle">
            <thead class="table-light">
                <caption>Table Name</caption>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Series</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @forelse ($comics as $comic)
                
                <tr class="table-primary">
                    <td scope="row">
                        <a href="{{route('comics.show', $comic->id)}}" title="View" class="text-decoration-none">
                            {{$comic->id}}</td>
                        </a>
                    <td><img height="100" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->series}}</td>
                    <td>{{$comic->type}}</td>
                    <td>

                        <a class="btn btn-primary" href="{{route('comics.show', $comic->id )}}" role="button">View</a>
                        <a class="btn btn-secondary" href="{{route('comics.edit', $comic->id )}}" role="button">Edit</a>

                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>

                       
              

                </tr>
                
                @empty
                <tr scope="row">
                    <td>No records in the db yet.</td>
                </tr>
                @endforelse

            </tbody>

        </table>
    </div>



</div>

@endsection


