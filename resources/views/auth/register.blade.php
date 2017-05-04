@extends('public.base')

@section('title')
    ثبت نام در مسابقه
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/register-member">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <label for="first_name" class="col-md-4 control-label">نام</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}"   autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <label for="last_name" class="col-md-4 control-label">نام خانوادگی</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}"  >

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">آدرس ایمیل</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number" class="col-md-4 control-label">شماره تماس</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="number" class="form-control" name="phone_number" value="{{ old('phone_number') }}">

                                @if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="form-group{{ $errors->has('education') ? ' has-error' : '' }}">
                            <label for="education" class="col-md-4 control-label">وضعیت تحصیلی</label>

                            <div class="col-md-6">
                                <select id="education" class="form-control selectpicker" name="education">
                                    <option value="student" @if(old('education')=="student")selected @endif>دانش آموز</option>
                                    <option value="collegian" @if(old('education')=="collegian")selected @endif>دانشجو</option>
                                    <option value="graduated" @if(old('education')=="graduated")selected @endif>فارغ التحصیل</option>
                                </select>

                                @if ($errors->has('education'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('education') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('university_name') ? ' has-error' : '' }}" id="university-name-container">
                            <label for="university_name" class="col-md-4 control-label">نام دانشگاه</label>

                            <div class="col-md-6">
                                <input id="university_name" type="text" class="form-control" name="university_name" value="{{ old('university_name') }}">

                                @if ($errors->has('university_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('university_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="form-group{{ $errors->has('rules_and_regulations') ? ' has-error' : '' }}" id="university-name-container">
                            <label class="control-label col-md-offset-3" >
                                <input name="rules_and_regulations" class="checkbox-inline"
                                       style="margin-left: 5px;" type="checkbox" value="1">ضمن خواندن قوانین و مقررات با آن ها موافقم!
                            </label>

                            @if ($errors->has('rules_and_regulations'))
                                <span class="help-block col-md-offset-3">
                                        <strong>{{ $errors->first('rules_and_regulations') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="col-md-offset-3">
                            {!! Recaptcha::render() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group" style="padding-top: 20px;">
                            <div class="col-md-7 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">ثبت نام</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        jQuery(document).ready(function () {
            var educationInput = jQuery("#education");
            var universityNameContainer = jQuery("#university-name-container");

            if (educationInput.val() != "collegian")
                universityNameContainer.hide();

            educationInput.change(function () {
                if (educationInput.val() == "collegian")
                    universityNameContainer.slideDown();
                else
                    universityNameContainer.slideUp();
            });
        });
    </script>
@endsection