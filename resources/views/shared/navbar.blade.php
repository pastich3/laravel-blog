<nav class="navbar navbar-light fixed-top navbar-expand-md pt-0 pb-0">
    <div class="container">
        <!-- Branding Image -->
        <a href="{{route('home')}}" class="navbar-brand mr-5">
            <img style="height: 56px" src="{{URL::asset('images/logo.svg')}}">
        </a>

        <!-- Collapsed Hamburger -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            @admin
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{ link_to_route('admin.dashboard', __('dashboard.dashboard'), [], ['class' => 'nav-link']) }}
                    </li>
                </ul>
            @endadmin
            <ul class="navbar-nav">
                <!-- <li class="nav-item dropdown">
                        <a v-pre href="#" class="nav-link dropdown-toggle" id="ourStoryDropdownToggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Stories
                        </a>

                        <div class="dropdown-menu" aria-labelledby="ourStoryDropdownToggle">
                            {{ link_to_route('your_story', __('tatham.your_story'), [], ['class' => 'dropdown-item']) }}
                            <div class="dropdown-divider"></div>
                            {{ link_to_route('our_story', __('tatham.our_story'), [], ['class' => 'dropdown-item']) }}
                        </div>
                </li> -->
                <!-- <li class="nav-item d-flex justify-content-center">
                    {{ link_to_route('your_story', __('tatham.your_story'), [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item d-flex justify-content-center">
                    {{ link_to_route('our_story', __('tatham.our_story'), [], ['class' => 'nav-link']) }}
                </li> -->
                <li class="nav-item d-flex justify-content-center">
                    <a href="#" class="nav-link"> Team </a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    {{ link_to_route('testimonials', __('tatham.testimonials'), [], ['class' => 'nav-link']) }}
                </li>
                <li class="nav-item">
                    {{ link_to_route('blog', __('tatham.blog'), [], ['class' => 'nav-link']) }}
                </li>
                @guest
                    <li class="nav-item d-flex justify-content-center">
                        {{ link_to_route('contact', __('tatham.contact'), [], ['class' => 'nav-link']) }}
                    </li>
                @endguest
            </ul>
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item d-flex justify-content-center">{{ link_to_route('login', __('auth.login'), [], ['class' => 'nav-link']) }}</li>
                    <!-- <li class="nav-item d-flex justify-content-center">{{ link_to_route('register', __('auth.register'), [], ['class' => 'nav-link']) }}</li> -->
                @else
                    <li class="nav-item dropdown">
                        <a v-pre href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            {{ link_to_route('users.show', __('users.public_profile'), Auth::user(), ['class' => 'dropdown-item']) }}
                            {{ link_to_route('users.edit', __('users.settings'), [], ['class' => 'dropdown-item']) }}

                            <div class="dropdown-divider"></div>

                            <a href="{{ url('/logout') }}"
                                class="dropdown-item"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                @lang('auth.logout')
                            </a>

                            <form id="logout-form" class="d-none" action="{{ url('/logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

