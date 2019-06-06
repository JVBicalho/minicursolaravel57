@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
                <img  class="rounded mx-auto d-block mb-5 mt-5"src="{{asset('storage/prod/'.$produto->img)}}" alt="Logo Meu Stock">
            <h2>{{$produto->name}}</h2>
            <div>
                {{$produto->descricao}}
            </div>
            Quantidade em estoque :{{$produto->estoque->last()->quantidade}}
            <button type="button" class="btn btn-link" data-toggle="modal" data-target="#alterarEstoque">
                Alterar
            </button>

            <div class="modal fade" id="alterarEstoque" tabindex="-1" role="dialog" aria-labelledby="alterarEstoque">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Alterar Estoque</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="formEstoque" action="{{route('produto.estoque',$produto->id)}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="number" name="quantidade" id="quantidade" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secunday" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="teste()">Save
                                changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')

<script>
        function teste() {
            var v = document.getElementById("quantidade").value();
            if(v != null)
            document.getElementById("formEstoque").submit();
        }
    </script>
@endsection
