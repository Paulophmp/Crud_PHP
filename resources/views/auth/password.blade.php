
    @extends("layout.master")
    @section('title', 'Redefinir Senha')
    @section("container")

        <div class="panel-body panel-default">
            <div class="panel-heading">Reset Senha</div>
            <div class="panel-body">
                <!-- resources/views/auth/password.blade.php -->
                <form method="POST" action="/password/email" class="form-horizontal">
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label class="col-md-4 control-label">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="bnt">
                                Redefinir Senha
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    @endsection