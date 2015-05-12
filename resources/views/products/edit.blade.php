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

            {!! Form::label('category', 'Category:') !!}
            {!! Form::select('category_id', $categories, $product->category->id, ['class' => 'form-control']) !!}

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
            {!! Form::label('featured', 'Featured: ') !!}</br>
            {!! Form::radio('featured', 1, ($product->featured)?true:false, ['class' => 'field']) !!} Sim
            {!! Form::radio('featured', 0, (!$product->featured)?true:false, ['class' => 'field']) !!} Não

        </div>
        <div class="form-group">
            {!! Form::label('recommend', 'Recomendar: ') !!}</br>
            {!! Form::radio('recommend', 1, ($product->recommend)?true:false, ['class' => 'field']) !!} Sim
            {!! Form::radio('recommend', 0, (!$product->recommend)?true:false, ['class' => 'field']) !!} Não
        </div>


        <div class="form-group">

            {!! Form::submit('Save product', ['class' => 'btn btn-primary ']) !!}

        </div>

        {!! Form::close()  !!}

    </div>
@endsection
