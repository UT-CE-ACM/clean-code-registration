@extends('public.base')

@section('title')
    مسابقات clean code
@endsection

@section('css')
    <link rel="stylesheet" href="/css/landing-page.css">
@endsection

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                {{--<img src="/img/clearncode.jpg" alt="">--}}
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                clean code
            </div>
            <div class="links">
                <a href="/rules-and-regulations">قوانین و مقررات</a>
                <a href="/register-member">ثبت نام</a>
                <a href="/follow-up">پی گیری ثبت نام</a>
            </div>
        </div>
    </div>
@endsection
