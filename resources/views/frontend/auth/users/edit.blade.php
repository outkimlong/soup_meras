@extends('layouts.app')
    @section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update User</h3>
                    </div>
                    <form class="form-horizontal" action="{{ url('user/' .$user->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PATCH')
                        <div class="box-body">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Select Roles</label>
                                <div class="col-sm-10">
                                    <select name="roles" id="roles" class="form-control select">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" {{ $role->id == $user->roles_id ? 'selected' : '' }}>{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Full Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <label>
                                        <input type="checkbox" class="minimal-red" id="status" name="status" {{ $user->status == 1 ? 'checked' : ''}}> &nbsp;  Status
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                            <a href="{{ url('user') }}" class="btn btn-default btn-sm pull-right">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
