@extends('layouts.app', ["current" => "products" ])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/products" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nome do produto: </label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Produto">
                </div>

                <div class="form-group">
                    <label for="name">Quantidade no estoque: </label>
                    <input type="text" class="form-control" name="stock" id="stock" placeholder="Quantidade">
                </div>

                <div class="form-group">
                    <label for="name">Preço (unidade): </label>
                    <input type="text" class="form-control" name="price" id="price" placeholder="Preço">
                </div>

                <div class="form-group">
                    <label for="name">Categoria: </label>
                    <select name="category_id" id="category_id" class="form-control form-select">
                        <option selected>Selecione...</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="cancel" class="btn btn-danger btn-sm"> Cancelar</button>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            </form>
        </div>
    </div>

@endsection
