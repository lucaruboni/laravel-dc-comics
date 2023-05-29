@extends('layout.app')

@section('content')
<div class='jumbotron'>

</div>

<div class="container">
        <div class="row justify-content-center position-relative">

            <button id="my_btn_position" class="btn btn-primary main_btn">CURRENT SERIES</button>

                <ul class="d-flex flex-wrap gap-4 mt-5">
                   
                        
                @foreach ($comics as $comic)
                    <li class="mt-3 d-flex">
                        <div>
                            <img src="{{$comic['thumb']}}" class="card-img-top card_image" alt="...">
                            <div>
                                <p>{{ $comic['title'] }}</p>
                            </div>
                        </div>
                    </li>       
                @endforeach    
                    
                </ul>

                <button class="btn btn-primary main_btn my-5">LOAD MORE</button>
               
        </div>
    </div>


@endsection


