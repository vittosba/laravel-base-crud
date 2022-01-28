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
                            <a class="btn btn-success" href="{{ route('comics.show', $comic->slug) }}">SHOW</a>

                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('comics.edit', $comic->slug) }}">EDIT</a>
                        </td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection