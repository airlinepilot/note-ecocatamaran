@extends('layouts.note')
@section('content')
@php
$status_map = [
    "warning" =>"Searching",
    "info" =>"Fixing",
    "success" =>"Fixed",
    "danger" =>"Can't Fix"
]
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="block full">
            <div class="block-title">
                <h2>Problems</h2>
            </div>
            <div class="table-responsive">
                <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;" id="problem-id">ID</th>
                            <th class="text-center" style="width: 70px;">Create</th>
                            <th class="text-center" style="width: 70px;">Update</th>
                            <th>Problem</th>
                            <th class="text-center" style="width: 120px;">Status</th>
                            <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($problems as $problem)
                        <tr>
                            <td class="text-center">{{ $problem->id }}</td>
                            <td class="text-center">{{ $problem->created_at }}</td>
                            <td class="text-center">{{ $problem->updated_at }}</td>
                            <td><a href="{{ $problem->link }}">{{ $problem->name }}</a></td>
                            <td class="text-center"><span class="label label-{{ $problem->status }}">{{ $status_map[$problem->status] }}</span></td>
                            <td class="text-center">
                                <a href="{{ $problem->link }}" data-toggle="tooltip" title="View" class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-eye"></i></a>
                                <a href="{{ route('problems.edit',['problem' => $problem->id]) }}" data-toggle="tooltip" title="Edit User" class="btn btn-effect-ripple btn-xs btn-info"><i class="fa fa-pencil"></i></a>
                                <a onclick="if(confirm('Do you really want to delete this?')) $('#delete-{{ $problem->id }}').submit()" data-toggle="tooltip" title="Delete User" class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                <form id="delete-{{ $problem->id }}" method="post" action="{{ route('problems.destroy',['problem' => $problem->id]) }}">
                                    @method('delete')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</div>
@endsection
@section('script')
@parent
        <script src="/js/pages/uiTables.js"></script>
        <script>$(function(){ UiTables.init(); });</script>
        <script type="text/javascript">
            $(window).load(function(e) {
                $('#problem-id').click();
            });
        </script>
@endsection