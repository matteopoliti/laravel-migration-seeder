@extends('layouts.basic')

@section('title', 'Benvenuto | Home')


@section('content')
    <main>
        <div>
            {{ dd($trains) }}
        </div>
    </main>
@endsection
