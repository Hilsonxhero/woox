<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    @include('layouts.application.share.head')

    @yield('css')

    <title> فروشگاه woox - @yield('title')</title>
</head>

<body class="index-page sidebar-collapse">
<!--begin header-->
@include('layouts.application.share.header')
<!--end header-->

<!--begin main-->
<main>
    @yield('content')
</main>
<!--end main-->

<!--begin footer-->
@include('layouts.application.share.footer')
<!--end footer-->

<!--begin scripts-->
@include('layouts.application.share.script')

@yield('js')
<!--end scripts-->
</body>

</html>
