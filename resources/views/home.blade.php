@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading mb-3">
                    <h5>Lista de Produtos</h5>
                </div>

                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <table class='table'>
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Ações</th>
                                    </tr>
                                </thead>

                                @forelse($produtos as $produto)
                                    <tr>
                                        <th scope="row">{{$produto->id}}</th>
                                        <th>{{$produto->name}}</th>
                                        <th>{{$produto->estoque->last()->quantidade}}</th>
                                    <th>
                                        <a class="btn btn-link" href="{{route('produto.detalhes',$produto->id)}}">Detalhes</a>
                                        <a class="btn btn-link" href="{{route('produto.delete',$produto->id)}}">Deletar</a></th>
                                    </tr>
                                @empty
                                    <tr>
                                        <th scope="row">Nenhum produto cadastrado ainda.</th>
                                        <th></th>
                                        <th></th>
                                        <th>

                                        </th>
                                    </tr>
                                @endforelse

                            </table>
                            {{ $produtos->links() }}
                        </div>
                    </div>



                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-6">
                <a class="btn btn-primary col-12" href="{{route('produto.add')}}"> Cadastrar</a>
                </div>
                <div class="col-6">
                    <button class="btn btn-default col-12">Buscar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
