<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="index.html"><img class="logo_icon img-responsive" src="images/logo/logo_icon.png"
                        alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img">
                    @if (Auth::user()->image == null)
                        <img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" />
                    @else
                        <img class="img-responsive" src="{{ Auth::user()->image }}" alt="{{ Auth::user()->name }}" />
                    @endif
                </div>
                <div class="user_info">
                    <h6>{{ Auth::user()->name }}</h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">

            <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-table purple_color2"></i>
                    <span>Dashboard</span></a></li>

            <li><a href="{{ route('admin.systemSetting.create') }}"><i class="fa fa-cogs blue_color"></i> <span>System
                        Setting</span></a></li>

            <li>
                <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-diamond purple_color"></i> <span>Class</span></a>
                <ul class="collapse list-unstyled" id="element">
                    <li><a href="{{ route('admin.ourclass.create') }}"><i class="fa fa-child purple_color2"></i>
                            <span>Ourclass</span></a></li>
                    <li><a href="{{ route('admin.exercise.create') }}"><i class="fa fa-gavel purple_color2"></i>
                            <span>Exercise</span></a></li>
                </ul>
            </li>


            <li><a href="{{ route('admin.classSchedule.create') }}"><i class="fa fa-calculator purple_color2"></i>
                    <span>Class Schedule</span></a>
            </li>

            <li><a href="{{ route('admin.instructor.create') }}"><i class="fa fa-mortar-board purple_color2"></i>
                    <span>Instructors</span></a>
            </li>
            <li>
                <a href="{{ route('admin.contact.index') }}">
                    <i class="fa fa-paper-plane red_color"></i> <span>Contact Message</span></a>
            </li>

            <li><a href="{{ route('admin.product.create') }}"><i class="fa fa-mortar-board purple_color2"></i>
                    <span>Products</span></a>
            </li>

            <li>
                <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i
                        class="fa fa-object-group blue2_color"></i> <span>Apps</span></a>
                <ul class="collapse list-unstyled" id="apps">
                    <li><a href="email.html">> <span>Email</span></a></li>
                    <li><a href="calendar.html">> <span>Calendar</span></a></li>
                    <li><a href="media_gallery.html">> <span>Media Gallery</span></a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
