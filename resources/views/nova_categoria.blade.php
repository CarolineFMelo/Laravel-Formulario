@extends('layout.app', [ "current" => "categorias" ])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categoria</label>
                    <input  
                        class="form-control {{ $errors->has('nomeCategoria') ? 'is-invalid' : '' }}" 
                        type="text" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria"
                    >
                    {{--  mensagem de validação  --}}
                    @if($errors->has('nomeCategoria'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nomeCategoria') }}
                    </div>
                @endif
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>
            </form>
        </div>
    </div>

@endsection