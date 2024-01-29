<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refer Jobs</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: url('{{ asset('bg referjob.jpg') }}') center center fixed;
            background-size: cover;
            color: #333;
        }

        header {
            text-align: center;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            background-color: #3c4c5b;
            color: #fff;
        }

        #company-name {
            font-size: 24px;
            color: #ecf0f1;
        }

        img {
            display: block;
            margin: 20px auto; /* Center the image horizontally */
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }

        section {
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Adjust the alpha value as needed */
    margin: 20px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}


        h2 {
            color: #3c4c5b;
        }

        p {
            color: #555;
            line-height: 1.6;
        }

        .savejobbutton,
        .savejobbutton2 {
            text-align: center;
            margin: 20px;
        }

        .savejobbutton input,
        .savejobbutton2 input {
            background-color: #3c4c5b;
            color: #fff;
            border: none;
            padding: 15px 30px;
            font-size: 16px;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .savejobbutton input:hover,
        .savejobbutton2 input:hover {
            background-color: #ffffff30;
        }
    </style>

    @include('dashboard.user.navbarstyle')

</head>

<body>
    @include('dashboard.user.navbar')

    <form action="{{ url('/deletesavejobs',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf

        <header>
            <h1 name="jobTitle">{{ $data->title }}</h1>
            <p id="company-name" name="companyName">{{ $data->name }}</p>
        </header>

        <img name="image" src="{{ asset('comlogo/' . $data->image) }}" alt="Job 1 Image">

        <section>
            <h2>Job Description</h2>
            <p name="jobDescription" id="jobDescription">{{ $data->description }}</p>
        </section>

        <section>
            <h2>Salary</h2>
            <p name="salary">{{ $data->salary }}</p>
        </section>

        <section>
            <h2>Tags</h2>
            <p name="tags">{{ $data->tag }}</p>
        </section>

        <section>
            <h2>Job Requirements</h2>
            <p name="jobRequirements">{{ $data->requirement }}</p>
        </section>

        <section>
            <h2>How to Apply</h2>
            <p name="howToApply">{{ $data->apply }}</p>
        </section>

        <div class="savejobbutton">
            <input type="submit" value="Delete From Saved Jobs">
        </div>

    </form>

    <form action="{{ url('/applyforjobview',$data->id) }}" method="get" enctype="multipart/form-data">
        @csrf

        <div class="savejobbutton2">
            <input type="submit" value="Apply For Job">
        </div>

    </form>

</body>

</html>
