@extends('blocos.base')


@section('estilos')

@endsection

@section('navbar')
    @include('includes.navbar')
@stop

@section('pagina')

    <div class="container">
        <h1 class="text-center">Item</h1>
        @include('includes.mensagens')
        <div class="row">
          
            <div class="col-md-4 col-md-offset-4">
                <form action="{{url('post-login')}}" method="POST" id="logForm">
                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control"  name="email" />
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="text" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                            <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Login</button>
                    </div>
                    <div class="form-group">
                        <a class="small" href="#">Forgot Password?</a>
                    </div>
					
                    
					<input type="hidden" name="id" value="{{$data['item']->id ?? ''}}">

					@csrf
                </form>
            </div>
        </div>
    </div>
@endsection



@section('scriptsPagina01')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login Form - XpertPhp</title>
        <link href="{{url('assets/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">  
										<form action="{{url('post-login')}}" method="POST" id="logForm">
										{{ csrf_field() }}
                                            <div class="form-group">
												<label class="small mb-1" for="inputEmailAddress">Email</label>
												<input class="form-control py-4" id="inputEmailAddress" name="email" type="email" placeholder="Enter email address" />
												
											</div>
                                            <div class="form-group">
												<label class="small mb-1" for="inputPassword">Password</label>
												<input class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" />
												@if ($errors->has('password'))
												  <span class="error">{{ $errors->first('password') }}</span>
												@endif
											</div>
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="{{url('register')}}">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>
@endsection