@once
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/employers">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      
      
        <li class="nav-item">
            <a href="{{route('reservations.index')}}" class="nav-link">Reservation</a>
        </li>
       
       
       
      
        <li class="nav-item">
          <a href="{{route('chambres.index')}}"class="nav-link">Chambres</a>        </li>
      </li>
      <li class="nav-item">
        <a href="{{route('internautes.index')}}"class="nav-link">Internautes</a>        </li>
    </li>
      </ul>
    </div>
  </nav> 
@endonce
