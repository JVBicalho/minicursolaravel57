@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="container-fluid">
                        <div class="row">
                            <table class='table'>
                                <th>
                                    <td>id</td>
                                    <td>Nome</td>
                                    <td>Quantidade</td>
                                </th>
                                
                                @forelse($produtos as $produto)
                                    <tr>
                                        <td>{{$produto->id}}</td>
                                        <td>{{$produto->name}}</td>
                                        <td>{{$produto->quantidade}}</td>
                                    </tr>
                                @empty
                                    <p>Sem produtos cadastrados</p>
                                @endforelse
                                
                            </table>
                        </div>
                    </div>
                    

                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
