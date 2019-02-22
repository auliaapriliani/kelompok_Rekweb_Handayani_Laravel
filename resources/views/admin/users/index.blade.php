@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <p class="title-page"> Pasien</p>
        </div>
        <div class="col-md-2">
            @can('user_create')
                <p>
                    <a href="{{ route('admin.users.create') }}" class="btn btn-primary" style="width: 100%;"> <i class="fa fa-plus"></i> Tambah </a>
                </p>
            @endcan
        </div>


        <div class="col-md-12" >
                <div class="panel-body ">
                    <table class="table table-hover {{ count($users) > 0 ? 'datatable' : '' }} @can('user_delete') dt-select @endcan">
                        <thead>
                        <tr>
                            @can('user_delete')
                                <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                            @endcan

                            <th>@lang('quickadmin.users.fields.name')</th>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <th>@lang('quickadmin.users.fields.team')</th>
                            <th>&nbsp;</th>

                        </tr>
                        </thead>

                        <tbody>
                        @if (count($users) > 0)
                            @foreach ($users as $user)
                                <tr data-entry-id="{{ $user->id }}">
                                    @can('user_delete')
                                        <td></td>
                                    @endcan

                                    <td field-key='name'>{{ $user->name }}</td>
                                    <td field-key='email'>{{ $user->email }}</td>
                                    <td field-key='role'>{{ $user->role->title or '' }}</td>
                                    <td field-key='team'>
                                        @foreach($user->teams as $team)
                                            {{ $team->name or '' }} &nbsp
                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown">
                                                <span class="fa fa-ellipsis-h"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    @can('user_view')
                                                        <a href="{{ route('admin.users.show',[$user->id]) }}" > <i class="fa fa-search"></i> Detail </a>
                                                    @endcan
                                                </li>
                                                <li>
                                                    @can('user_edit')
                                                        <a href="{{ route('admin.users.edit',[$user->id]) }}" > <i class="fa fa-edit"></i> @lang('quickadmin.qa_edit')</a>
                                                    @endcan
                                                </li>
                                                <li class="divider"></li>
                                                <li>
                                                    @can('user_delete')
                                                        {!! Form::open(array(
                                                            'style' => 'display: inline-block;',
                                                            'method' => 'DELETE',
                                                            'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                                            'route' => ['admin.users.destroy', $user->id])) !!}
                                                        {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'text-danger')) !!}
                                                        {!! Form::close() !!}
                                                    @endcan

                                                </li>
                                            </ul>
                                        </div>




                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="11">

                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>




    </div>

@stop

@section('javascript') 
    <script>
        @can('user_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.users.mass_destroy') }}';
        @endcan

    </script>
@endsection