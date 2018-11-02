    <link href="{{ URL::asset('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('assets/admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" >
    <!-- Ionicons -->
    <link  href="{{ URL::asset('assets/admin/bower_components/Ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ URL::asset('assets/admin/dist/css/AdminLTE.min.css')}}" rel="stylesheet" >

 

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>MQ</b>APP</a>
    </div>
  <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    <div class="panel-box-body">
                        {{ csrf_field() }}
                   
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus><span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif 
                    </div>
                  
                        
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck" style="margin-left: 20px"> 
                                    <!-- <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label> -->
                                </div>
                            </div>
                       

                            <div class="col-xs-11" style="margin-left: 20px">
                              
                                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                                        Login
                                    </button>

                                    <!-- <a class="text-center" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a> -->
                            </div>
                        </div>
                    </form>
         </div>
</div>

    <script src="{{ URL::asset('assets/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ URL::asset('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- SlimScroll -->
    <script src="{{ URL::asset('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script> 
</body>