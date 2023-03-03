@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Product</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('product') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="category_id" name="category_id" style="width: 100%;">
                                        @foreach ($params as $param)
                                            @if($param->status == 1)
                                                <option value="{{ $param->id }}">{{ $param->name_kh }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name Khmer</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_kh">
                                    @if($errors)
                                        <span class="text-yellow">{{$errors->first('name_kh')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name English</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_en">
                                    @if($errors)
                                        <span class="text-yellow">{{$errors->first('name_en')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10 ">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" name="price">
                                        <span class="input-group-addon">.00</span>
                                    </div> 
                                    @if($errors)
                                        <span class="text-yellow">{{$errors->first('price')}}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Remark</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="remark" placeholder="Enter ..."></textarea>
                                </div>
                            </div>                    
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" id="image" data-plugins="dropify" class="dropify" data-default-file="" />
                                    @if($errors)
                                        <span class="text-yellow">{{$errors->first('image')}}</span>
                                    @endif
                               </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <label>
                                        <input type="checkbox" class="minimal-red" name="status" checked> &nbsp; Status
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            <a href="{{ url('product') }}" class="btn btn-default btn-sm pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
