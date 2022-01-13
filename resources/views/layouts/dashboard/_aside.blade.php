

<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset(auth()->user()->getImagePathAttribute()) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>@lang('site.title')</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <br>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.welcome') }}"><i
                        class="fa fa-dashboard"></i><span>@lang('site.dashboard')</span></a></li>
            @if (auth()->user()->hasPermission('read_roles'))

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>@lang('site.management') </span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu" style="display:none">
                    @if (auth()->user()->hasPermission('read_roles'))
                        <li><a href="{{ route('dashboard.roles.index') }}"><i
                                    class="fa fa-sliders"></i><span>@lang('site.roles')</span></a></li>
                    @endif
                    @if (auth()->user()->hasPermission('read_users'))
                        <li><a href="{{ route('dashboard.users.index') }}"><i
                                    class="fa fa-cogs"></i><span>@lang('site.admins')</span></a></li>
                    @endif
                    @if (auth()->user()->hasPermission('read_users'))
                        <li><a href="{{ route('dashboard.manage_users.index') }}"><i
                                    class="fa fa-users"></i><span>@lang('site.users')</span></a></li>
                    @endif

                        @if (auth()->user()->hasPermission('read_sellers'))
                        <li><a href="{{ route('dashboard.sellers.index') }}"><i
                                    class="fa fa-users"></i><span>@lang('site.sellers')</span></a></li>
                    @endif
                </ul>

            </li>

            @endif

            @if (auth()->user()->hasPermission('read_geographies'))
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-globe"></i>
                        <span>@lang('site.geography')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu" style="display:none">
                        <li><a href="{{ route('dashboard.countries.index') }}"><i
                                    class="fa fa-flag-o"></i><span>@lang('site.countries')</span></a></li>
                        <li><a href="{{ route('dashboard.cities.index') }}"><i
                                    class="fa fa-building-o"></i><span>@lang('site.cities')</span></a></li>
                    </ul>
                </li>
            @endif


            @if (auth()->user()->hasPermission('read_sliders'))

                <li><a href="{{ route('dashboard.catogeryjobs.index') }}"><i class="fa fa-th fa fa-1.5x"></i><span>@lang('site.complain')

                    <span class="kt-badge kt-badge--rounded kt-badge--brand btn-danger fa fa-2x">

                </span>

    </span></a></li>

            @endif

            @if (auth()->user()->hasPermission('read_pages'))
            <li><a href="{{ route('dashboard.pages.index') }}"><i
                        class="fa fa-newspaper-o"></i><span>@lang('site.pages')</span></a></li>

            @endif

            @if (auth()->user()->hasPermission('read_discountss'))
            <li><a href="{{ route('dashboard.offers.index') }}"><i
                        class="fa fa-newspaper-o"></i><span>@lang('site.offers')</span></a></li>
            @endif

            @if (auth()->user()->hasPermission('read_Coupons'))
            <li><a href="{{ route('dashboard.capons.index') }}"><i
                        class="fa fa-newspaper-o"></i><span>@lang('site.capons')</span></a></li>

            @endif



            @if (auth()->user()->hasPermission('read_categories'))

                <li><a href="{{ route('dashboard.catogeries.index') }}"><i class="fa fa-th fa fa-1.5x"></i><span>@lang('site.categories')

                    <span class="kt-badge kt-badge--rounded kt-badge--brand btn-danger fa fa-2x">

                </span>

    </span></a></li>

            @endif




            @if (auth()->user()->hasPermission('read_currencies'))

                <li><a href="{{ route('dashboard.currencies.index') }}">
                        <i class="fas fa-wrench"></i>
                        <span>@lang('site.currencies')

                    <span class="kt-badge kt-badge--rounded kt-badge--brand btn-danger fa fa-2x">

                </span>

    </span></a></li>

            @endif

            @if (auth()->user()->hasPermission('read_products'))

                <li><a href="{{ route('dashboard.products.index') }}">
                        <i class="fa fa-globe"></i>
                        <span>@lang('site.products')

                    <span class="kt-badge kt-badge--rounded kt-badge--brand btn-danger fa fa-2x">

                </span>

    </span></a></li>

            @endif

            @if (auth()->user()->hasPermission('read_contactusmassages'))
            <li><a href="{{ route('dashboard.contacts.index') }}"><i class="fa fa-envelope"></i><span>@lang('site.contact')

                    </span>
                </a>
            </li>
            @endif




            @if (auth()->user()->hasPermission('read_orders'))

                <li><a href="{{ route('dashboard.orders.index') }}">
                        <i class="fas fa-hand-holding-usd"></i>
                        <span>@lang('site.orders')

                    <span class="kt-badge kt-badge--rounded kt-badge--brand btn-danger fa fa-2x">

                </span>

    </span></a></li>

            @endif


            @if (auth()->user()->hasPermission('read_settings'))

                <li><a href="{{ route('dashboard.settings.index') }}"><i class="fas fa-cog"></i><span>@lang('site.settings')

                            <span class="kt-badge kt-badge--rounded kt-badge--brand btn-danger fa fa-2x">

                        </span>

            </span></a></li>

            @endif

            @if (auth()->user()->hasPermission('read_reports'))
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-newspaper-o"></i>
                        <span>@lang('site.reports')</span>
                        <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                    </a>
                    <ul class="treeview-menu" style="display:none">

                        <li><a href="{{ route('dashboard.reportproducts') }}"><i
                                    class="fa fa-building-o"></i><span>@lang('site.products')</span></a></li>


                        <li><a href="{{ route('dashboard.reportusers') }}"><i
                                    class="fa fa-building-o"></i><span>@lang('site.users')</span></a></li>
                        <li><a href="{{ route('dashboard.reportvisitor') }}"><i
                                    class="fa fa-building-o"></i><span>@lang('site.reportvisitor')</span></a></li>

                        <li><a href="{{ route('dashboard.reportseller') }}"><i
                                    class="fa fa-building-o"></i><span>@lang('site.sellers')</span></a></li>
                        <li><a href="{{ route('dashboard.reportorders') }}">
                                <i
                                    class="fa fa-building-o"></i>
                                <span>@lang('site.orders')</span></a></li>


                    </ul>
                </li>

            @endif


        </ul>

    </section>

</aside>

