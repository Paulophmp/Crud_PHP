
    <!-- resources/views/auth/login.blade.php -->

    @extends('layout.master')
    @section('title', 'Login')
    @section('container')

        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
             <div class="panel-body">

                 @if(count($errors) > 0 )
{{--                     @if($errors->any())--}}
                     <ul class="alert alert-danger text-center">
                         @foreach($errors->all() as $error)
                             <ul>{{  $error }}</ul>
                         @endforeach
                     </ul>
                 @endif

             <form method="POST" action="/auth/login" class="form-horizontal">
                {!! csrf_field() !!}

                <div class="form-group">
                    <label class="col-md-4 control-label" for="Email">Email</label>
                    <div class="col-md-6">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="senha">Senha</label>
                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password"  id="senha">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="ckeckbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <a href="{{ url('/password/email') }}">Esqueceu a Senha ?</a>
                    </div>
                </div>
             </form>
             </div>
        </div>
        <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
        <span class="sr-only">Loading...</span>

   @endsection