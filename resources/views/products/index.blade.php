@extends('layouts.base')

@section('page-title')
    Tutti i comics
@endsection

@section('page-content')
    <h1>Tutti i comics</h1>
    {{-- @dump($products) --}}

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Title</th>
            <th scope="col">thumb</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td><img src="{{$product->thumb}}" alt=""></td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->series}}</td>
                <td>{{$product->type}}</td>
                <td><a type="button" class="btn btn-outline-primary" href="{{route('products.show', $product->id)}}">View</a>
                    <a type="button" class="btn btn-outline-danger" href="{{route('products.edit', $product->id)}}">Modify</a></td>
              </tr>  
            @endforeach
        </tbody>
      </table>
@endsection