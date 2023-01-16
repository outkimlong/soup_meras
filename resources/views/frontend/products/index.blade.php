@extends('layouts.app')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <div class="input-group">
                            {{-- @can('product-create') --}}
                                <a href="{{ url('product/create')}}" class="btn btn-default btn-sm"> Create </a>
                            {{-- @endcan --}}
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Remark</th>
                                    <th>Creator</th>
                                    <th class="text-center" style="width: 40px">Status</th>
                                    <th class="text-center" style="width: 200px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($params) && $params->count())
                                    @foreach ($params as $index => $item)
                                        <tr>
                                            <td>{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</td>
                                            <td>{{ $item->image }}</td>
                                            <td>{{ $item->name_kh }}</td>
                                            <td>{{ $item->remark }}</td>
                                            <td>{{ $item->user->name }}</td>
                                            <td class="text-center">
                                                <span class="{{ $item->status == 1 ? 'badge bg-green' : 'badge bg-red' }}">{{ $item->status == 1 ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td class="text-center">
                                                {{-- @can('product-edit') --}}
                                                    <a href="{{ route('product.edit', $item->id) }}"> Update </a>
                                                {{-- @endcan --}}
                                                &nbsp;
                                                {{-- @can('product-delete') --}}
                                                {!! Form::open(['method' => 'DELETE','route' => ['product.destroy', $item->id],'style'=>'display:inline','onsubmit' => 'return confirm("Are you sure?")' ]) !!}
                                                    <a href="#" onclick="$(this).closest('form').submit();" style="color: red"> 
                                                        Delete
                                                    </a>
                                                {!! Form::close() !!}
                                                {{-- @endcan --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="10">There are no data.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">                         
                            <li>{!! $params->appends(Request::all())->links() !!} </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
