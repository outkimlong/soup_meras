@extends('layouts.app')
    @section('content')
        <section class="content-header">
            <h4>Create Role</h4>
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
            <form action="{{ url('role')}}" method="POST" enctype="multipart/form-data">
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
                                        <label for="name">Role</label>                                        
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Set Permission</label>                                        
                                        
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped table-hover custom_table">
                                                <thead>
                                                    <tr>
                                                        <th>Check</th>
                                                        <th>Permission</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($permission as $value)
                                                        <tr>
                                                            <td>
                                                                {{ Form::checkbox('permission[]', $value->id, false, array('class' => 'flat minimal-red')) }}
                                                            </td>
                                                            <td>{{ $value->name }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Save</button>
                        <a href="{{ url('role') }}" class="btn btn-default btn-sm pull-right">Cancel</a>
                    </div>
                </div>
            </form>
        </section>
    @endsection
