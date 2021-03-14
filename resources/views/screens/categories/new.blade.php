@extends('layouts.app', ["current" => "categories" ])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/categories" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome da categoria: </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Categoria">
                </div>

                <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
        </div>
    </div>

@endsection
