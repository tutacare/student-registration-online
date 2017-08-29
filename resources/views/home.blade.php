@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('home.title')</div>

                <div class="panel-body">
                   <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO#</th>
                    <th>@lang('student.name')</th>
                    <th>@lang('student.hometown')</th>
                </tr>
            </thead>
            <tbody>
                @foreach($student as $key => $value)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->hometown }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
