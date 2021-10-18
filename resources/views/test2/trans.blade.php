@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>text</th>
                        <th>tran</th>
                    
                    </tr>
                </thead>
                <tbody>
             
                   @foreach($arabics->arabic as $arabic )
                   <tr>
                   <td> {{$arabic->text}}</td>
                   <td> {{$arabic->thais->text}}</td>
                  
                  
                    
                   
                   </tr>
                   @endforeach
                </tbody>

            </table>
           
         

        </div>
    </div>
</div>




@endsection
