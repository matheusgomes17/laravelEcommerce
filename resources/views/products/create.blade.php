@extends('app')
@section('content')
    <div class="container">

        <h1>Create product</h1>


        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => 'admin.products.store', 'method' => 'post'])  !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', '', ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description', '', ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', '', ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::submit('Add product', ['class' => 'btn btn-primary form-control']) !!}

        </div>

        {!! Form::close()  !!}

    </div>
@endsection
