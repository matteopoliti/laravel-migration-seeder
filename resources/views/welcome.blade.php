@extends('layouts.basic')

@section('title', 'Benvenuto | Home')


@section('content')
    <main class="bg_main">
        <table class="table opacity-75 mt-5">
            <thead>
                <tr>
                    @foreach ($table_titles as $item)
                        <th scope="col" class="text-center">{{ $item }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $element)
                    <tr class="text-center">
                        <td scope="row">{{ $element->company }}</td>
                        <td>{{ $element->departure_station }}</td>
                        <td>{{ $element->arrival_station }}</td>
                        <td>{{ $element->departure_time }}</td>
                        <td>{{ $element->arrival_time }}</td>
                        <td>{{ $element->train_code }}</td>
                        <td>{{ $element->carriages }}</td>


                        @if ($element->on_time)
                            <td>-</td>
                        @else
                            <td>Delayed</td>
                        @endif

                        @if ($element->cancelled)
                            <td>Cancelled</td>
                        @else
                            <td>-</td>
                        @endif

                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
