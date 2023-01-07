@extends('layouts.app')
    @section('content')
        <section class="content-header">
            <h4>Create User</h4>
        </section>
        @if (count($errors) > 0)
            <div class="box-body">
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-ban"></i> Whoops!</h4> There were some problems with your input. <br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <section class="content">
            <form action="{{ url('users')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="name">Username</label>                                        
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="roles">Select Roles</label>
                                        <select name="roles" id="roles" class="form-control">
                                            @foreach ($roles as $role)
                                                <option value="{{ $ role->id }}">{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Email</label>                                        
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>                                        
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password</label>                                        
                                        <input type="password" class="form-control" name="confirm-password" id="confirm-password">
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12 mb-2">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/480px-No_image_available.svg.png"
                                                class="image_preview_container profile-user-img  img-circle" alt="Profile">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="profile" placeholder="Choose image" id="profile" class="profile" style="padding-top: 15px;">
                                            <span class="text-danger">{{ $errors->first('title') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="status" name="status" checked> Status
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    </div>
                </div>
            </form>
        </section>
    @endsection
