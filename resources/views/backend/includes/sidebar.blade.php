<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route ('dashboard') }}"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Jobs</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('job.index') }}"> <i class="menu-icon fa fa-list"></i>Jobs List</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('job.create') }}"> <i class="menu-icon fa fa-briefcase"></i>Add Job Vacancies</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('category.index') }}"> <i class="menu-icon fa fa-sitemap"></i>Add Job Categories</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('location.index') }}"> <i class="menu-icon fa fa-map-marker"></i>Add Job Location</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('question.index') }}"> <i class="menu-icon fa fa-check-square-o"></i>Add Custom Question</a>
                    </li>

                    <li class="menu-title">Company</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('company.index') }}"> <i class="menu-icon fa fa-building"></i>Companies List</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('company.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Company</a>
                    </li>

                    <li class="menu-title">Job Application</li>
                    <li class="">
                        <a href="{{ route ('applicant.index') }}"> <i class="menu-icon fa fa-group"></i>Applications List</a>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-check"></i>Application by status</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-envelope"></i><a href="{{ url('../admin/applicant/status/new')}}">New</a></li>
                            <li><i class="menu-icon fa fa-phone"></i><a href="{{ url('../admin/applicant/status/phone')}}">Phone Interview</a></li>
                            <li><i class="menu-icon fa fa-search"></i><a href="{{ url('../admin/applicant/status/interview')}}">Interview</a></li>
                            <li><i class="menu-icon fa fa-thumbs-up"></i><a href="{{ url('../admin/applicant/status/hired')}}">Hired</a></li>
                            <li><i class="menu-icon fa fa-warning"></i><a href="{{ url('../admin/applicant/status/rejected') }}">Rejected</a></li>
                        </ul>
                    </li>
                    <li class="menu-title">Utilities</li>
                    <li class="">
                        <a href="{{ route ('blog.index') }}"> <i class="menu-icon fa fa-pencil-square-o"></i>Blogs List</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('contact-us.index') }}"> <i class="menu-icon fa fa-envelope"></i>Contact Inbox List</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
