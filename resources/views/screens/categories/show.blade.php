@extends('layouts.app', ["current" => "categories"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title"><strong>Categorias cadastradas</strong></h5>

            @if (count($categories) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <td>Código</td>
                            <td>Nome</td>
                            <td>Ações</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <a href="/categories/{{ $category->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                                    <a href="/categories/{{ $category->id }}/destroy" class="btn btn-danger btn-sm">Excluir</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>

        <div class="card-footer">
            <a href="/categories/new" class="btn btn-primary btn-sm">Nova categoria</a>
        </div>
    </div>
@endsection
