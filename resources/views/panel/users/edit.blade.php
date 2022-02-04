@extends('layouts.panel.main')

@section('css')

@endsection

@section('content')



    <form id="kt_ecommerce_add_category_form" action="{{ route('admin.users.update', $user->id) }}" method="post"
        class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data" data-kt-redirect="">
        @csrf
        @method('put')
        <input type="hidden" name="id" value="{{ $user->id }}">
        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>پروفایل</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                        style="background-image: url({{ asset($user->profile) }})">

                        {{-- asset('panel/assets/media/svg/files/blank-image.svg') --}}

                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-150px h-150px"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <!--begin::Icon-->
                            <i class="bi bi-pencil-fill fs-7"></i>
                            <!--end::Icon-->
                            <!--begin::Inputs-->
                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                            <input type="hidden" name="avatar_remove" />
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                            data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <!--end::Image input-->
                    <!--begin::Description-->
                    <div class="text-muted fs-7">
                        تصویر پروفایل را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Thumbnail settings-->
            <!--begin::Status-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>وضعیت حساب </h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                    </div>
                    <!--begin::Card toolbar-->
                </div>

                <div class="card-body pt-0">

                    <select name="status" class="form-select mb-2" data-control="select2" data-hide-search="true"
                        data-placeholder="وضعیت حساب" id="kt_ecommerce_add_category_status_select">

                        @foreach (\App\Models\User::$statuses as $status)
                            <option value="{{ $status }}" @if ($user->status == $status) selected="selected" @endif>@lang($status)</option>
                        @endforeach

                    </select>

                    <div class="d-none mt-10">
                        <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select publishing
                            date and time</label>
                        <input class="form-control" id="kt_ecommerce_add_category_status_datepicker"
                            placeholder="Pick date &amp; time" />
                    </div>
                    <!--end::Datepicker-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Status-->
            <!--begin::Template settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>نقش کاربری</h2>
                    </div>
                    <!--end::Card title-->
                </div>

                <div class="card-body pt-0">



                    <select name="role" class="form-select mb-2" data-control="select2" data-hide-search="true"
                        data-placeholder="انتخاب نقش کاربری" id="kt_ecommerce_add_category_store_template">
                        <option></option>

                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}" @if ($user->hasRole($role->name)) selected="selected" @endif>@lang($role->name)</option>
                        @endforeach
                    </select>

                </div>

            </div>
            <!--end::Template settings-->
        </div>
        <!--end::Aside column-->
        <!--begin::Main column-->
        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::General options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>اطلاعات کاربر</h2>
                    </div>
                </div>

                <div class="card-body pt-0">


                    @if ($errors->any())

                        @foreach ($errors as $error)

                            <p>{{ $error }}</p>

                        @endforeach

                    @else

                    @endif


                    <div class="d-flex flex-column flex-md-row gap-5">
                        <div class="mb-10 fv-row col-md-6">

                            <label class="required form-label">نام کاربری</label>

                            <input type="text" name="username" class="form-control mb-2" placeholder="نام کاربری"
                                value="{{ $user->username }}" />

                            <div class="text-muted fs-7">نام کاربری الزامی می باشد و باید منحصر به فرد باشد</div>

                        </div>

                        <div class="mb-10 fv-row col-md-6">

                            <label class="required form-label">کد ملی</label>

                            <input type="text" name="national_number" class="form-control mb-2" placeholder=" کد ملی"
                                value="{{ $user->national_number }}" />

                        </div>
                    </div>


                    <div class="d-flex flex-column flex-md-row gap-5">
                        <div class="mb-10 fv-row col-md-6">

                            <label class="required form-label">شماره تلفن</label>

                            <input type="text" name="phone" class="form-control mb-2" placeholder="شماره تلفن"
                                value="{{ $user->phone }}" />

                            <div class="text-muted fs-7">مثال 09012224050</div>

                        </div>

                        <div class="mb-10 fv-row col-md-6">

                            <label class="required form-label">ایمیل</label>

                            <input type="text" name="email" class="form-control mb-2" placeholder=" ایمیل"
                                value="{{ $user->email }}" />

                        </div>
                    </div>




                </div>
                <!--end::Card header-->
            </div>
            <!--end::General options-->
            <!--begin::Meta options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>اطلاعات امنیتی کاربر</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">

                    <div class="d-flex flex-column flex-md-row gap-5">
                        <div class="mb-10 fv-row col-md-6">

                            <label class="required form-label">رمز عبور جدید</label>

                            <input type="text" name="password" class="form-control mb-2" placeholder="رمز عبور جدید"
                                value="" />

                            <div class="text-muted fs-7">رمز عبور حداقل باید 8 کارکتر شامل حروف و اعداد انگلیسی باشد</div>

                        </div>

                        <div class="mb-10 fv-row col-md-6">

                            <label class="required form-label">تکرار رمز عبور جدید</label>

                            <input type="text" name="password_confirmation" class="form-control mb-2"
                                placeholder=" تکرار رمز عبور جدید" value="" />

                        </div>
                    </div>


                </div>
                <!--end::Card header-->
            </div>
            <!--end::Meta options-->
            <!--begin::Automation-->
            <div class="card card-flush py-4 d-none">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>Automation</h2>
                    </div>
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0">
                    <!--begin::Input group-->
                    <div>
                        <!--begin::Label-->
                        <label class="form-label mb-5">Product assignment method</label>
                        <!--end::Label-->
                        <!--begin::Methods-->
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="method" type="radio" value="0"
                                    id="kt_ecommerce_add_category_automation_0" checked='checked' />
                                <!--end::Input-->
                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                    <div class="fw-bolder text-gray-800">Manual</div>
                                    <div class="text-gray-600">Add products to this category one by one by manually
                                        selecting this category during product creation or update.</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->
                        <div class='separator separator-dashed my-5'></div>
                        <!--begin::Input row-->
                        <div class="d-flex fv-row">
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <!--begin::Input-->
                                <input class="form-check-input me-3" name="method" type="radio" value="1"
                                    id="kt_ecommerce_add_category_automation_1" />
                                <!--end::Input-->
                                <!--begin::Label-->
                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                    <div class="fw-bolder text-gray-800">Automatic</div>
                                    <div class="text-gray-600">Products matched with the following conditions will be
                                        automatically assigned to this category.</div>
                                </label>
                                <!--end::Label-->
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Input row-->
                        <!--end::Methods-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="d-none mt-10" data-kt-ecommerce-catalog-add-category="auto-options">
                        <!--begin::Label-->
                        <label class="form-label">Conditions</label>
                        <!--end::Label-->
                        <!--begin::Conditions-->
                        <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                            <span>Products must match:</span>
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="conditions" value="" id="all_conditions"
                                    checked="checked" />
                                <label class="form-check-label" for="all_conditions">All conditions</label>
                            </div>
                            <!--end::Radio-->
                            <!--begin::Radio-->
                            <div class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" name="conditions" value=""
                                    id="any_conditions" />
                                <label class="form-check-label" for="any_conditions">Any conditions</label>
                            </div>
                            <!--end::Radio-->
                        </div>
                        <!--end::Conditions-->
                        <!--begin::Repeater-->
                        <div id="kt_ecommerce_add_category_conditions">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="kt_ecommerce_add_category_conditions"
                                    class="d-flex flex-column gap-3">
                                    <div data-repeater-item="" class="form-group d-flex flex-wrap gap-5">
                                        <!--begin::Select2-->
                                        <div class="w-100 w-md-200px">
                                            <select class="form-select" name="condition_type"
                                                data-placeholder="Select an option"
                                                data-kt-ecommerce-catalog-add-category="condition_type">
                                                <option></option>
                                                <option value="title">Product Title</option>
                                                <option value="tag" selected="selected">Product Tag</option>
                                                <option value="price">Prodict Price</option>
                                            </select>
                                        </div>
                                        <!--end::Select2-->
                                        <!--begin::Select2-->
                                        <div class="w-100 w-md-200px">
                                            <select class="form-select" name="condition_equals"
                                                data-placeholder="Select an option"
                                                data-kt-ecommerce-catalog-add-category="condition_equals">
                                                <option></option>
                                                <option value="equal" selected="selected">is equal to</option>
                                                <option value="notequal">is not equal to</option>
                                                <option value="greater">is greater than</option>
                                                <option value="less">is less than</option>
                                                <option value="starts">starts with</option>
                                                <option value="ends">ends with</option>
                                            </select>
                                        </div>
                                        <!--end::Select2-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mw-100 w-200px" name="condition_label"
                                            placeholder="" />
                                        <!--end::Input-->
                                        <!--begin::Button-->
                                        <button type="button" data-repeater-delete=""
                                            class="btn btn-sm btn-icon btn-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1"
                                                        transform="rotate(-45 7.05025 15.5356)" fill="black" />
                                                    <rect x="8.46447" y="7.05029" width="12" height="2" rx="1"
                                                        transform="rotate(45 8.46447 7.05029)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group mt-5">
                                <!--begin::Button-->
                                <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                            fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1"
                                                transform="rotate(-90 11 18)" fill="black" />
                                            <rect x="6" y="11" width="12" height="2" rx="1" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->Add another condition
                                </button>
                                <!--end::Button-->
                            </div>
                            <!--end::Form group-->
                        </div>
                        <!--end::Repeater-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card header-->
            </div>
            <!--end::Automation-->
            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{ route('admin.users.index') }}" id="kt_ecommerce_add_product_cancel"
                    class="btn btn-light me-5">لغو</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                    <span class="indicator-label">ویرایش</span>
                    <span class="indicator-progress"> منتظر بمانید...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </button>
                <!--end::Button-->
            </div>
        </div>
        <!--end::Main column-->
    </form>

@endsection

@section('js')

    <script>
        (() => {
            $("#kt_roles_select_all").on('change', function() {

                $('.js-role-permissions').each(function(index, value) {
                    value.checked = true
                })
            })

        })()
    </script>

@endsection
