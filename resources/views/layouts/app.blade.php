<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('includes.head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    <div class="container">
        @yield('content')
    </div>

    @include('includes.footer')

    <script type="" src="">
    $('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')})
   </script>

</body>
</html>