<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
@include('layouts.share.head')
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

<!--begin::Main-->
<!--begin::Header Mobile-->
@include('layouts.share.header-mobile')
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Aside-->
    @include('layouts.share.sidebar')
    <!--end::Aside-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
        @include('layouts.share.header')
        <!--end::Header-->

            <!--begin::Content-->
            <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::زیر هدر-->
            @include('layouts.share.subheader')
            <!--end::زیر هدر-->

                <!--begin::Entry-->
            @yield('content')
            <!--end::Entry-->
            </div>
            <!--end::Content-->

            <!--begin::Footer-->
        @include('layouts.share.footer')
        <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>

<!--end::Main-->


<!-- begin::User Panel-->
@include('layouts.share.profile')
<!-- end::User Panel-->

<!--begin::پنل سریع-->
@include('layouts.share.quick-panel')
<!--end::پنل سریع-->

@include('layouts.share.script')

</body>
<!--end::Body-->
</html>
