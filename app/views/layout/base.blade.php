<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>

<body>

@section('nav')
This is the nav
@show


<div class="container">

    @yield('content')

</div>


<div class="container">
    @include('includes.footer')
</div>


@include('includes.scripts')

</body>

</html>