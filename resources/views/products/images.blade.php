@extends('app')
@section('content')
    <div class="container">

        <h1>Images of {{ $product->name }}</h1>

        <br>
        <a href="{{ route('product.images.create', ['id' => $product->id ] ) }}" class="btn btn-primary pull-right" >New Image</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Extension</th>
                <th>Action</th>
            </tr>
            @foreach($product->images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td>
                    <img src="{{ url('uploads/'.$image->id.'.'.$image->extension) }}" width="80" >
                </td>
                <td>{{ $image->extension }}</td>
                <td>
                    <a href="{{ route('product.images.destroy', ['id' => $image->id ]) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

        <a href="{{ url('admin/products') }}" class="btn btn-default">Voltar</a>

    </div>
@endsection
