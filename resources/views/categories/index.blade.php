@extends('app')
@section('content')
    <div class="container">

        <h1>Categorias</h1>

        <br>
        <a href="{{ route('admin.categories.create') }}" class="btn btn-primary pull-right" >New Category</a>
        <br>
        <br>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', ['id' => $category->id ]) }}" >Edit</a> |
                    <a href="{{ route('categories.delete', ['id' => $category->id ]) }}" onclick="if(!confirm('Tem certeza que quer deletar?')){return false;};" >Delete</a>
                </td>
            </tr>
            @endforeach
        </table>
        {!! $categories->render() !!}

    </div>
@endsection
