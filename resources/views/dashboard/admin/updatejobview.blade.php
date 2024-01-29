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
            <div class="header">Update Jobs</div>

            <form action="{{ url('/adminupdatejob',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>Update Jobs</h2>
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" value="{{ $data->title }}" required>

                <label for="companyName">Company Name</label>
                <input type="text" id="companyName" name="companyName" value="{{ $data->name }}" required readonly>



                



                <label for="tags">Tags (separated by Commas):</label>
                <input type="text" id="tags" name="tags" value="{{ $data->tag }}" required>

                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription" required style="width: 100%; height: 150px">{{ $data->description }}</textarea>

                <label for="salary">Salary:</label>
                <input type="text" id="salary" name="salary" value="{{ $data->salary }}" required>

                <label for="jobRequirements">Job Requirements:</label>
                <textarea id="jobRequirements" name="jobRequirements" required style="width: 100%; height: 150px">{{ $data->requirement }}</textarea>

                <label for="howToApply">How to Apply:</label>
                <textarea id="howToApply" name="howToApply" required style="width: 100%; height: 150px">{{ $data->apply }}</textarea>

                <input type="submit" value="Save" style="background-color: #45a049; color: white">
            </form>




        </div>
    </div>

    <br><br>

</body>
</html>



