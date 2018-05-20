<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ route('adminHome') }}" class="site_title">Dashboard</a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="Avatar of {{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Options</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('gallery') }}">
                            <i class="fa fa-image"></i>
                            Galerie
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('tags') }}">
                            <i class="fa fa-tags"></i>
                            Tags
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users') }}">
                            <i class="fa fa-user"></i>
                            Users
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
    </div>
</div>