@extends('blocos.base')


@section('estilos')
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
@endsection

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
                    <div class="form-group">
                        <label>Checkbox</label>
                        <div class="checkbox">
                            <label>
                              <input type="checkbox"> Check me out
                            </label>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>

                <table class="table table-bordered" style="margin-top: 35px">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nome</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                      </tr>
                    </tbody>
                  </table>

            </div>
        </div>
    </div>
@endsection