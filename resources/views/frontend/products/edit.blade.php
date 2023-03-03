@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Product</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('product/'.$params->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="box-body">
                            <input type="hidden" id="user_id" name="user_id" value="{{ auth()->user()->id }}" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category</label>
                                <div class="col-sm-10">
                                    <select class="form-control select" id="category_id" name="category_id">
                                        @foreach ($categories as $category)
                                            <option  value="{{ $category->id }}" {{ $category->id == $params->category_id ? 'selected' : '' }}>{{ $category->name_kh }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name Khmer</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_kh" value="{{ $params->name_kh }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name English</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_en" value="{{ $params->name_en }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10 ">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="text" class="form-control" name="price" value="{{ $params->price }}">
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
                                    <textarea class="form-control" rows="3" name="remark" >{{ $params->remark }}</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Image</label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" id="image" data-plugins="dropify" class="dropify" data-default-file="{{asset('storage/'.$params->image)}}" />
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
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                            <a href="{{ url('product') }}" class="btn btn-default btn-sm pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
