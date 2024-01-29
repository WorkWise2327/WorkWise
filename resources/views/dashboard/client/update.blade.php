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

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #4b4276;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #594f8d;
}

.wrapper .sidebar ul li:hover a{
  color: #fff;
}

.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
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

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-left: 30%;
            margin-top: 5%
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    @include('dashboard.client.navbar')
        <div class="main_content">
            <div class="header">Update Jobs!!</div>






            <form action="{{ url('/updatejob',$data->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>Update Jobs</h2>
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" value="{{ $data->title }}" required>

                <label for="companyName">Company Name</label>
                <input type="text" id="companyName" name="companyName" value="{{ $data->name }}" required readonly>


                <label for="companyLogo">Old Image:</label>
                <img width="250px" src="/comlogo/{{ $data->image }}" alt="" style="margin-bottom: 20px">

                <label for="companyLogo">New Image:</label>
                <input type="file" id="companyLogo" name="image" value="{{ $data->image }}" required>



                <label for="tags">Tags (separated by Commas):</label>
                <input type="text" id="tags" name="tags" value="{{ $data->tag }}" required>

                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription"  required style="width: 100%; height: 150px">{{ $data->description }}</textarea>

                <label for="salary">Salary:</label>
                <input type="text" id="salary" name="salary" value="{{ $data->salary }}" required>

                <label for="jobRequirements">Job Requirements:</label>
                <textarea id="jobRequirements" name="jobRequirements"  required style="width: 100%; height: 150px">{{ $data->requirement }}</textarea>

                <label for="howToApply">How to Apply:</label>
                <textarea id="howToApply" name="howToApply"  required style="width: 100%; height: 150px">{{ $data->apply }}</textarea>

                <input type="submit" value="Save" style="background-color: #45a049; color: white">
            </form>




          </div>
        </div>
    </div>

    <br><br>

</body>
</html>
