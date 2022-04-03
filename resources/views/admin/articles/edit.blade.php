
@extends('layouts.admin')


@section('content')
<div class="grid-form1">
 		<h3 id="forms-example" class="">Добавление статьи</h3>
 		<form action="{{ route('admin.update_article', ['id' => $article->id]) }}" method="POST" enctype="multipart/form-data">
         @method('PUT')    
         @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Название</label>
    <input type="text" class="form-control" name="name" value="{{$article->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="file" class="form-control" name="iamge">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Содержание</label>
    <textarea name="content"  cols="30" rows="10" class="form-control">{{$article->content}}</textarea>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection