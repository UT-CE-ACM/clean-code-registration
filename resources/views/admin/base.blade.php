@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">پنل مدیریتی</div>

                    <div class="panel-body">
                        <div class="list-group">
                            <a href="/admin/member" class="list-group-item section-title @if(Request::segment(2) == 'user') active @endif">ثبت نام کننده ها</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                @yield('inner-content')
            </div>
        </div>
    </div>
@endsection
