@extends('layout.mainpage')
@section('title', 'Todos')
@section('conteudo')

    {{-- {{$cards}} --}}
    @foreach ($cards as $card)
        <div class="card">
            <div class="card-header">
                Tarefa
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $card->title }};</h5>
                <p class="card-text">{{ $card->description }};</p>
                <a href="" class="btn btn-primary">Finalizar</a>
                <a href={{route("card.delete", $card->id)}} class="btn btn-danger">Deletar</a>
            </div>
        </div>
    @endforeach

@endsection
