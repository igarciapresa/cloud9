@extends('pokepedia')

@section('content')
    <h2>{{ $pokemon->name }}</h2>
    <h3>Type: {{ $pokemon->type->type }}</h3>
    <h3>Height: {{ $pokemon->height }}</h3>
    <h3>Weight: {{ $pokemon->weight }}</h3>
    <h3>Ability: {{ $pokemon->ability }}</h3>
@endsection

@section('aside')
    <div class="config-page-list">
        <img src="{{ $archivo }}" alt="{{ $pokemon->name }}" width="95%">
    </div>
@endsection