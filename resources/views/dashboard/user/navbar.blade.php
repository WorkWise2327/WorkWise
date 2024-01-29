<div class="navbar">
    <a href="{{ url('/userhome') }}" class="{{ Request::is('userhome') ? 'active-link' : '' }}">Home</a>
    <a href="{{ url('/savedjobview') }}" class="{{ Request::is('savedjobview') ? 'active-link' : '' }}">Saved Jobs</a>
    <a href="{{ url('/myjobsview') }}" class="{{ Request::is('myjobsview') ? 'active-link' : '' }}">My Jobs</a>
    <a href="{{ url('/surf') }}" class="{{ Request::is('surf') ? 'active-link' : '' }}">Find Work</a>


    <div class="logout-btn-container">
        <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
            class="logout-btn">Logout</a>
        <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
    </div>
</div>
