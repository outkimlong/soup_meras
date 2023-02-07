@extends('layouts.app')
    @section('content')
        <section class="content-header">
            <h4>Users</h4>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            @can('user-create')
                                <a href="{{ url('user/create')}}" class="btn btn-default btn-sm">Create</a>
                            @endcan
                        </div>
                        <div class="box-body table-responsive">
                            <table class="table table-bordered table-striped table-hover data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Users</th>
                                        <th>Roles</th>
                                        <th>Create On</th>
                                        <th>Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $user)
                                        <tr>
                                            <td>{{ str_pad($key + 1, 2, '0', STR_PAD_LEFT) }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>
                                                @if(!empty($user->getRoleNames()))
                    
                                                    @foreach($user->getRoleNames() as $v)
                                                        <label class="badge bg-orange">{{ $v }}</label>
                                                    @endforeach
                                                @endif
                                            </td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <span class="{{ $user->status == 1 ? 'badge bg-green' : 'badge bg-red' }}">{{ $user->status == 1 ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td class="text-center">
                                                @can('user-show')
                                                    <a href="{{ route('user.show', $user->id) }}"> View &nbsp;&nbsp;</a>
                                                @endcan
                                                @can('user-edit')
                                                    <a href="{{ url( 'user/'.$user->id.'/edit' )}}"> Edit &nbsp;&nbsp;</a>
                                                @endcan
                                                @can('user-delete')
                                                    {!! Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline','onsubmit' => 'return confirm("Are you sure?")' ]) !!}
                                                        <a href="#" onclick="$(this).closest('form').submit();" style="color: red"> Delete</a>
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