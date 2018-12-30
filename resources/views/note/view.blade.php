@extends('layouts.note')
@section('content')
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
					<form action="{{ route('notes.update',['note' => $note->id]) }}" method="post" enctype="multipart/form-data">
						@method('put')
			    	@csrf
                    <div class="widget">
                        <div class="widget-content themed-background-{{ $note->status }} text-light-op">
                            <div class="row text-left">
                            	<div class="col-lg-6">
                            		<h5><i class="fa fa-calendar-check-o"></i> <strong>Created at: </strong> {{ $note->created_at }}</h5>
                            	</div>
                            	<div class="col-lg-6">
                            		<h5><i class="fa fa-calendar-plus-o"></i></i> <strong>Updated at: </strong> {{ $note->updated_at }}</h5>
                            	</div>
                            </div>
                        </div>
                        <div class="widget-content themed-background-muted text-center">
                            <div class="row" style="padding-top: 12px">
                            	<div class="col-md-12">
	                            	<input type="text" class="form-control" name="name" value="{{ $note->name }}" style="font-size: 34px; height: 80px">
                            	</div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                            	<div class="col-md-12">
	                            	<textarea class="form-control" name="content" rows="20">{{ $note->content }}</textarea>
                            	</div>
                            </div>
                            <div class="row" style="padding-top: 12px">
                            	<div class="form-group text-left">
			                        <div class="col-lg-1">
	                            		<h4><i class="fa fa-bolt"></i> <strong>Link: </strong></h4>
	                            	</div>
			                        <div class="col-md-10">
			                            <input type="text" id="link" name="link" class="form-control" placeholder="Link" value="{{ $note->link }}">
			                        </div>
			                        <div class="col-lg-1">
	                            		<h4 onclick="copy()"><i class="fa fa-hand-stop-o"></i>Copy</h4>
	                            		<script>
										function copy() {
										  var copyText = document.getElementById("link");
										  copyText.select();
										  document.execCommand("copy");
										}
										</script>
	                            	</div>
			                    </div>
                            </div>
                            <div class="row text-left" style="padding-top: 12px">
                            	<div class="col-lg-1">
                            		<h4><i class="fa fa-file-archive-o"></i> <strong>File: </strong></h4>
                            	</div>
                            </div>
                            <div class="widget-content widget-content-full">
	                            <table class="table table-striped table-borderless remove-margin">
	                                <tbody>
	                                	@foreach ($note->files as $file)
	                                    <tr>
	                                        <td class="text-left"><a href="/file/{{ $file->name }}" class="text-black"><i class="fa fa-download"></i> {{ $file->name }}</a></td>

	                                        <td class="text-center" style="width: 180px;"><span class="text-muted">{{ $file->created_at }}</span> <i class="fa fa-trash-o" onclick="if(confirm('Do you really want to delete this?')) $('#delete-{{ $file->id }}').submit()"></i></td>
	                                    </tr>
	                                    @endforeach
	                                </tbody>
	                            </table>
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
					                    <select id="status" name="status" class="select-chosen" data-placeholder="Choose status color" style="width: 250px;">
					                        <option></option>
					                        <option value="success" {{ $note->status == "success" ? "selected" : "" }}>Green</option>
					                        <option value="warning" {{ $note->status == "warning" ? "selected" : "" }}>Yellow</option>
					                        <option value="danger" {{ $note->status == "danger" ? "selected" : "" }}>Orange</option>
					                        <option value="info" {{ $note->status == "info" ? "selected" : "" }}>Blue</option>
					                     </select>
				                    </div>
                            	</div>
                            	<div class="col-md-1">
	                            	<button class="btn btn-info pull-right"> <i class="fa fa-pencil"></i> Update</button>
	                            </div>
                            </div>
                        </div>

                    </div>
		            </form>
                </div>
			</div>
			<div>
				@foreach ($note->files as $file)
                <form id="delete-{{ $file->id }}" method="post" action="{{ route('files.destroy',['note' => $note->id,'file' => $file->id]) }}">
                    @method('delete')
                    @csrf
                </form>
                @endforeach
			</div>
@endsection
@section('script')
        <script src="/js/pages/uiTables.js"></script>
        <script>$(function(){ UiTables.init(); });</script>
@parent
@endsection