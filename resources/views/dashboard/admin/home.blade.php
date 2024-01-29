<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Dashboard | Home</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">




    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: 'Josefin Sans', sans-serif;
        }

        body {
            background-color: #f3f5f9;
        }

        .wrapper {
            display: flex;
            position: relative;
        }

        .wrapper .sidebar {
            width: 200px;
            height: 100%;
            background: #3c3c3c;
            padding: 30px 0px;
            position: fixed;
        }

        .wrapper .sidebar h2 {
            color: #fff;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 30px;
        }

        .wrapper .sidebar ul li {
            padding: 15px;
            border-bottom: 1px solid #bdb8d7;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .wrapper .sidebar ul li a {
            color: #bdb8d7;
            display: block;
        }

        .wrapper .sidebar ul li a .fas {
            width: 25px;
        }

        .wrapper .sidebar ul li:hover {
            background-color: #594f8d;
        }

        .wrapper .sidebar ul li:hover a {
            color: #fff;
        }

        .wrapper .sidebar .social_media {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
        }

        .wrapper .sidebar .social_media a {
            display: block;
            width: 40px;
            background: #594f8d;
            height: 40px;
            line-height: 45px;
            text-align: center;
            margin: 0 5px;
            color: #bdb8d7;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .wrapper .main_content {
            width: 100%;
            margin-left: 200px;
        }

        .wrapper .main_content .header {
            padding: 20px;
            background: #fff;
            color: #717171;
            border-bottom: 1px solid #e0e4e8;
        }

        .wrapper .main_content .info {
            margin: 20px;
            color: #717171;
            line-height: 25px;
        }

        .wrapper .main_content .info div {
            margin-bottom: 20px;
        }
    </style>
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
            <div class="header">Welcome!! Have a nice day.</div>

            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                        <h4 class="text-center mb-4">Admin Dashboard</h4>
                        <hr>

                        <div class="table-responsive">
                            <table class="table table-striped table-inverse">
                                <thead class="thead-inverse">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">{{ Auth::guard('admin')->user()->name }}</td>
                                        <td>{{ Auth::guard('admin')->user()->email }}</td>
                                        <td>{{ Auth::guard('admin')->user()->phone }}</td>
                                        <td>
                                            <a href="{{ route('admin.logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                            <form action="{{ route('admin.logout') }}" id="logout-form" method="post">
                                                @csrf</form>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    </div>

    <br><br>

</body>

</html>
