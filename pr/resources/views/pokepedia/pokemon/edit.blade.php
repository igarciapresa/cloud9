@extends('pokepedia')

@section('content')
    <form action="{{ url('pokemon/' . $pokemon->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h2>{{ $pokemon->name }}</h2>
        <h3>
            Type:
            <select name="idtype">
                <option value=""></option>
                @foreach ($types as $type)
                    <option value="{{$type->id }}"
                            @if(intval(old('idtype', $pokemon->idtype)) === $type->id) selected @endif>
                        {{ $type->type }}
                    </option>
                @endforeach
            </select>
            ({{ $pokemon->type->type }})
        </h3>
        <h3>
            Height:
            <input class="form-control" name="height" required placeholder="pokemon height" type="number" min="0.00" max="9999.99" step="0.01" value="{{ old('height', $pokemon->height) }}">
            ({{ $pokemon->height }})
        </h3>
        <h3>
            Weight:
            <input class="form-control" name="weight" required placeholder="pokemon weight" type="number" min="0.00" max="9999.99" step="0.01" value="{{ old('weight', $pokemon->weight) }}">
            ({{ $pokemon->weight }})
        </h3>
        <h3>
            Ability:
            <input class="form-control" name="ability" required placeholder="pokemon ability" type="text" maxlength="100" value="{{ old('ability', $pokemon->ability) }}">
            ({{ $pokemon->ability }})
        </h3>
        <h3>
            File:
            <input type="file" name="file">
        <h3
        <h3>
            <a href="{{url('/')}}" class="btn btn-info">volver</a>
            <input type="submit" value="editar">
        </h3>
    </form>
@endsection

@section('aside')
    <div class="config-page-list">
        <img src="{{ $archivo }}" alt="{{ $pokemon->name }}" width="95%">
    </div>
@endsection