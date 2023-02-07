@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Category</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('category/'.$params->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name Khmer</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_kh" value="{{ $params->name_kh }}">
                                    @if($errors)
                                        <span class="text-yellow">{{$errors->first('name_kh')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name English</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_en" value="{{ $params->name_en }}">
                                    @if($errors)
                                        <span class="text-yellow">{{$errors->first('name_en')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <label>
                                        <input type="checkbox" class="minimal-red" name="status" {{ $params->status == 1 ? 'checked' : ''}}> &nbsp; Status
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                            <a href="{{ url('category') }}" class="btn btn-default btn-sm pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
