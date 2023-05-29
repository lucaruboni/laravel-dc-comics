@extends('layout.app')

@section('content')
<div class='jumbotron'>

</div>
<div class="container">
    <div class="row py-5">
        <div class="col ">
        
            <img src="{{$comic->thumb}}" class="img-fluid" alt="...">
           
        </div>

        <div class="col text-white">
            <h1>{{$comic->title}}</h1>
            <div> <strong>Price: </strong>{{$comic->price}}</div>
            <div> <strong>Availability: </strong>{{$comic->series}}</div>
                <div>
                    <p>{{$comic->description}}</p>
                </div>
                <div> <strong>Sale Date: </strong>{{$comic->sale_date}}</div>
                <div> <strong>Typr: </strong>{{$comic->type}}</div>
            </div>
                       
        </div>
    </div>

@endsection