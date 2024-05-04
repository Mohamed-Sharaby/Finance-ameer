<div class="vertical-menu" >

    <div data-simplebar class="h-100" >


        <div id="sidebar-menu"   >
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('site.index')}}" class="waves-effect">
                        <i class="dripicons-arrow-left"></i>
                        <span>Website</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.main')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
{{--                        <span class="badge rounded-pill bg-info float-end">3</span>--}}
                        <span>Dashboard</span>
                    </a>
                </li>


                <li>
                    <a href="{{route('admin.orders.index')}}" class=" waves-effect">
                        <i class="mdi mdi-cart-plus"></i>
                        <span>Orders</span>
                    </a>
                </li>


            </ul>
        </div>


    </div>
</div>
