@extends('admin.member.base')

@section('main-content')
    @if($obj->id == null)
        <h3>ایجاد تیم جدید</h3>
    @else
        <h3>ویرایش تیم</h3>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if($obj->id==NULL)
        <form action="/admin/member" method="POST" class="form-horizontal ls_form">
    @else
        <form action="/admin/member/{{$obj->id}}" method="POST" class="form-horizontal ls_form">
            <input type="hidden" name="_method" value="PUT">
    @endif
            {{ csrf_field() }}
            <div class="row ls_divider last">
                <div class="form-group form-padding">

                    <h4 class="from-header">مشخصات فرد</h4>
                    <div class="row padding">
                        <label for="first_name" class="col-md-2 control-label">نام</label>
                        <div class="col-md-10">
                            <input name="first_name" type="text" value="{{ $obj->id ? $obj->first_name : old('first_name') }}" class="form-control input-lg ls-group-input">
                        </div>
                    </div>
                    <div class="row padding">
                        <label class="col-md-2 control-label">نام خانوادگی</label>
                        <div class="col-md-10">
                            <input name="last_name" type="text" value="{{ $obj->id ? $obj->last_name : old('last_name') }}" class="form-control input-lg ls-group-input">
                        </div>
                    </div>
                    <div class="row padding">
                        <label class="col-md-2 control-label">ایمیل</label>
                        <div class="col-md-10">
                            <input name="email" type="email" value="{{ $obj->id ? $obj->email : old('email') }}" class="form-control input-lg ls-group-input">
                        </div>
                    </div>
                    <div class="row padding">
                        <label class="col-md-2 control-label">شماره تماس</label>
                        <div class="col-md-10">
                            <input name="phone_number" type="number" value="{{ $obj->id ? $obj->phone_number : old('phone_number') }}" class="form-control input-lg ls-group-input">
                        </div>
                    </div>
                    <hr>

                    <h4 class="from-header">تحصیلات فرد</h4>
                    <div class="row padding">
                        <label class="col-md-2 control-label">وضعیت تحصیلی</label>
                        <div class="col-md-10">
                            <select name="education" class="form-control input-lg ls-group-input">
                                <option value="student" @if($obj->education=="student")selected @endif>دانش آموز</option>
                                <option value="collegian" @if($obj->education=="collegian")selected @endif>دانشجو</option>
                                <option value="graduated" @if($obj->education=="graduated")selected @endif>فارغ التحصیل</option>
                            </select>
                        </div>
                    </div>
                    <div class="row padding">
                        <label class="col-md-2 control-label">نام دانشگاه</label>
                        <div class="col-md-10">
                            <input name="university_name" type="text" value="{{ $obj->id ? $obj->university_name : old('university_name') }}"
                                   class="form-control input-lg ls-group-input">
                        </div>
                    </div>
                    <hr>
                    <div class="col-md-2 pull-right  top-padding">
                        <button class="btn btn-success btn-block" type="submit">ذخیره</button>
                    </div>
                </div>
            </div>
        </form>

@endsection


@section('js')
@endsection