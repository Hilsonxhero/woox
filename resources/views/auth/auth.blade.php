@extends('layouts.auth.main')

@section('css')

@endsection

@section('title')
    ورود یا ثبت نام
@endsection


@section('content')

    <div class="account-ui">
        <form class="form-ui" action="http://hilsonxhero.test/users/login" method="post">
            <input type="hidden" name="_token" value="wnhWb4Z0gHTyONRRjd7pMD5oFO7wIxnEL9m29JE3">
            <div class="form-content-ui">
                <div class="user-icon"></div>
                <h5 class="my-4">ورود / ثبت‌نام</h5>
                <div class="form-group">
                    <label for="email" class="col-form-label body-2 mb-2">شماره موبایل یا پست الکترونیک خود را وارد
                        کنید </label>
                    <div class="username-iu">
                        <input type="text" name="email" id="email" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="account-btn-ui mt-5">ورود</button>
                </div>
                <div class="form-group">
                    <div class="caption text-muted text-center">
                        با ورود و یا ثبت نام در پرهان تک شما <a href="" class="font-weight-bold">شرایط و قوانین</a>
                        استفاده از سرویس های سایت دیجی‌کالا و<a href="" class="font-weight-bold"> قوانین حریم خصوصی</a>
                        آن را می‌پذیرید.
                    </div>
                </div>

            </div>


        </form>
    </div>

@endsection

@section('js')
 <script>

 </script>
@endsection
