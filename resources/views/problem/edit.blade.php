@extends('layouts.note')
@section('content')
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
					<form action="{{ route('problems.update',['problem'=>$problem->id]) }}" method="post">
			    	@csrf
			    	@method('put')
                    <div class="widget">
                        <div class="widget-content themed-background-muted text-center">
                            <div class="row" style="padding-top: 12px">
                            	<div class="form-group text-left">
			                        <div class="col-md-1">
	                            		<h4> <strong>Name: </strong></h4>
	                            	</div>
	                            	<div class="col-md-11">
		                            	<input type="text" class="form-control" name="name" value="{{ $problem->name }}" required>
	                            	</div>
	                            </div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                            	<div class="form-group text-left">
			                        <div class="col-lg-1">
	                            		<h4> <strong>Link: </strong></h4>
	                            	</div>
			                        <div class="col-md-11">
			                            <input type="text" id="link" name="link" class="form-control" value="{{ $problem->link }}">
			                        </div>
			                    </div>
                            </div>
                            <div class="row" style="padding-top: 12px">
		                        <div class="col-lg-1 text-left">
                            		<h4> <strong>Status: </strong></h4>
                            	</div>
                            	<div class="col-md-10">
			                        <div class="form-group">
					                    <select id="status" name="status" class="select-chosen" data-placeholder="Choose status color" style="width: 80px;" required>
					                        <option></option>
					                        <option value="warning" {{ $problem->status == "warning" ? "selected" : "" }}>Searching</option>
					                        <option value="info" {{ $problem->status == "info" ? "selected" : "" }}>Fixing</option>
					                        <option value="success" {{ $problem->status == "success" ? "selected" : "" }}>Fixed</option>
					                        <option value="danger" {{ $problem->status == "danger" ? "selected" : "" }}>Can't Fix</option>
					                     </select>
				                    </div>
                            	</div>
                            	<div class="col-md-1">
	                            	<button class="btn btn-success pull-right"> <i class="fa fa-plus"></i> Add</button>
	                            </div>
                            </div>
                        </div>

                    </div>
		            </form>
                </div>
			</div>
@endsection
@section('script')
@parent
@endsection