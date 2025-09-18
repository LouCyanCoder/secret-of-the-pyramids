@extends('layouts.main')

@section('content')

    <div class='chapter container'>
        @if ($chapter->is_end == '1')
            <h2>Game Over</h2>
            <a href='/show/1'>Restart game</a>
        @else
            @if (isset($illustration->filename))
                <div class="chapter__illustration">

                    <img src="{{ asset('img/' . $illustration->filename) }}" alt="illustration">
                </div>
            @endif

            <div class="chapter__text">
                <?= htmlspecialchars_decode($chapter->text) ?>

            </div>


            <div class='chapter__choices mt-2'>

                @foreach ($choices as $choice)
                    <a href="./{{ $choice->goto_id }}" class="btn btn-sm" role="button">
                        {{ $choice->text }}
                    </a>
                @endforeach

            </div>
        @endif
    </div>

@endsection
