<div id="kt_header" class="header">
    <div class="container-xxl d-flex align-items-stretch justify-content-between">
        <div class="d-flex align-items-center">
            <a href="{{URL::to('/')}}">
                <img alt="Logo" src="{{asset('assets/media/logos/logo.png')}}" class="h-30px"/>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <div class="ms-1 ms-lg-6">
                <div class="btn btn-icon btn-sm btn-active-bg-accent" data-kt-menu-trigger="click"
                     data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>

                <!--layout-partial:partials/layout/_header_user_menu.html-->

            </div>
        </div>
    </div>
</div>

