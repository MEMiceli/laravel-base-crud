@extends('layouts.base')

@section('page-title')
    Modify {{$product->title}}
@endsection

@section('page-content')
    <h1>Modify {{$product->title}}</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
        </div>
        <div>
            <label for="type">Type</label>
            <select class="custom-select" id="type" name="type" >
            <option value="graphic novel" {{$product->type == 'graphic novel' ? 'selected' : ''}}>graphic novel</option>
            <option value="comic book"{{$product->type == 'comic book' ? 'selected' : ''}}>comic book</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="title" name="description" cols="30" rows="10">{{$product->description}}</textarea>
          </div>
          <div class="form-group">
            <label for="thumb">Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{$product->thumb}}">
          </div>
          <div class="form-group">
            <label for="price">price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{$product->price}}">
          </div>
          <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{$product->series}}">
          </div>
          <div class="form-group">
            <label for="sale_date">Sale date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{$product->sale_date}}">
          </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
@endsection