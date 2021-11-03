<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route ('index') }}"><i class
                            ="menu-icon fa fa-laptop"></i>Go to homepage </a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'dashboard' ? 'active' : '' }}">
                        <a href="{{ route ('dashboard') }}"><i class
                            ="menu-icon fa fa-tachometer" aria-hidden="true"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Jobs</li><!-- /.menu-title -->
                    <li class="{{ \Route::current()->getName() == 'job.index' ? 'active' : '' }}">
                        <a href="{{ route ('job.index') }}"> <i class="menu-icon fa fa-list"></i>Jobs List</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'job.create' ? 'active' : '' }}">
                        <a href="{{ route ('job.create') }}"> <i class="menu-icon fa fa-briefcase"></i>Add Job Vacancies</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'category.index' ? 'active' : '' }}">
                        <a href="{{ route ('category.index') }}"> <i class="menu-icon fa fa-sitemap"></i>Add Job Categories</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'location.index' ? 'active' : '' }}">
                        <a href="{{ route ('location.index') }}"> <i class="menu-icon fa fa-map-marker"></i>Add Job Location</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'question.index' ? 'active' : '' }}">
                        <a href="{{ route ('question.index') }}"> <i class="menu-icon fa fa-check-square-o"></i>Add Custom Question</a>
                    </li>

                    <li class="menu-title">Company</li><!-- /.menu-title -->
                    <li class="{{ \Route::current()->getName() == 'company.index' ? 'active' : '' }}">
                        <a href="{{ route ('company.index') }}"> <i class="menu-icon fa fa-building"></i>Companies List</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'company.create' ? 'active' : '' }}">
                        <a href="{{ route ('company.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Company</a>
                    </li>

                    <li class="menu-title">Branches</li><!-- /.menu-title -->
                    <li class="{{ \Route::current()->getName() == 'branch.index' ? 'active' : '' }}">
                        <a href="{{ route ('branch.index') }}"> <i class="menu-icon fa fa-building"></i>Branches List</a>
                    </li>

                    <li class="menu-title">Job Application</li>
                    <li class="{{ \Route::current()->getName() == 'applicant.index' ? 'active' : '' }}">
                        <a href="{{ route ('applicant.index') }}"> <i class="menu-icon fa fa-group"></i>Applications List</a>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-check"></i>Application by status</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-envelope"></i><a href="{{ route('applicant.new') }}">New</a></li>
                            <li><i class="menu-icon fa fa-search"></i><a href="{{ route('applicant.interview') }}">Interview</a></li>
                            <li><i class="menu-icon fa fa-thumbs-up"></i><a href="{{ route('applicant.hired') }}">Hired</a></li>
                            <li><i class="menu-icon fa fa-warning"></i><a href="{{ route('applicant.rejected') }}">Rejected</a></li>
                        </ul>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'interview.index' ? 'active' : '' }}">
                        <a href="{{ route ('interview.index') }}"> <i class="menu-icon fa fa-calendar"></i>Interview Schedule</a>
                    </li>
                    <li class="menu-title">Utilities</li>
                    <li class="{{ \Route::current()->getName() == 'blog.index' ? 'active' : '' }}">
                        <a href="{{ route ('blog.index') }}"> <i class="menu-icon fa fa-pencil-square-o"></i>Blogs List</a>
                    </li>
                    <li class="{{ \Route::current()->getName() == 'contact-us.index' ? 'active' : '' }}">
                        <a href="{{ route ('contact-us.index') }}"> <i class="menu-icon fa fa-envelope"></i>Contact Inbox List</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
