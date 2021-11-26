@extends('layout.app', [ "current" => "produtos" ])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">
                    <label for="estoqueProduto">Quantidade no estoque</label>
                    <input type="number" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="0">
                    <label for="precoProduto">Preço</label>
                    <input type="number" class="form-control" name="precoProduto" id="precoProduto" placeholder="0.00">
                    <label for="categoriaProduto">Categoria</label>
                    <select name="categoriaProduto" id="categoriaProduto">
                        {{--  fazer as opções do select serem as categorias cadastradas no banco  --}}
                        @foreach
                            <option value="{{ $cat->id }}">{{ $cat->nome }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

@endsection