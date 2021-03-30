@extends('layouts.index')

@section('content')
    <h1>L'équipe back</h1>
    <div class="row">
      {{-- BOUCLE --}}
      @foreach ($backs as $back)
        <div class="card" style="width: 18rem;">
            <img src="{{asset($back->photo)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$back->nom}}</h5>
              <p class="card-text">{{$back->fonction}}</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
      @endforeach
    </div>
@endsection