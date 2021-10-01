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
                    dd{{$datas}}
                    @foreach ($datas as $data)
                    <tr>
                        <td scope="row">{{ $data->arabic_id}}</td>
                        <td>{{ $data->text }}</td>
                        <td>
                        <a class="btn btn-success" href="{{ route('thais', $data) }}">view</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            {{$datas->links()}}

        </div>
    </div>
</div>

@endsection
