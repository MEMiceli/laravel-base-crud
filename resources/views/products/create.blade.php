@extends('layouts.base')

@section('page-title')
    add new product
@endsection

@section('page-content')
    <h1>Add new product</h1>
    <form action="{{route('products.store')}}" method="POST">
        @csrf

        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Insert title">
        </div>
        <div>
            <label for="type">Type</label>
            <select class="custom-select" id="type" name="type" >
            <option selected>Chose Type</option>
            <option value="graphic novel">graphic novel</option>
            <option value="comic book">comic book</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="title" name="description" cols="30" rows="10" placeholder="Insert description"></textarea>
          </div>
          <div class="form-group">
            <label for="thumb">Image</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Insert url image">
          </div>
          <div class="form-group">
            <label for="price">price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Insert price">
          </div>
          <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Insert series">
          </div>
          <div class="form-group">
            <label for="sale_date">Sale date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
          </div>
        <button type="submit" class="btn btn-primary">Add</button>
      </form>
@endsection