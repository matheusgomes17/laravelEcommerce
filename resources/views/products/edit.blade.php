@extends('app')
@section('content')
    <div class="container">

        <h1>Edit product {{ $product->name }}</h1>


        @if($errors->any())
            <ul class="alert">
                @foreach($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ['admin.products.update', $product->id], 'method' => 'put'])  !!}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', $product->name  , ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('description',  $product->description , ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('price', 'Price:') !!}
            {!! Form::text('price', $product->price  , ['class' => 'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('featured', 'Featured:') !!}<br>

            {!! Form::radio('featured', false, false) !!} No<br>
            {!! Form::radio('featured', true, true) !!} Yes

        </div>


        <div class="form-group">
            {!! Form::label('recommend', 'Recommend:') !!}<br>
            {!! Form::radio('recommend', false, false) !!} No<br>
            {!! Form::radio('recommend', true, true) !!} Yes
        </div>


        <div class="form-group">

            {!! Form::submit('Save product', ['class' => 'btn btn-primary ']) !!}

        </div>

        {!! Form::close()  !!}

    </div>
@endsection
