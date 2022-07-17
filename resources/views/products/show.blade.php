@extends('layouts.base')

@section('page-title')
    
@endsection

@section('page-content')
    <h1>{{$product->title}}</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">thumb</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Sale Date</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$product->id}}</td>
                <td><img src="{{$product->thumb}}" alt=""></td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->series}}</td>
                <td>{{$product->sale_date}}</td>
                <td>{{$product->type}}</td>
                <td><a type="button" class="btn btn-outline-primary" href="{{route('products.index', $product->id)}}">Back</a></td>
              </tr>  
        </tbody>
      </table>
@endsection