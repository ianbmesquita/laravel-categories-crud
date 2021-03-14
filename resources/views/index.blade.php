@extends('layouts.app', ["current" => "index"])

@section('body')
    <div class="jumbotron mt-3 bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card-text">
                            Aqui você cadastra todos os seus produtos.
                            Só não se esqueça de cadastrar previamente as categorias.
                        </p>
                        <a href="/products/new" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>
                </div>

                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Categorias</h5>
                        <p class="card-text">
                            Cadastre as categorias dos seus produtos.
                        </p>
                        <a href="/categories/new" class="btn btn-primary">Cadastre suas categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
