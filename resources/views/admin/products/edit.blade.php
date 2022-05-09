
@extends('layouts.admin')


@section('content')
<div class="grid-form1">
 		<h3 id="forms-example" class="">Добавление статьи</h3>
     <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST" enctype="multipart/form-data">
      @method('PUT')        
      @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Название продукта</label>
    <input type="text" class="form-control" name="name" value="{{$product->name}}">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Изображение</label>
    <input type="file" class="form-control" name="image">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Описание продукта</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Цена</label>
    <input type="number" class="form-control" name="price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Категория</label>
    <select name="category_id"  class="form-control">
      <option value="0" selected> Без категории</option>
      @foreach($categories as $category)

      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

@endsection