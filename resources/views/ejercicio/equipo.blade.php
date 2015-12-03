@extends('Ejercicio.ejercicio')
@section('Consulta')
    <div class="form-group">
        <div class="row">    
            <div class="col-md-4"></div>    
            <div class="col-md-8">
                <label><h1> EQUIPOS </h1></label>
            </div>        
        </div>        
        <div class="row">
            <div class="col-md-6"></div>                           
            <div class="col-md-6"> 
                <ol>
                    @foreach($equipos as $equipo)   
                        <li>{{$equipo}}</li>
                    @endforeach 
                </ol>                                       
            </div>                
        </div>        
    </div>
@endsection