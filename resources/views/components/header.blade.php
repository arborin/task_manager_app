        <div class="main-header">
            <div class="logo-header">
                <a href="{{ route('dashboard') }}" class="logo">
                    Task Manager
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">


                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false"> <img
                                    src="{{ auth()->user()->image ? asset('storage/profiles/' . auth()->user()->image) : asset('assets/img/profile.jpg') }}"
                                    alt="user-img" width="36"
                                    class="img-circle"><span>{{ auth()->user()->name }}</span></span>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li>
                                    <div class="user-box">
                                        <div class="u-img"><img
                                                src="{{ auth()->user()->image ? asset('storage/profiles/' . auth()->user()->image) : asset('assets/img/profile.jpg') }}"
                                                alt="user"></div>
                                        <div class="u-text">
                                            <h4>{{ auth()->user()->name }}</h4>
                                            <p class="text-muted">{{ auth()->user()->email }}</p><a
                                                href="{{ route('profile.edit') }}"
                                                class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <div class="dropdown-divider"></div>
                                @if (Auth::check())
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fa fa-power-off"></i> Logout
                                        </button>
                                    </form>
                                @endif
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
