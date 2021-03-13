@extends('blocos.base')


@section('header')
    @include('includes.header')
@stop

@section('estilos')
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
@endsection

@section('navbar')
    @include('includes.navbar')
@stop

@section('pagina')

    <div class="container">
        <h1 class="text-center">Item</h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <form>
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control">
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
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						  </select>
					</div>
					<div class="form-group">
						<label>textarea</label>
						<textarea class="form-control" rows="3"></textarea>

					</div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

                <table class="table table-bordered" style="margin-top: 35px">
                    <thead>
                      <tr>
                        <th style="width: 50px">#</th>
                        <th>Nome</th>
                        <th style="width: 150px">
							
						</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Nome</td>
                        <td>
							<button type="button" class="btn btn-primary btn-xs">Ver</button>
                        	<button type="button" class="btn btn-success btn-xs">Editar</button>
                        	<button type="button" class="btn btn-warning btn-xs">Excluir</button>
						</td>
                      </tr>
					  <tr>
                        <th scope="row">1</th>
                        <td>Nome</td>
                        <td>
							<button type="button" class="btn btn-primary btn-xs">Ver</button>
                        	<button type="button" class="btn btn-success btn-xs">Editar</button>
                        	<button type="button" class="btn btn-warning btn-xs">Excluir</button>
						</td>
                      </tr>
					  <tr>
                        <th scope="row">1</th>
                        <td>Nome</td>
                        <td>
							<button type="button" class="btn btn-primary btn-xs">Ver</button>
                        	<button type="button" class="btn btn-success btn-xs">Editar</button>
                        	<button type="button" class="btn btn-warning btn-xs">Excluir</button>
						</td>
                      </tr>
					  <tr>
                        <th scope="row">1</th>
                        <td>Nome</td>
                        <td>
							<button type="button" class="btn btn-primary btn-xs">Ver</button>
                        	<button type="button" class="btn btn-success btn-xs">Editar</button>
                        	<button type="button" class="btn btn-warning btn-xs">Excluir</button>
						</td>
                      </tr>
                     
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
@endsection