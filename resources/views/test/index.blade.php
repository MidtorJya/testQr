@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Surah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($surahs as $surah)
                    <tr>
                        <td scope="row">{{ $surah->id }}</td>
                        <td>{{ $surah->name }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('ayat', $surah) }}">View</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            {{$surahs->links()}}

        </div>
    </div>
</div>

@endsection
