@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>surah</th>
                        <th>id</th>
                        <th>Text</th>
                        <th>Translation</th>
                    </tr>
                </thead>
                <tbody>
               
                   @foreach($ayats->ayat as $ayat )
                   <tr>
                   <td> {{$ayats->name}}</td>
                    <td> {{$ayat->id}}</td>
                    <td> {{$ayat->text}}</td>
                    <td> {{ $ayat->trans->text }}</td>
                    
                   
                   </tr>
                   @endforeach
                </tbody>

            </table>
           
         

        </div>
    </div>
</div>

@endsection
