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
            <div class="header">Manage Freelancer</div>

            <table class="table" style="margin: 20px; width: 55%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th style="width: 120px">Update</th>
                        <th style="width: 120px">Delete</th>
                    </tr>
                </thead>
                <tbody>




                    @foreach ($data as $data)




                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->email }}</td>
                        <td><a href="{{ url('/updatefreelancerview',$data->id) }}" style="background-color: rgb(34, 255, 0); color: white; padding: 10px; border: none; cursor: pointer; border-radius: 5px;">Update</a></td>
                        <td><a href="{{ url('/admindeletefreelancer',$data->id) }}" style="background-color: rgb(255, 0, 0); color: white; padding: 10px; border: none; cursor: pointer; border-radius: 5px;">Delete</a></td>
                    </tr>

                    @endforeach



                </tbody>
            </table>


        </div>
    </div>

    <br><br>

</body>
</html>



