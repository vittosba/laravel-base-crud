@extends('layouts.main')

@section('content')
    <section class="container flex-grow-1">
        <h1>Our Comics</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Sale Data</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>
                            SHOW
                        </td>
                        <td>
                            EDIT
                        </td>
                        <td>
                            DELETE
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection