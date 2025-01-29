        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="{{ asset('assets/img/profile.jpg') }}">
                    </div>
                    <div class="info">
                        <a class="" data-toggle="collapse" href="{{ route('dashboard') }}" aria-expanded="true">
                            <span>
                                {{ auth()->user()->name }}
                                <span class="user-level">
                                    {{ auth()->user()->is_admin ? 'Administrator' : 'User' }}
                                </span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="{{ route('dashboard') }}">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('my.tasks') }}">
                            <i class="la la-table"></i>
                            <p>My Tasks</p>
                            <span class="badge badge-count">14</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/deleted-tasks">
                            <i class="la la-keyboard-o"></i>
                            <p>Archive</p>
                            <span class="badge badge-count">50</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
