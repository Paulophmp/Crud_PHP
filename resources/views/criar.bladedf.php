
    @extends('layout.master')
    @section('title', 'Criar Usuário')
    @section('container')
<script src="/js/jquery-2.0.0.min.js"></script>
<script src="/js/mascara-telefone.js"></script>
<script>
    jQuery(function($){
        $("#phone").mask("(99) 9999-9999");
    });
</script>

        <h3>Novo Usuário</h3>

        <form method="post" action="usuarios/store" class="form-horizontal" enctype="multipart/form-data">
                {!! csrf_field() !!}

            <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">

            <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" name="nome" class="form-control" value="{{ old('nome') }}">
                            @if ($errors->has('nome'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('nome') }}</strong>
                               </span>
                         @endif
                    </div>
            </div>

            {{--<div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">--}}
                {{--<label class="control-label col-sm-2">Telefone:</label>--}}
                {{--<div class="col-sm-5">--}}
                    {{--<input type="tel" name="telefone" class="form-control" id="phone">--}}
                    {{--@if ($errors->has('telefone'))--}}
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('telefone') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}

            <div class="form-group{{ $errors->has('telefone') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2" for="phone">Telefone:</label>
                <div class='col-sm-5'>
                    <div class="input-group">
                        <input type='text' id="phone" name="telefone" class="form-control" />
                        <span class="input-group-addon">
                                <span class="glyphicon glyphicon-earphone"></span>
                             </span>

                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="datepicker">Data Nascimento:</label>
                    <div class='col-sm-5'>
                        <div class="input-group date"  data-date-format="dd/mm/yyyy">
                            <input type='text' id="datepicker" name="dataNascimento" class="form-control" />
                             <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                             </span>
                    </div>
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                   <strong>{{ $errors->first('email') }}</strong>
                               </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Estado:</label>
                    <div class="col-sm-10">
                        <select name="estado" class="btn btn-default">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                        </select>
                    </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Cidade:</label>
                <div class="col-sm-10">
                    <input type="text" name="cidade" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Endereço:</label>
                <div class="col-sm-10">
                    <input type="text" name="endereco" class="form-control">
                </div>
            </div>

            <div class="form-group{{ $errors->has('documento') ? ' has-error' : '' }}">
                <label class="control-label col-sm-2">Envie seu Curriculo:</label>
                <div class="col-sm-10">
                    <input type="file" name="documento" id="documento" class="form-control">
                    @if ($errors->has('documento'))
                        <span class="help-block">
                            <strong>{{ $errors->first('documento') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <script src="/js/jquery-2.0.0.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            <script src="/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
            <script src="/bootstrap-datepicker/locales/bootstrap-datepicker.pt-BR.min.js"></script>
            <script>
                $('.input-group.date').datepicker({
                    language: 'pt-BR',
                    orientation: 'bottom right',
                    clearBtn: true,
            });
            </script>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" >Cadastra</button>
            </div>

            {{--<div class="form-group has-error has-feedback">--}}
                {{--<label class="control-label" for="">Entrada com erro</label>--}}
                {{--<input type="text" class="form-control" id="" aria-describedby="">--}}
                {{--<span class="glyphicon glyphicon-remove form-control-feedback" aria-hidden="true"></span>--}}
                {{--<span id="inputError2Status" class="sr-only">(erro)</span>--}}
            {{--</div>--}}

        </form>
        @endsection
