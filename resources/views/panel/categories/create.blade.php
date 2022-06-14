@extends('layouts.panel.main')

@section('css')

@endsection

@section('content')

    <form id="kt_ecommerce_add_category_form" action="{{ route('admin.categories.store') }}" method="post"
        class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data" data-kt-redirect="">
        @csrf

        <!--begin::Aside column-->
        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
            <!--begin::Thumbnail settings-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <h2>تصویر</h2>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body text-center pt-0">
                    <!--begin::Image input-->
                    <div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true"
                        style="background-image: url({{ asset('panel/assets/media/svg/files/blank-image.svg') }})">

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
                            <input type="file" name="thumb" accept=".png, .jpg, .jpeg,.gif" />
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
                        تصویر دسته بندی را تنظیم کنید. فقط فایل های تصویری *.png، *.jpg و *.jpeg پذیرفته می شوند
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
                        <h2>وضعیت </h2>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                    </div>
                    <!--begin::Card toolbar-->
                </div>

                <div class="card-body pt-0">

                    <x-select name="status" placeholder="وضعیت">
                        @foreach (\App\Models\Category::$statuses as $status)
                            <option value="{{ $status }}">@lang($status)</option>
                        @endforeach
                    </x-select>
                </div>

            </div>

        </div>

        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
            <!--begin::General options-->
            <div class="card card-flush py-4">
                <!--begin::Card header-->
                <div class="card-header">
                    <div class="card-title">
                        <h2>مشخصات دسته بندی</h2>
                    </div>
                </div>

                <div class="card-body pt-0">


                    <div class="d-flex flex-column flex-md-row gap-5">
                        <x-input-group class="fv-row col-md-6" label="عنوان">
                            <x-input name="title" placeholder="عنوان"></x-input>
                        </x-input-group>


                        <x-input-group class="fv-row col-md-6" label="لینک">
                            <x-input name="link" placeholder="لینک"></x-input>
                        </x-input-group>

                    </div>

                    <div class="d-flex flex-column flex-md-row gap-5">
                        <x-input-group class="fv-row col-md-6" label="انتخاب دسته والد">
                            <x-select name="parent_id" placeholder="انتخاب دسته والد">
                                <option value=" ">ندارد</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                            </x-select>
                        </x-input-group>
                    </div>

                    <x-input-group label="توضیحات ">

                        <x-text-editor name="description">

                        </x-text-editor>

                    </x-input-group>

                </div>
                <!--end::Card header-->
            </div>
            <!--end::Automation-->

            <div class="d-flex justify-content-end">
                <!--begin::Button-->
                <a href="{{ route('admin.categories.index') }}" id="kt_ecommerce_add_product_cancel"
                    class="btn btn-light me-5">لغو</a>
                <!--end::Button-->
                <!--begin::Button-->
                <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary">
                    <span class="indicator-label">ایجاد</span>
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

    <script src="{{ asset('panel/assets/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>

    <script src="{{ asset('panel/assets/plugins/custom/ckeditor/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {

                language: 'fa',
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {

            });
    </script>

@endsection
