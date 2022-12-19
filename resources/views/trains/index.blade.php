@extends('layouts.app')


@section('content')
    <div class="container">
        <h2>Treni</h2>
        <ul>

            @foreach ($trains as $item)
                <li>Stazione arrivo:{{ $item->stazione_arrivo }}, Stazione partenza:{{ $item->stazione_partenza }}</li>
            @endforeach

        </ul>
    </div>
@endsection
