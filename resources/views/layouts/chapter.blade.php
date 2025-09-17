@extends('layouts.main')

@section('content')
    <div class='chapter container'>
        @if ($chapter->is_end == '1')
            <h2>Game Over</h2>
            <a href='/show/1'>Restart game</a>
        @else
            @if (isset($illustration->filename))
                <img src="{{ asset('img/' . $illustration->filename) }}" alt="illustration">
            @endif

            <div class="chapter__text">
                <?= htmlspecialchars_decode($chapter->text) ?>

            </div>


            <div class='choices'>

                @foreach ($choices as $choice)
                    <a href="./{{ $choice->goto_id }}">
                        <button type='button' class='btn btn-sm'>
                            {{ $choice->text }}
                        </button>
                    </a>
                @endforeach

            </div>
        @endif
    </div>

@endsection
