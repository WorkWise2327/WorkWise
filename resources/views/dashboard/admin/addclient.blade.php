<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Dashboard | Home</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">

    @include('dashboard.admin.style')
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>{{ Auth::guard('admin')->user()->name }}</h2>
            <ul>
                <li><a href="{{ url('/admin/home') }}"><i class="fas fa-home"></i>Home</a></li>
                <li><a href="{{ url('/addcv') }}"><i class="fas fa-plus-circle"></i>Add Clients</a></li>
                <li><a href="{{ url('/addfv') }}"><i class="fas fa-plus"></i>Add Freelancers</a></li>
                <li><a href="{{ url('/manageclient') }}"><i class="fas fa-user-secret"></i>Manage Clients</a></li>
                <li><a href="{{ url('/managefreelancer') }}"><i class="fas fa-user"></i>Manage Freelancers</a></li>
                <li><a href="{{ url('/managejobsview') }}"><i class="fas fa-briefcase"></i>Manage Jobs</a></li>
                <li><a href="#"><i class="fas fa-blog"></i>Blogs</a></li>
                <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
                <li><a href="#"><i class="fas fa-map-pin"></i>Map</a></li>
            </ul>

        </div>
        <div class="main_content">
            <div class="header">Add Clients</div>

            <form action="{{ url('/addclient') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>Add Clients</h2>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="company">Company Name</label>
                <input type="text" id="company" name="company" value="" required>

                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="" required>

                <label for="password">Password</label>
                <input type="text" id="password" name="password" value="$2y$12$9HInvFbRlAMZLM/wZQEfsOKnX1tyhxUYKE16l4fWq1Jx/.os/NZX." required readonly>


                <input type="submit" value="Save" style="background-color: #45a049; color: white">
            </form>




        </div>
    </div>

    <br><br>

</body>
</html>



