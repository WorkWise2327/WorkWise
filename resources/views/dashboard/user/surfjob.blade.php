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
            background-image: url('{{ asset('23.webp') }}'); /* Replace with your image URL */
                background-size: cover; /* Ensure the background image covers the entire body */
                background-position: center; /* Center the background image */
                background-repeat: no-repeat; /* Do not repeat the background image */
        }





        .job-box {
          border: 1px solid #ccc;
          flex: 0 0 calc(33.3333% - 40px);
          border-radius: 8px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
          margin: 20px;
          padding: 20px;
          width: 200px;
          height: 250px
          box-sizing: border-box;
          text-align: center;
        }

        .job-box img {
          width: 100%;
          height: 230px;
          border-radius: 4px;
        }

        .job-box h3 {
          margin-top: 10px;
          color: #ffffff;
        }

        .job-box p{
            color: white;
        }

        a {
            margin-top: 20px;
            font-size: 20px;

        }

       

        .navbar {
        background-color: #333;
        overflow: hidden;
        display: inline-block;
        width: 100%;
        height: 80px;
    }

    .navbar a {
        float: left;
        display: inline-block;
        color: white;
        font-size: 14px;
        text-align: center;
        margin-top: 14px;
        padding: 14px 16px;
        text-decoration: none;
    }

    .navbar a:hover {
        background-color: #333;
        border-radius: 15px;
        color: rgb(255, 170, 0);
    }

    .navbar a.active-link {
    background-color: #333;
    border-radius: 15px;
    color: rgb(141, 141, 141);
}

.navbar a.active-link:hover {
    background-color: #333; /* Set the background color for the active link */
    border-radius: 15px;
    color: rgb(141, 141, 141); /* Set the text color for the active link */
}

    .logout-btn-container {
    float: right;
    display: inline-block;
}

.logout-btn-container a {
    float: none;
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.logout-btn-container a:hover {
    background-color: #333;
    color: rgb(255, 170, 0);
}

        </style>


</head>




<body>



    @include('dashboard.user.navbar')






      @foreach ($data as $data)




    <div class="job-box">
        <img src="{{ asset('comlogo/' . $data->image) }}" alt="Job 1 Image">
        <a href="{{ url('/moveto',$data->id) }}">{{ $data->title }}</a>
        <p>Salary: {{ $data->salary }}</p>
      </div>


      @endforeach








</body>
</html>
