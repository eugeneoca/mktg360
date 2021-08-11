<!-- Sidebar -->
<ul class="navbar-nav  sidebar   accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="d-flex align-items-center justify-content-center my-3" href="#">   
    <img src="{{asset('images/logo.png')}}" alt="logo" width="62px" class="brand " />
</a>




<div class="d-flex align-items-center p-4 sidebar-user">
    <div class="left mr-3">
        <img class="rounded-circle" src="{{asset('images/admin.png')}}" width="40px"
            alt="...">
    </div>
    <div class="right font-weight-bold">
        <div class="strong" id="username" style="text-transform: capitalize;">
            <div class="spinner-border spinner-border-sm" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <div class="small text-gray-500" id="user-role" style="text-transform: capitalize;">
            <div class="spinner-border spinner-border-sm" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
</div>





<!-- Nav Item - Dashboard -->
<li class="nav-item {{request()->is('dashboard') ? 'active' : ''}}">   
    <a class="nav-link" href="{{ url('/dashboard') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Nav Item - Messages -->
<li class="nav-item {{request()->is('messages') ? 'active' : ''}}">   
    <a class="nav-link" href="{{ url('/messages') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Messages</span></a>
</li>


<!-- Nav Item - Social Media Marketing -->
<li class="nav-item {{request()->is('social-media-marketing*') ? 'active' : ''}}">   
    <a class="nav-link" href="{{ url('/social-media-marketing/campaign-ideas') }}">
    <i class="fas fa-glasses"></i>
        <span>Social Media Marketing</span></a>
</li>

<!-- Nav Item - Reports -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
    <i class="fas fa-chart-line"></i>
        <span>Reports</span></a>
</li>

<!-- Nav Item - Simplified Social -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
        <i class="fas fa-user"></i>
        <span>Simplified Social</span></a>
</li>

<!-- Nav Item - Social Graphics -->
<li class="nav-item {{request()->is('social-graphics') ? 'active' : ''}}">   
    <a class="nav-link" href="{{ url('/social-graphics') }}">
    <i class="far fa-image"></i>
        <span>Social Graphics</span></a>
</li>

<!-- Nav Item - Customized Graphics -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
    <i class="far fa-images"></i>
        <span>Customized Graphics</span></a>
</li>

<!-- Nav Item - Curated Article Post -->
<li class="nav-item {{request()->is('curated-article') ? 'active' : ''}}">   
    <a class="nav-link" href="{{ url('/curated-article') }}">
    <i class="fas fa-edit"></i>
        <span>Curated Article Post</span></a>
</li>

<!-- Nav Item - Organic Growth Checklist -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
    <i class="fas fa-signal"></i>
        <span>Organic Growth Checklist</span></a>
</li>

<!-- Nav Item - Social Education -->
<li class="nav-item {{request()->is('social-education') ? 'active' : ''}}">   
    <a class="nav-link" href="{{ url('/social-education') }}">
    <i class="far fa-thumbs-up"></i>
        <span>Social Education</span></a>
</li>

<!-- Nav Item - Calendar -->
<li class="nav-item">
    <a class="nav-link" href="tables.html">
    <i class="far fa-calendar-alt"></i>
        <span>Calendar</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Nav Item - Settings -->
<li class="nav-item {{request()->is('settings*') ? 'active' : ''}}"> 
<a class="nav-link" href="{{ url('/settings/access-to-accounts') }}">
    <i class="fas fa-wrench"></i>
        <span>Settings</span></a>
</li>





<!-- Sidebar Toggler (Sidebar) 
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div> -->

<!-- Nav Item - Settings -->
<li class="nav-item d-flex mt-auto">
    <a class="nav-link" href="#" id="sidebarShrink">
    <i class="fas fa-toggle-off"></i>
        <span>Toggle Sidebar</span>
    </a>
</li>



</ul>
<!-- End of Sidebar -->