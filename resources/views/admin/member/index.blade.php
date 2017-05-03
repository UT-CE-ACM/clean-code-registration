@extends('admin.member.base')

@section('main-content')
    <div style="padding-top: 20px;">
        <table class="table">
            <thead>
            <tr>
                <th>ردیف</th>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>وضعیت پرداختی</th>
                <th>عملیات</th>
            </tr>
            </thead>
            <tbody>
            @foreach($objects as $obj)
                <tr>
                    <td scope="row">{{ $loop->iteration }}</td>
                    <td>{{ $obj->first_name }}</td>
                    <td>{{ $obj->last_name }}</td>
                    <td>
                        @if(!$obj->has_paid)
                            <button class="btn btn-danger" >
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        @else
                            <button class="btn btn-success" >
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        @endif
                    </td>
                    <td>
                        <form action="/admin/member/{{$obj->id}}" method="POST" class="horizontal">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" >
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </form>
                        <form action="/admin/member/{{$obj->id}}/edit" method="GET" class="horizontal">
                            <button type="submit" class="btn btn-info" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if(count($objects)==0)
            <h3> داده ای وجود ندارد! </h3>
        @endif
    </div>
@endsection