@extends('layouts.panel.main')

@section('css')

@endsection

@section('content')
    <!--begin::Card-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header mt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1 me-5">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="black" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-permissions-table-filter="search"
                        class="form-control form-control-solid w-250px ps-15" placeholder="جستجو مجوز ها" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Button-->
                <button type="button" class="btn btn-light-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_add_permission">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="black" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    ایجاد مجوز جدید
                </button>
                <!--end::Button-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                <!--begin::Table head-->
                <thead>
                    <!--begin::Table row-->
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="min-w-125px">عنوان</th>
                        <th class="min-w-125px">تاریخ ایجاد</th>
                        <th class="text-end min-w-100px">عملیات</th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="fw-bold text-gray-600">
                    @foreach ($permissions as $permission)
                        <tr>

                            <td>{{ $permission->name }}</td>


                            <td>{{ verta($permission->created_at)->formatDifference() }}</td>

                            <td class="text-end">
                                <!--begin::Update-->
                                <button class="js-edit-btn btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                    data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission"
                                    data-permission="{{ json_encode($permission) }}">

                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                </button>

                                <form class="d-inline-block" method="post" action="" id="js-delete-form">
                                    @csrf
                                    @method('delete')
                                </form>

                                <button data-id="{{ json_encode($permission->id) }}"
                                    class="js-delete-btn btn btn-icon btn-active-light-primary w-30px h-30px"
                                    data-kt-permissions-table-filter="delete_row">

                                    <span class="svg-icon svg-icon-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <path
                                                d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                fill="black" />
                                            <path opacity="0.5"
                                                d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                fill="black" />
                                            <path opacity="0.5"
                                                d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                fill="black" />
                                        </svg>
                                    </span>

                                </button>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
    <!--begin::Modals-->
    <!--begin::Modal - Add permissions-->
    <div class="modal fade" id="kt_modal_add_permission" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">ساخت مجوز جدید</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-permissions-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_permission_form" class="form"
                        action="{{ route('admin.permissions.store') }}" method="post">
                        @csrf
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mb-2">
                                <span class="required">عنوان</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-html="true"
                                    data-bs-content="نام های مجوز برای منحصر به فرد بودن ضروری است."></i>
                            </label>

                            <input class="form-control form-control-solid" placeholder="عنوان مجوز" name="name" />
                        </div>

                        {{-- <div class="fv-row mb-7"> --}}
                        {{-- <label class="form-check form-check-custom form-check-solid me-9"> --}}
                        {{-- <input class="form-check-input" type="checkbox" value="" name="permissions_core" --}}
                        {{-- id="kt_permissions_core"/> --}}
                        {{-- <span class="form-check-label" for="kt_permissions_core">Set as core permission</span> --}}
                        {{-- </label> --}}
                        {{-- </div> --}}


                        {{-- <div class="text-gray-600">Permission set as a --}}
                        {{-- <strong class="me-1">Core Permission</strong>will be locked and --}}
                        {{-- <strong class="me-1">not editable</strong>in future --}}
                        {{-- </div> --}}

                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-permissions-modal-action="cancel">
                                لغو
                            </button>
                            <button type="submit" class="btn btn-primary" data-kt-permissions-modal-action="submit">
                                <span class="indicator-label">ایجاد</span>
                                <span class="indicator-progress">منتظر بمانید ..
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Add permissions-->
    <!--begin::Modal - Update permissions-->
    <div class="modal fade" id="kt_modal_update_permission" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">ویرایش مجوز</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-permissions-modal-action="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">

                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">

                        <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
                                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                                    fill="black" />
                                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                                    fill="black" />
                            </svg>
                        </span>
                        <div class="d-flex flex-stack flex-grow-1">
                            <div class="fw-bold">
                                <div class="fs-6 text-gray-700">
                                    <strong class="me-1">هشدار!</strong>
                                    با ویرایش نام مجوز، ممکن است
                                    عملکرد مجوزهای سیستم را بشکنید. قبل از ادامه لطفا مطمئن شوید که کاملا مطمئن هستید

                                </div>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>

                    <!--begin::Form-->
                    <form id="kt_modal_update_permission_form" class="form"
                        action="{{ route('admin.permissions.update', 1) }}" method="post">
                        @csrf
                        @method('put')
                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-bold form-label mb-2">
                                <span class="required">عنوان</span>
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                    data-bs-trigger="hover" data-bs-html="true"
                                    data-bs-content="Permission names is required to be unique."></i>
                            </label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <input id="js-permission-nmae" class="form-control form-control-solid"
                                placeholder="عنوان مجوز را وارد کنید" name="name" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-permissions-modal-action="cancel">
                                لغو
                            </button>
                            <button type="submit" class="btn btn-primary" data-kt-permissions-modal-action="submit">
                                <span class="indicator-label">ویرایش</span>
                                <span class="indicator-progress"> منتظر بمانید...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Update permissions-->
    <!--end::Modals-->
@endsection

@section('js')
    <script src="{{ asset('panel/assets/js/axios.js') }}" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('panel/assets/js/custom/apps/user-management/permissions/list.js') }}"></script>
    <script src="{{ asset('panel/assets/js/custom/apps/user-management/permissions/add-permission.js') }}"></script>
    <script src="{{ asset('panel/assets/js/custom/apps/user-management/permissions/update-permission.js') }}"></script>

    <script>
        $(".js-edit-btn").click(function() {
            let permission = $(this).data('permission')
            $("#js-permission-nmae").val(permission.name)
            $("#kt_modal_update_permission_form").attr('action', `/panel/permissions/${permission.id}`)
        })

        $(".js-delete-btn").click(function() {
            // let permission = $(this).data('id')
            // $("#js-delete-form").attr('action', `/panel/permissions/${permission}`)
            // $("#js-delete-form").submit()
        })
    </script>


@endsection
