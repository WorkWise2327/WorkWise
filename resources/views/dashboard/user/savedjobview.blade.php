<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freelancer Dashboard | Home</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">

    <style>
body {
    display: flex;
    flex-wrap: wrap;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-image: url('{{ asset('2.jpg') }}'); /* Replace with your image URL */
        background-size: cover; /* Ensure the background image covers the entire body */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Do not repeat the background image */
}

header {
    background-color: #343a40;
    color: #ffffff;
    padding: 20px;
    text-align: center;
    font-size: 1.8rem;
}

.job-box {
    border: 1px solid #ced4da;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin: 20px;
    padding: 15px;
    width: 250px;
    box-sizing: border-box;
    text-align: center;
    background-color: #ffffff22;
    transition: transform 0.3s ease-in-out;
}

.job-box:hover {
    transform: translateY(-5px);
}

.job-box img {
    width: 100%;
    height: 150px;
    border-radius: 10px;
    object-fit: cover;
}

.job-box h3 {
    margin-top: 15px;
    color: #ffffff;
    font-size: 1.2rem;
    font-weight: bold;
}

.job-box p {
    color: #ffffff;
    font-size: 1rem;
    margin: 10px 0;
}

a {
    display: inline-block;
    margin-top: 15px;
    padding: 10px 20px;
    font-size: 1rem;
    color: #ffffff;
    text-decoration: none;
}
.job-box a{
    border-radius: 5px;
    background-color: #3c4c5b;
    transition: #3c4c5b 0.3s ease-in-out;
}

a:hover {
    background-color: #ffffff30;
    color: white;
}

footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }


    </style>

@include('dashboard.user.navbarstyle')



</head>

<body>

    @include('dashboard.user.navbar')




    {{--  <form action="{{ url('/deletesavejobs',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf --}}


    @foreach ($data as $data)




    <div class="job-box">
        <img src="{{ asset('comlogo/' . $data->image) }}" alt="Job 1 Image">
        <a href="{{ url('/movetosaved',$data->id) }}">{{ $data->title }}</a>
        <p>Salary: {{ $data->salary }}</p>

      </div>


      @endforeach

    {{-- </form> --}}

    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 Workwise Freelancer Dashboard. All rights reserved.</p>
    </footer>


</body>
</html>
