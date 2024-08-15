@extends('components.body')

@section('title')
    Castellano
@endsection

@section('navigation')
    <x-partials.language_navigation />
@endsection

@section('top')
    <x-partials.search_for_word />
@endsection

@section('medium')
    <div class="container">
        <p>Este es el contenido por defecto.</p>
    </div>
@endsection
