@extends('layouts.index')

@section('content')
  {{-- @dump($fronts) --}}

  <h1>L'équipe front</h1>     

  {{-- BOUCLE --}}
  <div class="row">
    @foreach ($fronts as $front)
      <div class="card" style="width: 18rem;">
          <img src="{{asset($front->photo)}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$front->nom}}</h5>
            <p class="card-text">{{$front->fonction}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    @endforeach
  </div>
@endsection