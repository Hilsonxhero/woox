@extends('layouts.panel.main')

@section('css')

@endsection

@section('content')
    <div class="card card-flush py-4">

        <form action="{{ route('admin.roles.update', $role->id) }}" method="post">

            @csrf
            @method('put')

            <div class="card-header border-transparent">
                <div class="card-title">
                    <h2>ویرایش نقش کاربری</h2>
                </div>
            </div>

            <div class="card-body pt-0">

                <div class="d-flex flex-column gap-5 gap-md-7">
                    <!--begin::Title-->

                    <!--end::Title-->


                    <div class="d-flex flex-column flex-md-row gap-5">
                        <div class="fv-row flex-row-fluid">

                            <label class="required form-label">عنوان</label>

                            <input class="form-control" name="name" placeholder="عنوان نقش کاربری"
                                value="{{ $role->name }}" />

                        </div>

                    </div>


                    <div class="d-flex flex-column flex-md-row gap-5">
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
                                                            <input class="form-check-input js-role-permissions" type="checkbox"
                                                                value="{{ $permission->name }}"
                                                                name="permissions[{{ $permission->name }}]"
                                                                @if ($role->hasPermissionTo($permission->name)) checked @endif />
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
                    </div>

                </div>
            </div>

            <div class="card-footer border-transparent">
                <div class="d-flex justify-content-end mt-5">
                    <!--begin::Button-->
                    <a href="{{ route('admin.roles.index') }}" id="kt_ecommerce_edit_order_cancel"
                        class="btn btn-light me-5">لغو</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                        <span class="indicator-label">ویرایش</span>
                        <span class="indicator-progress">منتظر بمانیدt...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>

        </form>

    </div>

@endsection

@section('js')

    <script>
        (() => {


            $("#kt_roles_select_all").on('change', function() {

                $('.js-role-permissions').each(function(index,value) {
                    console.log(value);
                    // $(value).attr("checked",true)
                    value.checked = true
                })
            })





            // n = e.querySelectorAll('[type="checkbox"]');
            // t.addEventListener("change", (t => {
            //     n.forEach((e => {
            //         e.checked = t.target.checked
            //     }))
            // }))

        })()
    </script>

@endsection
