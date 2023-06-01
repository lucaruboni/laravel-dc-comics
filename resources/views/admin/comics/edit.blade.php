@extends('layout.app')

@section('content')
<div class="container">
    @include('partials.validation_errors')
    <h1> {{$comic->title}} Editing</h1>

    <form action="{{route('comics.update', $comic->id)}}" method="post" class="pb-5">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('name') is-invalid @enderror" placeholder="Batman" aria-describedby="titleHelper" value="{{$comic->title}}">
            <small id="titleHelper" class="text-muted">Type the comic title max: 200 characters</small>
            @error('name')
            <div class="alert alert-danger" role="alert">
                <strong>Title, error :</strong>{{$message}}
            </div>
            @enderror

        </div>

        <div class="mb-3">
            <label for="image" class="form-label">thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="https://" aria-describedby="thumbHelper" value="{{$comic->thumb}}">
            <small id="thumbHelper" class="text-muted">Type the comic thumb max: 200 characters</small>
            @error('thumb')
            <div class="alert alert-danger" role="alert">
                <strong>Image, error :</strong>{{$message}}
            </div>
            @enderror
        </div>





        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" name="price" step="0.1" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Nintendo Switch" aria-describedby="priceHelper" value="{{$comic->price}}">
            <small id="priceHelper" class="text-muted">Type the comic price</small>

            @error('price')
            <div class="alert alert-danger" role="alert">
                <strong>price, error :</strong>{{$message}}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text"  name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="" aria-describedby="descriptionHelper" value="{{$comic->description}}">
            <small id="descriptionHelper" class="text-muted">Type the comic description max: 200 characters</small>
            @error('description')
            <div class="alert alert-danger" role="alert">
                <strong>description, error :</strong>{{$message}}
            </div>
            @enderror
        </div>



        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" placeholder="boh" aria-describedby="seriesHelper" value="{{$comic->series}}">
            <small id="seriesHelper" class="text-muted">Type the comic series max: 200 characters</small>
            @error('series')
            <div class="alert alert-danger" role="alert">
                <strong>Series, error :</strong>{{$message}}
            </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="sale_date" class="form-label">sale date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" placeholder="boh" aria-describedby="sale_dateHelper" value="{{$comic->sale_date}}">
            <small id="sale_dateHelper" class="text-muted">Type the comic sale date max: 200 characters</small>
            @error('sale_date')
            <div class="alert alert-danger" role="alert">
                <strong>Sale date, error :</strong>{{$message}}
            </div>
            @enderror

        </div>


        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" placeholder="boh" aria-describedby="typeHelper" value="{{$comic->type}}">
            <small id="typeHelper" class="text-muted">Type the comic type max: 200 characters</small>

            @error('type')
            <div class="alert alert-danger" role="alert">
                <strong>Tyoe, error :</strong>{{$message}}
            </div>
            @enderror
        </div>



        <button type="submit" class="btn btn-primary">Add comic</button>
    </form>

</div>


@endsection