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
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  width: 500px;
  margin-left: 30%;
  margin-top: 5%;
  transition: transform 0.3s ease-in-out;
}

form:hover {
  transform: scale(1.02);
}

form h2 {
  margin-bottom: 20px;
  font-size: 26px;
  background: linear-gradient(to right, #594f8d, #8c81b3);
  -webkit-background-clip: text;
  color: transparent;
  font-weight: bold;
}

label {
  display: block;
  margin-bottom: 8px;
  font-weight: bold;
}

input,
select,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #594f8d;
  color: white;
  padding: 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #8c81b3;
}
    </style>
</head>

<body>

    @include('dashboard.client.navbar')

        <div class="main_content">
            <div class="header">Add Jobs!!</div>






            <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2>Add Jobs</h2>
                <label for="jobTitle">Job Title:</label>
                <input type="text" id="jobTitle" name="jobTitle" required>

                <label for="companyName">Company Name</label>
                <input type="text" id="companyName" name="companyName" value="{{ Auth::guard('client')->user()->company }}" required readonly>




                <label for="companyLogo">Image:</label>
                <input type="file" id="companyLogo" name="image" required>



                <label for="tags">Tags (separated by Commas):</label>
                <input type="text" id="tags" name="tags" required>

                <label for="jobDescription">Job Description:</label>
                <textarea id="jobDescription" name="jobDescription" required style="width: 100%; height: 150px"></textarea>

                <label for="salary">Salary:</label>
                <input type="text" id="salary" name="salary" required>

                <label for="jobRequirements">Job Requirements:</label>
                <textarea id="jobRequirements" name="jobRequirements" required style="width: 100%; height: 150px"></textarea>

                <label for="howToApply">How to Apply:</label>
                <textarea id="howToApply" name="howToApply" required style="width: 100%; height: 150px"></textarea>

                <input type="submit" value="Save" style="background-color: #45a049; color: white">
            </form>




          </div>
        </div>
    </div>

    <br><br>

</body>
</html>
