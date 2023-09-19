<div class="side-menu-fixed">
    <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
            <!-- menu item Dashboard-->
            <li>
                <a href="{{url('/backoffice')}}" data-bs-toggle="collapse" data-bs-target="#dashboard">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div>
                    <div class="pull-right"><i></i></div>
                    <div class="clearfix"></div>
                </a>
                <!-- menu title -->
            <li class="mt-10 mb-10 text-muted ps-4 font-medium menu-title">Components</li>
            <!-- menu item Elements-->
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#categories-menu">
                    <div class="pull-left"><i class="fa fa-th-large"></i><span class="right-nav-text">Post Categories</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="categories-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.categories.index')}}">Brows All Categories</a></li>
                    <li><a href="{{route('dashboard.categories.create')}}">Add New Category</a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#posts-menu">
                    <div class="pull-left"><i class="fa fa-cube"></i><span class="right-nav-text">Posts</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="posts-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.posts.index')}}">Brows All Posts</a></li>
                    <li><a href="{{route('dashboard.posts.create')}}">Add New Posts </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#restaurants-menu">
                    <div class="pull-left"><i class="fa fa-glass"></i><span class="right-nav-text">Restaurants</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="restaurants-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.restaurants.index')}}">Brows All Restaurants</a></li>
                    <li><a href="{{route('dashboard.restaurants.create')}}">Add New Restaurant </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#services-menu">
                    <div class="pull-left"><i class="fa fa-gears"></i><span class="right-nav-text">Services</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="services-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.services.index')}}">Brows All Services</a></li>
                    <li><a href="{{route('dashboard.services.create')}}">Add New Service </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#hotels-menu">
                    <div class="pull-left"><i class="fa fa-hotel"></i><span class="right-nav-text">Hotels and Spa</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="hotels-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.hotels.index')}}">Brows All Hotels</a></li>
                    <li><a href="{{route('dashboard.hotels.create')}}">Add New Hotel </a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#cars-menu">
                    <div class="pull-left"><i class="fa fa-car"></i><span class="right-nav-text">Cars</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="cars-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.cars.index')}}">Brows All Cars</a></li>
                    <li><a href="{{route('dashboard.cars.create')}}">Add New Car </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#dealers-menu">
                    <div class="pull-left"><i class="fa fa-dedent"></i><span class="right-nav-text">Cars Dealer</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="dealers-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.dealers.index')}}">Brows All Dealers</a></li>
                    <li><a href="{{route('dashboard.dealers.create')}}">Add New Dealer </a></li>
                </ul>
            </li>


            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#users-menu">
                    <div class="pull-left"><i class="fa fa-user"></i><span class="right-nav-text">Users</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="users-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.users.index')}}">Brows All Users</a></li>
                    <li><a href="{{route('dashboard.users.create')}}">Add New User </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#editors-menu">
                    <div class="pull-left"><i class="fa fa-pencil"></i><span class="right-nav-text">Editors</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="editors-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.editors.index')}}">Brows All Editors</a></li>
                    <li><a href="{{route('dashboard.editors.create')}}">Add New Editor </a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#news-menu">
                    <div class="pull-left"><i class="fa fa-newspaper-o"></i><span class="right-nav-text">News</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="news-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="#">Brows All News</a></li>
                    <li><a href="{{url('/backoffice/products/create')}}">Add New News </a></li>
                </ul>
            </li>

            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#contact-menu">
                    <div class="pull-left"><i class="fa fa-envelope"></i><span class="right-nav-text">Messages</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="contact-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="{{route('dashboard.contact-us.index')}}">Requested Messages</a></li>
                    <li><a href="{{route('dashboard.contact-us.create')}}"> Message's Subjects</a></li>

                </ul>

            </li>
            <li>
                <a href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#site-menu">
                    <div class="pull-left"><i class="fa fa-info"></i><span class="right-nav-text">Website Information</span>
                    </div>
                    <div class="pull-right"><i class="ti-plus"></i></div>
                    <div class="clearfix"></div>
                </a>
                <ul id="site-menu" class="collapse" data-bs-parent="#sidebarnav">
                    <li><a href="#">Contact Information </a></li>
                    <li><a href="#">Terms & Conditions </a></li>
                    <li><a href="#"> Privacy Policy </a></li>
                </ul>

            </li>




        </ul>
    </div>
</div>
