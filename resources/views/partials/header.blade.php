
<header>
  <nav class="container h-100">
      <div class="row h-100">
        <div class="col">
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="DC" class="mt-4">

        </div>
          <div class="col">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="adminMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Admin
            </button>
            <div class="dropdown-menu" aria-labelledby="adminMenu">
                <a class="dropdown-item" href="{{route('comics.index')}}">COMICS</a>
                

            </div>
            <ul class="d-flex gap-3 mt-5">
               <li>
                <a href="/">HOME</a>
               </li>
               <li>
                <a href="/single_comic">COMIC</a>
               </li>
               <li>STORE</li>
               <li>VIDEOS</li>
               <li>COLLECTIBLES</li>
               <li>INFO</li>
          </div>
      </div>

  </nav>

</header>