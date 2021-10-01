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
              dd {{$arabics}}
                   @foreach($arabics->arabic as $arabic )
                   <tr>
                   <td> {{$arabics->surah_name}}</td>
                    <td> {{$arabic->ayat}}</td>
                    <td> {{$arabic->text}}</td>
                   
                    
                   
                   </tr>
                   @endforeach
                </tbody>

            </table>
           
         

        </div>
    </div>
</div>

@endsection
