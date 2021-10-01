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
              dd {{$thais}}
                   @foreach($thais->thai as $thai )
                   <tr>
                   <td> {{$tahis->arabic_id}}</td>
                    <td> {{$thai->ayat}}</td>
                    <td> {{$thai->text}}</td>
                  
                    
                   
                   </tr>
                   @endforeach
                </tbody>

            </table>
           
         

        </div>
    </div>
</div>

@endsection


@endsection
