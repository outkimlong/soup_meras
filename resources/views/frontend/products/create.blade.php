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
                                    <select class="form-control" style="width: 100%;" name="categories_id">
                                        <option>California</option>
                                    </select>
                                    <select class="form-control" id="category_id" name="category_id">
                                        @foreach ($params as $param)
                                            @if($param->status == 1)
                                                <option value="{{ $param->id }}">{{ $param->name_kh }} {{ $param->name_en }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name Khmer</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_kh">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Name English</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name_en">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="price">
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
                                    <input type="file" class="form-control" name="image">
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
