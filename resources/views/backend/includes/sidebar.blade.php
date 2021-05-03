<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="/dashboard"><i class
                            ="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Jobs</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('job.index') }}"> <i class="menu-icon fa fa-list"></i>Job Lists</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('job.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Job Vacancies</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('category.index') }}"> <i class="menu-icon fa fa-plus"></i>Add Job Categories</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('location.index') }}"> <i class="menu-icon fa fa-plus"></i>Add Job Location</a>
                    </li>

                    <li class="menu-title">Company</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('company.index') }}"> <i class="menu-icon fa fa-list"></i>Company Lists</a>
                    </li>
                    <li class="">
                        <a href="{{ route ('company.create') }}"> <i class="menu-icon fa fa-plus"></i>Add Company</a>
                    </li>

                    <li class="menu-title">Job Application</li><!-- /.menu-title -->
                    <li class="">
                        <a href="{{ route ('applicant.index') }}"> <i class="menu-icon fa fa-list"></i>Application Lists</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
