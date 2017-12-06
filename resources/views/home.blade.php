@extends('layouts.masterAdmin')

@section('content')

<section id="comment" class="primary">
    <div class="container">
        <div class="row">
         <ul class="list-group">
         @if(!empty($contatos))    
                @foreach($contatos as $contato)
                    <li class="list-group-item">
                        <strong>
                            <h3>{{$contato->name}}</h3>
                            <br>
                            {{$contato->created_at->diffForHumans()}} &nbsp:
                        </strong>

                        {{$contato->body}}

                        <h6>{{$contato->email}}</h6>
                        
                    
                    </li>

                @endforeach
         @endif
        </div>
    
    </div>



</section>

@endsection