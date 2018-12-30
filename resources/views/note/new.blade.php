@extends('layouts.note')
@section('content')
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
					<form action="{{ route('notes.store') }}" method="post" enctype="multipart/form-data">
			    	@csrf
                    <div class="widget">
                        <div class="widget-content themed-background-muted text-center">
                            <div class="row" style="padding-top: 12px">
                            	<div class="form-group text-left">
			                        <div class="col-md-1">
	                            		<h4><i class="fa fa-bolt"></i> <strong>Name: </strong></h4>
	                            	</div>
	                            	<div class="col-md-11">
		                            	<input type="text" class="form-control" name="name" required>
	                            	</div>
	                            </div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                            	<div class="form-group text-left">
			                        <div class="col-lg-1">
	                            		<h4><i class="fa fa-bolt"></i> <strong>Link: </strong></h4>
	                            	</div>
			                        <div class="col-md-11">
			                            <input type="text" id="link" name="link" class="form-control">
			                        </div>
			                    </div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                            	<div class="col-md-12">
	                            	<textarea class="form-control" name="content" rows="20"></textarea>
                            	</div>
                            </div>
                            <div class="row text-left" style="padding-top: 12px">
                            	<div class="col-lg-1">
                            		<h4><i class="fa fa-file-archive-o"></i> <strong>File: </strong></h4>
                            	</div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                            	<div class="col-md-6">
			                        <div class="form-group">
			                            <input type="file" id="files" name="files[]" multiple>
				                    </div>
                            	</div>
                            	<div class="col-md-1">
                            		<h4><i class="fa fa-adjust"></i> <strong>Color: </strong></h4>
                            	</div>
                            	<div class="col-md-4">
			                        <div class="form-group">
					                    <select id="status" name="status" class="select-chosen" data-placeholder="Choose status color" style="width: 80px;" required>
					                        <option></option>
					                        <option value="success">Green</option>
					                        <option value="warning">Yellow</option>
					                        <option value="danger">Orange</option>
					                        <option value="info" selected>Blue</option>
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