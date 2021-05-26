<div class="main-sidebar" tabindex="1" style="overflow: hidden; outline: none;">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">{{ SiteInformation::getSiteInformation()->site_name }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">{{ substr(SiteInformation::getSiteInformation()->site_name, 0, 1) }}</a>
        </div>
        <ul class="sidebar-menu">
            <li><a class="nav-link" href="{{ route('administrator.dashboard') }}"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
            <li><a class="nav-link" href="{{ route('administrator.vision-mission.index') }}"><i class="fas fa-dot-circle"></i> <span>Vision Mission</span></a></li>
        </ul>

    </aside>
</div>