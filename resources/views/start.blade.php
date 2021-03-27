@extends('blocos.base')


@section('estilos')

@endsection

@section('metatags')
	<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('navbar')
    @include('includes.navbar')
@stop

@section('pagina')

    <div class="container">


        <h1 class="text-center">Item</h1>
		@include('includes.mensagens')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form method="POST" action ='{{url("item/salvar/")}}'>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" value="{{$data['item']->nome ?? ''}}">
                    </div>
					<div class="row">
						<div class="form-group col-md-4 ">
							<label>Checkbox</label>
							<div class="checkbox">
								<label><input name='ckbox' type="checkbox"> Opção 01 </label><br>
								<label><input name='ckbox' type="checkbox"> Opção 02 </label><br>
								<label><input name='ckbox' type="checkbox"> Opção 03 </label><br>
							</div>
						</div>
						<div class="form-group col-md-4 ">
							<label>Radio</label>
							<div class="checkbox">
								<label><input name='radio' type="radio"> Opção 01 </label><br>
								<label><input name='radio' type="radio"> Opção 02 </label><br>
								<label><input name='radio' type="radio"> Opção 03 </label><br>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Select</label>
						<select class="form-control" name="categoria" class="categoria">
							<option></option>

							@foreach ($data['categorias'] as $categ)
								<option value="{{$categ->id}}" @isset($data['item']) @if ($categ->id == $data['item']->id_categoria) selected="selected" @endif @endisset  >{{$categ->nome}}</option>
							@endforeach	
							
						
						  </select>
					</div>
					<div class="form-group">
						<label>textarea</label>
						<textarea class="form-control" rows="3"></textarea>

					</div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>

					<input type="hidden" name="id" value="{{$data['item']->id ?? ''}}">

					@csrf
                </form>

	

                <table id="tabela" class="table table-bordered" style="margin-top: 35px">

                    <thead>
                      <tr>
                        <th style="width: 50px">#</th>
                        <th>Nome</th>
                        <th>Categoria</th>
                        <th style="width: 120px">
							
						</th>
                      </tr>
                    </thead>
                    <tbody>
						
						@foreach ($data['lista'] as $item)

						@php
							$categoria = $item->find($item->id)->relCategoria;
						@endphp

						<tr>
							<th scope="row">{{$item->id}}</th>
							<td>{{$item->nome}}</td>
							<td>{{$categoria->nome}}</td>
							<td>
								<a href="{{url("item/editar/$item->id")}}" type="button" class="btn btn-success btn-xs">Editar</a>
								<a type="button" data-id="{{$item->id}}" class="btn btn-warning btn-xs deletar">Excluir</a>
							</td>
						</tr>
						@endforeach	
                     
					  
                     
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
@endsection

@section('scriptsPagina')
	<script>

		function excluir(token,destino){
		
			
			
			var tkn = $('#tabela > input[name=_token]').val();	

			$.ajax({
				url: destino,    
				dataType: "json",
				type: 'DELETE',
				data: {
					'_token': token
				},
				success: function (data) {
					if(data['status'] == 0 ){
						alert(data['msg']);
					}
				},
				error: function () {}
			});
	
		}

		$('.deletar').click(function (){

			if (confirm("Deseja realmente deletar este item?") == true) {
			
				excluir($("meta[name='csrf-token']").attr("content"),"{{ url('item/deletar') }}"+'/'+$(this).data('id'));

			}
		});


		

	</script>
@endsection