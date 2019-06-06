@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <form action="{{route('produto.add')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <input placeholder="Nome do Produto" type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <input placeholder="Descrição" type="text" name="descricao" id="descricao" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <input placeholder="Quantidade em estoque" class="form-control" type="number" name="quantidade" id="quantidade">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-8 offset-md-2 col-sm-12">
                        <div class="input-group">
                            <div class="custom-file">
                                <input placeholder="" type="file" name="img" accept="image/png" id="img" id="img" class="custom-file-input">
                                <label class="custom-file-label" id="nameFile"for="img">Escolha uma Imagem</label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="form-group row">
                        <div class="col-md-8 offset-md-2 col-sm-12">
                            <button type="submit" class="btn btn-success rigth">Cadastrar</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $().ready(function(){
            $('input[type="file"]').change(function(e){
                var nome = e.target.files[0].name;
                $('#nameFile').text(nome);
            })
        })
    </script>
@endsection
