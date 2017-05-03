@extends('admin.base')

@section('inner-content')
    <div class="panel panel-default">
        <div class="panel-heading">ثبت نام کننده ها</div>
        <div class="panel-body">
            <ol class="breadcrumb">
                <li class="active">مدیریت</li>
                <li class="active">ثبت نام کنندگان</li>
            </ol>
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <div class="btn-group" role="group">
                    <a href="/admin/member">
                        <button type="button" class="btn btn-info">مشاهده همه  ثبت نام کنندگان ({{ \App\Models\Member::all()->count() }} تیم)</button>
                    </a>
                </div>
                <div class="btn-group" role="group">
                    <a href="/admin/member/create">
                        <button type="button" class="btn btn-success">ایجاد تیم جدید</button>
                    </a>
                </div>
            </div>
            @yield('main-content')
        </div>
    </div>
@endsection