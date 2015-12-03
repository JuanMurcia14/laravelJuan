@extends('layouts.master')
@section('title', 'Ejercicio 1')

@section('sidebar')
@parent
<h1>EJERCICIO 1</h1>
@endsection
@section('content')
    <form class="form-horizontal" role="form" method="get" action="{{ url('/Equipos/pais') }}">
                        
        <div class="form-group">
            <label class="col-md-4 control-label">Pais:</label>
            <div class="col-md-6">
                <select class="form-control" name="pais">
                    <option value="1">Colombia</option>
                    <option value="2">Espana</option>
                    <option value="3">Inglaterra</option>
                    <option value="4">Italia</option>
                </select>                
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-block btn-primary">
                    Enviar
                </button>
            </div>
        </div>
        <div class="row">
            @yield('Consulta')
        </div>
    </form>
@endsection