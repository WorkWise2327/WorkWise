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


.main_content table {
  width: 95%;
  border-collapse: collapse;
  margin-top: 20px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  border-radius: 10px;
}

.main_content th,
.main_content td {
  padding: 15px;
  border: 1px solid #ddd;
  text-align: left;
}

.main_content th {
  background-color: #594f8d;
  color: #fff;
}

.main_content tbody {
  max-height: 500px;
  overflow-y: auto;
}

.main_content tbody tr {
  height: 80px;
  transition: background-color 0.3s ease-in-out;
}

.main_content tbody tr:hover {
  background-color: #f5f5f5;
}

.main_content img {
  max-width: 100%;
  height: auto;
  border-radius: 5px;
}

.main_content a {
  display: inline-block;
  padding: 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;
}

.main_content a:hover {
  background-color: #8c81b3;
  color: white;
}
    </style>
</head>

<body>
    @include('dashboard.client.navbar')
        <div class="main_content">
            <div class="header">Reveiw Jobs!!</div>

                <table class="table" style="margin: 20px">
                    <thead>
                        <tr>
                            <th>Job Title</th>
                            <th>Company Name</th>
                            <th style="width: 120px">Image</th>
                            <th>Tags</th>
                            <th>Description</th>
                            <th>Salary</th>
                            <th>Job Requirement</th>
                            <th>How to Apply</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>


                        @foreach ($data as $data)


                        <tr>
                            <td>{{ $data->title }}</td>
                            <td>{{ $data->name }}</td>
                            <td><img src="{{ asset('comlogo/' . $data->image) }}" alt="Job 1 Image"></td>
                            <td>{{ $data->tag }}</td>
                            <td>{{ $data->description }}</td>
                            <td>{{ $data->salary }}</td>
                            <td>{{ $data->requirement }}</td>
                            <td>{{ $data->apply }}</td>
                            <td><a href="{{ url('/updateview',$data->id) }}" style="background-color: rgb(34, 255, 0); color: white; padding: 10px; border: none; cursor: pointer; border-radius: 5px;">Update</a></td>
                            <td><a href="{{ url('/delete',$data->id) }}" style="background-color: rgb(255, 0, 0); color: white; padding: 10px; border: none; cursor: pointer; border-radius: 5px;">Delete</a></td>
                        </tr>

                        @endforeach


                    </tbody>
                </table>
            </div>





          </div>
        </div>
    </div>

    <br><br>

</body>
</html>
