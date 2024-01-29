<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Freelancer Dashboard | Apply for Job</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
    <style>
        /* Your existing styles remain here */

        .form-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-container label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .form-container input,
        .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-container button {
            background-color: #333;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <a href="{{ url('/surf') }}" class="search-jobs">Back</a>
    </div>

    <div class="form-container">
        <form action="{{ url('/applyjob') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="profile-info" style="display: none">
                <label for="name">User ID:</label>
                <input type="text" id="userid" name="userid" value="{{ Auth::guard('web')->user()->id }}" readonly required>
            </div>

            <div class="profile-info">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required value="{{ Auth::guard('web')->user()->name }}" readonly>
            </div>

            <div class="profile-info">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="{{ Auth::guard('web')->user()->email }}" readonly>
            </div>

            <div class="profile-info" style="display: none">
                <label for="name">Job ID:</label>
                <input type="text" id="jobid" name="jobid" value="{{ $data->id }}" readonly required>
            </div>

            <div class="profile-info">
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" value="{{ $data->title }}" readonly required>
            </div>

            <div class="profile-info">
                <label for="jobCompany">Job Company:</label>
                <input type="text" id="jobCompany" name="jobCompany" value="{{ $data->name }}" readonly required>
            </div>

            <div class="profile-info">
                <label for="cv">CV:</label>
                <input type="file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
            </div>

            <div class="profile-info">
                <label for="cover">Cover Letter:</label>
                <input type="file" id="cover" name="cover" accept=".pdf,.doc,.docx" required>
            </div>

            <button type="submit">Apply for Job</button>
        </form>
    </div>

</body>

</html>
