@extends('layouts.nav')

@section('app')
        <div class=" jumbotron jumbotron-fluid text-center">
            @yield('header')
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
            <hr class="my-4">
            @yield('content')
            <hr class="my-4">
        </div>
    </div>
</body>
<footer>
<div class=" jumbotron jumbotron-fluid text-center">
    @yield('references')
</div>
</footer>
@endsection

