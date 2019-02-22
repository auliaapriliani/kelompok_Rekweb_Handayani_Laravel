@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('adminlte/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <ul class="sidebar-menu">
            <br>

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('quickadmin.qa_dashboard')</span>
                </a>
            </li>

            @can('user_management_access')

            <li>
                <a href="{{ route('admin.users.index') }}">
                    <i class="fa fa-users"></i>
                    <span>Pasien</span>
                </a>
            </li>

                <li>
                    <a href="{{ route('admin.kohort.create') }}">
                        <i class="fa fa-book"></i>
                        <span>Kohort Ibu Hamil</span>
                    </a>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-database"></i>
                        <span>Data Master</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu">
                        @can('role_access')
                            <li>
                                <a href="{{ route('admin.roles.index') }}">
                                    <i class="fa fa-briefcase"></i>
                                    <span>@lang('quickadmin.roles.title')</span>
                                </a>
                            </li>@endcan


                        @can('team_access')
                            <li>
                                <a href="{{ route('admin.teams.index') }}">
                                    <i class="fa fa-users"></i>
                                    <span>@lang('quickadmin.teams.title')</span>
                                </a>
                            </li>@endcan

                    </ul>
                </li>

            @endcan
            
            {{--@can('product_access')--}}
            {{--<li>--}}
                {{--<a href="{{ route('admin.products.index') }}">--}}
                    {{--<i class="fa fa-file-text"></i>--}}
                    {{--<span>@lang('quickadmin.products.title')</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endcan--}}
            

            

            



            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">@lang('quickadmin.qa_change_password')</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('quickadmin.qa_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>

