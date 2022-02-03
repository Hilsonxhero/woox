@extends('layouts.panel.main')

@section('css')

@endsection

@section('content')
    <!--begin::Row-->
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-5 g-xl-9">

        @foreach ($roles as $role)
            <div class="col-md-4">
                <!--begin::Card-->
                <div class="card card-flush h-md-100">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <h2>{{ $role->name }}</h2>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-1">
                        <!--begin::Users-->
                        {{-- <div class="fw-bolder text-gray-600 mb-5">Total users with this role: 546</div> --}}
                        <!--end::Users-->
                        <!--begin::Permissions-->
                        <div class="d-flex flex-column text-gray-600">
                            @foreach ($role->permissions as $permission)
                                <div class="d-flex align-items-center py-2">
                                    <span class="bullet bg-primary me-3"></span>
                                    {{ $permission->name }}
                                </div>
                            @endforeach


                        </div>
                        <!--end::Permissions-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer flex-wrap pt-0">
                        <a href="../../demo8/dist/apps/user-management/roles/view.html"
                            class="btn btn-light btn-active-primary my-1 me-2">مشاهده</a>
                        <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-light btn-active-light-primary my-1">ویرایش</a>
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card-->
            </div>

        @endforeach



        <!--begin::Add new card-->
        <div class="ol-md-4">
            <!--begin::Card-->
            <div class="card h-md-100">
                <!--begin::Card body-->
                <div class="card-body d-flex flex-center">
                    <!--begin::Button-->
                    <button type="button" class="btn btn-clear d-flex flex-column flex-center" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_add_role">
                        <!--begin::Illustration-->
                        <img src="assets/media/illustrations/sketchy-1/4.png" alt="" class="mw-100 mh-150px mb-7" />
                        <!--end::Illustration-->
                        <!--begin::Label-->
                        <div class="fw-bolder fs-3 text-gray-600 text-hover-primary">اضافه کردن نقش کاربری</div>
                        <!--end::Label-->
                    </button>
                    <!--begin::Button-->
                </div>
                <!--begin::Card body-->
            </div>
            <!--begin::Card-->
        </div>
        <!--begin::Add new card-->
    </div>
    <!--end::Row-->
    <!--begin::Modals-->
    <!--begin::Modal - Add role-->
    <div class="modal fade" id="kt_modal_add_role" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">اضافه کردن نقش کاربری </h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
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
                <div class="modal-body scroll-y mx-lg-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_add_role_form" class="form" action="{{ route('admin.roles.store') }}"
                        method="post">
                        @csrf
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_role_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_role_header"
                            data-kt-scroll-wrappers="#kt_modal_add_role_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bolder form-label mb-2">
                                    <span class="required">عنوان</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="عنوان نقش کاربری را وارد کنید"
                                    name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Permissions-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bolder form-label mb-2">مجوز های نقش کاربری</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-bold">
                                            <!--begin::Table row-->
                                            <tr>
                                                <td class="text-gray-800">دسترسی ادمین
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="اجازه دسترسی کامل به سیستم را می دهد"></i>
                                                </td>
                                                <td>
                                                    <!--begin::Checkbox-->
                                                    <label class="form-check form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="kt_roles_select_all" />
                                                        <span class="form-check-label" for="kt_roles_select_all">انتخاب
                                                            همه</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </td>
                                            </tr>


                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">{{ $permission->name }}</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <div class="d-flex">
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="{{ $permission->name }}"
                                                                    name="permissions[{{ $permission->name }}]" />
                                                                {{-- <span class="form-check-label"></span> --}}
                                                            </label>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                            @endforeach




                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">لغو</button>
                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                                <span class="indicator-label">ایجاد</span>
                                <span class="indicator-progress"> منتطر بمانید...
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
    <!--end::Modal - Add role-->
    <!--begin::Modal - Update role-->
    <div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-750px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bolder">ویرایش نقش کاربری</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">

                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                    fill="black" />
                            </svg>
                        </span>

                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_update_role_form" class="form">
                        <!--begin::Scroll-->
                        <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll"
                            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                            data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header"
                            data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="fv-row mb-10">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bolder form-label mb-2">
                                    <span class="required">عنوان نقش کاربری</span>
                                </label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-solid" placeholder="عنوان نقش کاربری را وارد کنید"
                                    name="name" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Permissions-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bolder form-label mb-2">مجوز های نقش کاربری</label>
                                <!--end::Label-->
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <!--begin::Table body-->
                                        <tbody class="text-gray-600 fw-bold">
                                            <!--begin::Table row-->
                                            <tr>
                                                <td class="text-gray-800">دسترسی ادمین
                                                    <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                        title="اجازه دسترسی کامل به سیستم را می دهد"></i>
                                                </td>
                                                <td>
                                                    <!--begin::Checkbox-->
                                                    <label
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="kt_roles_select_all" />
                                                        <span class="form-check-label" for="kt_roles_select_all">انتخاب
                                                            همه</span>
                                                    </label>
                                                    <!--end::Checkbox-->
                                                </td>
                                            </tr>


                                            @foreach ($permissions as $permission)
                                                <tr>
                                                    <!--begin::Label-->
                                                    <td class="text-gray-800">{{ $permission->name }}</td>
                                                    <!--end::Label-->
                                                    <!--begin::Options-->
                                                    <td>
                                                        <div class="d-flex">
                                                            <label
                                                                class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
                                                                <input class="form-check-input js-role-permissions" type="checkbox"
                                                                    value="{{ $permission->name }}"
                                                                    name="permissions[{{ $permission->name }}]"
                                                                    @if (\Spatie\Permission\Models\Role::where('id', 2)->first()->hasPermissionTo($permission->name)) checked @endif />
                                                                {{-- <span class="form-check-label"></span> --}}
                                                            </label>
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </td>
                                                    <!--end::Options-->
                                                </tr>
                                            @endforeach




                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Permissions-->
                        </div>
                        <!--end::Scroll-->
                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">لغو</button>
                            <button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
                                <span class="indicator-label">ویرایش</span>
                                <span class="indicator-progress">منتظر بمانید...
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
    <!--end::Modal - Update role-->
    <!--end::Modals-->
@endsection


@section('js')
    <script src="{{ asset('panel/assets/js/custom/apps/user-management/roles/list/add.js') }}"></script>
    <script src="{{ asset('panel/assets/js/custom/apps/user-management/roles/list/update-role.js') }}"></script>
@endsection
