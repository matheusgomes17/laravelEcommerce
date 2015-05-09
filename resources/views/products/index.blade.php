@extends('app')
@section('content')
    <div class="container">

        <h1>Produtos</h1>

        <br>
        <a href="{{ route('admin.products.create') }}" class="btn btn-primary pull-right" >New Product</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', ['id' => $product->id ]) }}" >Edit</a> |
                    <a href="{{ route('products.delete', ['id' => $product->id ]) }}" onclick="if(!confirm('Tem certeza que quer deletar?')){return false;};" >Delete</a>
                </td>
            </tr>
            @endforeach
        </table>

    </div>
@endsection
