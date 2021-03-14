@extends('layouts.app', ["current" => "products"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title"><strong>Produtos cadastrados</strong></h5>

            @if (count($products) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Nome</td>
                            <td>Estoque</td>
                            <td>Preço</td>
                            <td>Ações</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="/products/{{ $product->id }}/destroy" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>

        <div class="card-footer">
            <a href="/products/new" class="btn btn-primary btn-sm">Novo produto</a>
        </div>
    </div>
@endsection
