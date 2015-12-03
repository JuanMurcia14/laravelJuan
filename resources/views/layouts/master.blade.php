<html>
    <head>
        <title>Ejercicios App - @yield('title')</title>

        


            {!! Html::style('css/bootstrap.min.css') !!}





    </head>
    <body>
        @section('sidebar')
            Sidebar Master
        @show

        <div class="container">
            @yield('content')
        </div>


{!! Html::script('js/jquery.min.js'); !!}
{!! Html::script('js/bootstrap.min.js'); !!}



    </body>
</html>
