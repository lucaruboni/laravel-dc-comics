@extends('layout.app')


@section('content')


<div class="container">
    <h5 class="text-uppercase text-muted my-4 py-3">Add a new Comic</h5>

    <form action="{{route('comics.store')}}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="comic title here " aria-describedby="nameHelper" required>
            <small id="nameHelper" class="text-muted">Type the name of the comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="comic image here " aria-describedby="imageHelper">
            <small id="imageHelper" class="text-muted">Type the image of the Comic max 50 characters</small>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" placeholder="comic price here " aria-describedby="priceHelper">
            <small id="priceHelper" class="text-muted">Type the price of the Comic max 50 characters</small>
        </div>



        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" id="description" class="form-control" placeholder="comic description here " aria-describedby="descriptionHelper">
            <small id="descriptionHelper" class="text-muted">Type the description of the Comic max 50 characters</small>
        </div>

        <button type="submit" class="btn btn-dark w-100 my-4">Save</button>

    </form>

</div>


@endsection