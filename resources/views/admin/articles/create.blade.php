
@extends('layouts.admin')


@section('content')
<div class="grid-form1">
 		<h3 id="forms-example" class="">Добавление статьи</h3>
 		<form action="{{ route('admin.store_article') }}" method="POST" enctype="multipart/form-data">
             @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Название</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" name="iamge">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Содержание</label>
    <textarea name="content"  cols="30" rows="10" class="form-control"></textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection