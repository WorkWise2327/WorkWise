<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freelancer Dashboard | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">

    @include('dashboard.user.style')

</head>

<body>


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

    <div class="container">
        <div class="profile-info">
            <label for="name">Name:</label>
            <p>{{ Auth::guard('web')->user()->name }}</p>
<br>
            <label for="email">Email:</label>
            <p>{{ Auth::guard('web')->user()->email }}</p>
        </div>
    </div>

        <!-- Footer section -->
        <footer>
            <p>&copy; 2024 Workwise Freelancer Dashboard. All rights reserved.</p>
        </footer>
</body>
</html>
