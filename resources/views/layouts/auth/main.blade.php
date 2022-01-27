<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('layouts.application.share.head')

    @yield('css')

    <title> فروشگاه woox - @yield('title')</title>
</head>

<body class="auth-page sidebar-collapse">

<!--begin main-->
<main>
    @yield('content')
</main>
<!--end main-->

<!--begin scripts-->
@include('layouts.application.share.script')

@yield('js')
<!--end scripts-->
</body>

</html>
