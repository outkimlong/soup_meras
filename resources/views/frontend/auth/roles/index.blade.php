@extends('layouts.app')
    @section('content')
        <section class="content-header">
            <h4>Roles</h4>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            @can('role-create')
                                <a href="{{ url('roles/create')}}" class="btn btn-primary btn-sm">Create</a>
                            @endcan
                        </div>
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Roles</th>
                                        <th>Create On</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td>{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>{{ $role->created_at }}</td>
                                            <td class="text-center">
                                                @can('role-show')
                                                    <a href="{{ route('roles.show', $role->id) }}"> View &nbsp;&nbsp;</a>
                                                @endcan
                                                @can('role-edit')
                                                    <a href="{{ url('roles/'.$role->id.'/edit' )}}"> Edit &nbsp;&nbsp;</a>
                                                @endcan
                                                @can('role-delete')
                                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline','onsubmit' => 'return confirm("Are you sure?")' ]) !!}
                                                        <a href="#" onclick="$(this).closest('form').submit();"> Delete</a>
                                                    {!! Form::close() !!}
                                                @endcan
                                            </td> 
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection