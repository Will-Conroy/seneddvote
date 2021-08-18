@extends('layouts.nav')


        





    @section('app')
    <div class=" jumbotron jumbotron-fluid text-center">
            
            <div class="alert alert-success text-center">
                 @yield('header')
            </div>
            @if($errors->any())
                <div>
                    <h3>Errors:</h3>   
                        @foreach ($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                </div>
            @endif
            @if(session('message'))
                <div>
                    <h3>message:</h3>   
                    <p>{{session('message')}}</p>
                </div>
            @endif
            @yield('personalInfo')
        </div>

        <div class="alert alert-success text-center">
        <h3>Personal Projects</h3>
    
        </div>
        @yield('personal')
        <div class=" alert alert-success text-center">
        <h3>Academic Projects</h3>

        </div>
        @yield('academic')


    </div>
</body>

    @endsection


    
    
</html>

