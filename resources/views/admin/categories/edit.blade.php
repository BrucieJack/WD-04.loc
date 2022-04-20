
@extends('layouts.admin')


@section('content')
<div class="grid-form1">
 		<h3 id="forms-example" class="">Добавление статьи</h3>
     <form action="{{ route('category.update', ['category' => $category->id]) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')        
      @csrf
         
  <div class="form-group">
    <label for="exampleInputEmail1">Название категории</label>
    <input type="text" class="form-control" name="name" value="{{$category->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Изображение</label>
    <input type="file" class="form-control" name="image">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Родительская категория</label>
    <select name="parent_id"  class="form-control">
      <option value="0" selected> Нет родителя</option>
      @foreach($categories as $category)

      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection