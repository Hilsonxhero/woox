@extends('layouts.auth.main')

@section('css')

@endsection

@section('title')
    ورود یا ثبت نام
@endsection


@section('content')

    <div class="account-ui">
        <form class="form-ui" action="{{route('user.confirm.register.check')}}" method="post">
            @csrf
            <input type="hidden" name="phone" value="{{request()->phone}}">
            <div class="form-content-ui">
                <div class="user-icon"></div>
                <h5 class="my-4">کد تایید را وارد نمایید</h5>
                <div class="form-group">
                    <label for="password" class="col-form-label">کد تایید برای شماره موبایل {{ request()->phone }} ارسال
                        گردید</label>
                    <div class="code-iu">
                        <input type="text" name="code" id="code" class="form-control text-center" placeholder="">
                    </div>

                </div>

                <div class="form-group">
                    <div class="body-2 text-muted">
                        <a href="" class="mt-4 text-primary">ورود با رمز عبور</a>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="" class="text-primary">دریافت مجدد کد تایید</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="account-btn-ui mt-5">ادامه</button>
                </div>

            </div>


        </form>
    </div>

@endsection

@section('js')
    <script>

    </script>
@endsection
