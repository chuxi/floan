@extends('layout.none')


@section('head')

    @include('includes.head')

@stop

@section('nav')

    @include('includes.nav')



@stop

@yield('carousel')

<div class="container">


@section('content')



    <p>hello baby</p>



@stop

</div>

@section('footer')

<div class="container">
    @include('includes.footer')
</div>

    @include('includes.scripts')

@stop
