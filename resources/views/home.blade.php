@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<a href="{{ route('admin.products.index') }}">Products</a> </br>
                    <a href="{{ route('admin.categories.index') }}">Categories</a> </br>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection
