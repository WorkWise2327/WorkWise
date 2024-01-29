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
.wrapper .main_content .container {
  background: #fff;
  padding: 30px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease-in-out;
  position: relative;
  overflow: hidden;
}

.wrapper .main_content .container:hover {
  transform: scale(1.02);
}

.wrapper .main_content .container h4 {
  color: #594f8d;
  margin-bottom: 20px;
  font-size: 26px;
}

.wrapper .main_content .container table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.wrapper .main_content .container th, .wrapper .main_content .container td {
  text-align: center;
  padding: 15px;
}

.wrapper .main_content .container th {
  background-color: #594f8d;
  color: #fff;
}

.wrapper .main_content .container td {
  background-color: #f7f7f7;
  transition: background-color 0.3s ease-in-out;
}

.wrapper .main_content .container tr:hover td {
  background-color: #e0e0e0;
}

.wrapper .main_content .container a {
  color: #594f8d;
  text-decoration: none;
  transition: color 0.3s ease-in-out;
}

.wrapper .main_content .container a:hover {
  color: #8c81b3;
  text-decoration: underline;
}

/* Additional modern styling */
.wrapper .main_content .container::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to bottom right, #594f8d, #8c81b3);
  opacity: 0.1;
  z-index: -1;
  border-radius: 10px;
}

.wrapper .main_content .container::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 150%;
  height: 150%;
  background: radial-gradient(ellipse at center, #594f8d 0%, #594f8d 50%, transparent 50%, transparent 100%);
  opacity: 0.2;
  pointer-events: none;
  border: 2px solid #594f8d;
  border-radius: 10px;
  animation: borderAnimation 4s infinite linear;
}

@keyframes borderAnimation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

    </style>
</head>

<body>
    @include('dashboard.client.navbar')
        <div class="main_content">
            <div class="header">Welcome!! Have a nice day.</div>
<br><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                         <h4>Client Dashboard</h4><hr>
                         <table class="table table-striped table-inverse table-responsive">
                             <thead class="thead-inverse">
                                 <tr>
                                     <th>Name</th>
                                     <th>Email</th>
                                     <th>Company</th>
                                     <th>Action</th>
                                 </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <td scope="row">{{ Auth::guard('client')->user()->name }}</td>
                                         <td>{{ Auth::guard('client')->user()->email }}</td>
                                         <td>{{ Auth::guard('client')->user()->company }}</td>
                                         <td>
                                             <a href="{{ route('client.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                             <form action="{{ route('client.logout') }}" id="logout-form" method="post">@csrf</form>
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

    <br><br>

</body>
</html>
