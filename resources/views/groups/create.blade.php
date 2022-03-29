@extends('layouts.guest')

@section('content')
    <div class="row">
       <div class="col-md-6 m-auto">
          @include('partials.errors')
          <a href="{{route(groups.index') }}" class="btn btn-dark">Back</a>
          <form action="{{route('groups.store')}}" method="post">
              @csrf
              <div class="mb-3">
                  <label for="numeGrupa" class="from-label">Nume grupa</label>
                  <input type="text" class="from-control" id="numeGrupa" aria-describedy="emailHelp" name="name">
              </div>
              <button type="submit" class="btn btn-dark">Save</button>
          </form>
       </div>
    </div>
@endsection