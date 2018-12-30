@extends('layouts.note')
@section('content')
    @foreach ($notes as $note)
                <div class="col-sm-4 col-md-3 col-lg-3">
                    <div class="widget">
                        <div class="widget-content themed-background-{{ $note->status }} text-light-op">
                            <i class="fa fa-calendar"></i> <strong> {{ $note->created_at }}</strong>
                        </div>
                        <div class="widget-content themed-background-muted text-center">
                            <h3><strong>{{ $note->name }}</strong></h3>
                        </div>
                        <div class="widget-content text-center">
                            <div class="row">
                            	<div class="col-sm-4 col-md-4 col-lg-4">
                                    <a href="{{ route('notes.show',['note' => $note->id]) }}" class="text-warning">
                                		<i class="fa fa-eye fa-2x text-success"></i>
                                    </a>
                            	</div>
                                <div class="col-sm-4 col-md-4 col-lg-4">
                                    <a href="{{ $note->link }}" class="text-info" target="_blank">
                                        <i class="fa fa-external-link fa-2x"></i>
                                    </a>
                                </div>
                            	<div class="col-sm-4 col-md-4 col-lg-4">
                                    <form id="delete-{{ $note->id }}" method="post" action="{{ route('notes.destroy',['note' => $note->id]) }}">
                                        @method('delete')
                                        @csrf
                                    </form>
                                    <a onclick="if(confirm('Do you really want to delete this?')) $('#delete-{{ $note->id }}').submit()" class="text-warning">
                                		<i class="fa fa-trash fa-2x text-danger"></i>
                                    </a>
                            	</div>
                            </div>
                        </div>
                    </div>
                </div>
    @endforeach
@endsection
@section('script')
@parent
@endsection