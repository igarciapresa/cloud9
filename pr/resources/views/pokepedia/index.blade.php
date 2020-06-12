@extends('pokepedia')

@section('content')
    <form action="{{ url('pokemon/') }}" method="post" class="destroy">
        @csrf
        @method('DELETE')
    </form>
    <p>PokePedia List</p>
    @foreach ($pokemon as $poke)
        <p>
            Pokemon <a href="{{ url('pokemon/' . $poke->id) }}">{{ $poke->name }}</a>
            @auth
                <a href="{{ url('pokemon/' . $poke->id . '/edit') }}">edit</a>
            @endauth
        </p>
    @endforeach
    {{ $pokemon->onEachSide(2)->links() }}
@endsection