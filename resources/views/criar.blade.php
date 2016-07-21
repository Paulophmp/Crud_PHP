

    @extends('layout.master')
    @section('title', 'Criar Usuário')
    @section('container')

        <h3>Novo Usuário</h3>

            @if($errors->any())
                <ul class="alert alert-danger text-center">
                    @foreach($errors->all() as $error)
                        <ul>{{  $error }}</ul>
                    @endforeach
                </ul>
            @endif

        <form method="post" action="usuarios/store" class="form-horizontal">
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

            <div class="form-group">
                <label class="control-label col-sm-2">Telefone:</label>
                <div class="col-sm-10">
                    <input type="tel" name="telefone" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Email:</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control">
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

            <div class="form-group" id="inputFile">
                <label class="control-label col-sm-2">Envie seu Curriculo:</label>
                <div class="col-sm-10">
                    <input type="file" name="documento" id="documento" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2">Envie seu Curriculo:</label>
                <div class="col-sm-10">
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                    <span>Selecionar Arquivos...</span>
                     <input id="fileupload" type="file" name="documento">
                    </span>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary" >Cadastra</button>
            </div>

        </form>
        @endsection
