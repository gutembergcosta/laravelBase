@if(isset($errors) && count($errors) > 0)

	@foreach ($errors->all() as $erro)
		<div class="alert alert-danger alert-dismissible" role="alert">{{$erro}}</div>
	@endforeach	

@endif



@if (session('msg'))




	<div class="alert alert-success alert-dismissible" role="alert">{{session('msg')}}</div>

@endif