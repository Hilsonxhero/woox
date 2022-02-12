@extends('layouts.panel.main')

@section('css')

@endsection

@section('content')

    <form id="kt_ecommerce_add_category_form" action="{{ route('admin.brands.update', $brand->id) }}" method="post"
        class="form d-flex flex-column flex-lg-row" enctype="multipart/form-data" data-kt-redirect="">
        <input type="hidden" name="id" value="{{ $brand->id }}">
        @csrf
        @method('put')

        <!--begin::Aside column-->
        <div class="row">
            <div class="col-12 col-xl-3 d-flex flex-column mb-7 gap-6">
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
                        <x-file-upload name="thumb" value="{{ $brand->icon }}"></x-file-upload>
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
                            <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status">
                            </div>
                        </div>
                        <!--begin::Card toolbar-->
                    </div>

                    <div class="card-body pt-0">

                        <x-select name="status" placeholder="وضعیت">
                            @foreach (\App\Models\Brand::$statuses as $status)
                                <option value="{{ $status }}">@lang($status)</option>
                            @endforeach
                        </x-select>
                    </div>
                    <!--end::Card body-->
                </div>

            </div>

            <div class="col-12 col-xl-9 d-flex flex-column gap-6">
                <!--begin::General options-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>مشخصات دسته بندی</h2>
                        </div>
                    </div>

                    <div class="card-body pt-0">
                        <div class="row">

                            <x-input-group class="fv-row col-md-6" label="عنوان">
                                <x-input name="title" placeholder="عنوان" value="{{ old('title') ?? $brand->title }}">
                                </x-input>
                            </x-input-group>

                            <x-input-group class="fv-row col-md-6" label="لینک">
                                <x-input name="link" placeholder="لینک" value="{{ old('link') ?? $brand->link }}">
                                </x-input>
                            </x-input-group>



                            <x-input-group class="w-100 fv-row col-6" label=" انتخاب  دسته بندی">
                                <x-select name="category_id" placeholder="انتخاب  دسته بندی">
                                    <option value=" ">ندارد</option>
                                    @foreach ($categories as $cat)
                                        <option value="{{ $cat->id }}" @if ($cat->id == $brand->category_id) selected="selected" @endif>{{ $cat->title }}
                                        </option>
                                    @endforeach
                                </x-select>
                            </x-input-group>


                            <x-input-group label="توضیحات ">
                                <x-text-editor name="description" value="{{ $brand->description }}">
                                </x-text-editor>
                            </x-input-group>



                        </div>
                    </div>

                </div>

                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="{{ route('admin.brands.index') }}" id="kt_ecommerce_add_product_cancel"
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
