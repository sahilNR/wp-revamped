@extends('layouts.main')

@section('content')

    @loop
    <section class="uk-section uk-section-primary">
        <div class="uk-container">
            @template('parts.content', 'page')
        </div>
    </section>

    @endloop
@endsection
