
@extends('layouts.admin')


@section('content')
<div class="grid-form1">
 		<h3 id="forms-example" class="">Добавление страны</h3>
 		<form action="{{ route('admin.country.store') }}" method="POST" enctype="multipart/form-data">
             @csrf
             @if($errors->has('name'))
              @foreach($errors->get('name') as $errorMessage)
              <div class="alert alert-info" role=""alert>
                  {{$errorMessage}}
              </div>
              @endforeach
              @endif
  <div class="form-group">
    <label for="exampleInputEmail1">Название страны</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Международный код</label>
    <input type="text" class="form-control" name="abbr">
  </div>
  @if($errors->has('abbr'))
              @foreach($errors->get('abbr') as $errorMessage)
              <div class="alert alert-info" role=""alert>
                  {{$errorMessage}}
              </div>
              @endforeach
              @endif

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection