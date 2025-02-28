        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img
                            src="{{ auth()->user()->image ? asset('storage/profiles/' . auth()->user()->image) : asset('assets/img/profile.jpg') }}">
                    </div>

                    <div class="info">
                        <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
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
                                    <a href="{{ route('profile.edit') }}">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is('tasks*') ? 'active' : '' }}">
                        <a href="{{ route('tasks.list') }}">
                            <i class="la la-list-alt"></i>
                            <p>My Tasks</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
