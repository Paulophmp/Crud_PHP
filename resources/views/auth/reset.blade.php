


        <div class="panel panel-default">
            <div class="panel-heading">Reset Senha</div>
            <div class="panel-body">
                <!-- resources/views/auth/reset.blade.php -->
                <form method="POST" action="/password/reset" class="form-horizontal">
                    {!! csrf_field() !!}
                    <input type="hidden" name="_token" value="{{ $token }}">

                    <div class="form-group">
                        <label class="col-md-4 control-label">E-mail</label>
                        <div class="col-md-6">
                            <input type="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Senha</label>
                        <div class="col-md-6">
                            <input class="form-control" type="password" name="password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Comfirma senha</label>
                        <div class="col-md-6">
                            <input type="password" name="password_confirmation">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4"></div>
                            <button type="submit">
                                Reset Password
                            </button>
                    </div>
                </form>
            </div>
        </div>
