<div class="o-page__sidebar js-page-sidebar">
    <aside class="c-sidebar">
        <div class="c-sidebar__brand">
            <a href="{{ url('admin/home') }}"><img src="{{ url('img/logo.png') }}" alt="Neat"></a>
        </div>


        <div class="c-sidebar__body">
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link " href="{{ url('admin/home') }}">
                        <i class="c-sidebar__icon feather icon-bar-chart"></i>Dashboard
                    </a>
                </li>
            </ul>

            <span class="c-sidebar__title"></span>
            <ul class="c-sidebar__list">
            <li>
                <a class="c-sidebar__link " href="">
                    <i class="c-sidebar__icon feather icon-user-plus"></i>Admin
                </a>
            </li>
            </ul>
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link " href="">
                        <i class="c-sidebar__icon feather icon-user-plus"></i>Owner
                    </a>
                </li>
            </ul>
            <ul class="c-sidebar__list">
                <li>
                    <a class="c-sidebar__link " href="">
                        <i class="c-sidebar__icon feather icon-user-plus"></i>Manager
                    </a>
                </li>
            </ul>

        </div>

        <a class="c-sidebar__footer" href="{{ url('/admin/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout <i class="c-sidebar__footer-icon feather icon-power"></i>
        </a>
        <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </aside>
</div>