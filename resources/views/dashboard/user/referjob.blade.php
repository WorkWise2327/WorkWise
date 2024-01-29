<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Refer Jobs</title>


    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('{{ asset('777.jpg') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

header {
    text-align: center;
    padding: 5px;
    margin-left: 40px;
    margin-right: 40px;
    border-radius: 20px;
    margin-top: 20px;
    background-color: #c4c4c486;
    color: #000000;
}

#company-name {
    font-size: 24px;
    color: #313131;
}

img {
    display: block;
    margin: 20px auto;
    width: 300px;
}

section {
    padding: 20px;
    background-color: #ffffff9c;
    margin: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
}

p {
    color: #555;
}

.savejobbutton,
.savejobbutton2 {
    text-align: center;
}

.savejobbutton input,
.savejobbutton2 input {
    width: 20%;
    padding: 20px;
    margin: 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
}

.savejobbutton input:hover,
.savejobbutton2 input:hover {
    background-color: #4CAF50; /* Change to your desired hover color */
    color: #fff;
}




    </style>

@include('dashboard.user.navbarstyle2')



</head>
<body>
    @include('dashboard.user.navbar')

    <form action="{{ url('/savejobs',$data->id) }}" method="post" enctype="multipart/form-data">
        @csrf


    <header>
        <h1  name="jobTitle">{{ $data->title }}</h1>
        <p id="company-name" name="companyName">{{ $data->name }}</p>
      </header>

      <img name="image" src="{{ asset('comlogo/' . $data->image) }}" alt="Job 1 Image">



      <section>
        <h2>Job Description</h2>
        <p  name="jobDescription" id="jobDescription">{{ $data->description }}</p>
      </section>

      <section>
        <h2>Salary</h2>
        <p name="salary">{{ $data->salary }}</p>
      </section>

      <section>
        <h2>Tags</h2>
        <p  name="tags">{{ $data->tag }}</p>
      </section>

      <section>
        <h2>Job Requirements</h2>
        <p name="jobRequirements">{{ $data->requirement }}</p>
      </section>

      <section>
        <h2>How to Apply</h2>
        <p name="howToApply">{{ $data->apply }}</p>
      </section>


      <div style="text-align: center" class="savejobbutton">
        <input type="submit" value="Save Job" style="width: 20%; padding: 20px; margin: 20px; border-radius: 20px">
      </div>




    </form>


    <form action="{{ url('/applyforjobview',$data->id) }}" method="get" enctype="multipart/form-data">
        @csrf


        <div style="text-align: center" class="savejobbutton2">
            <input type="submit" value="Apply For Job" style="width: 20%; padding: 20px; margin: 20px; border-radius: 20px">
          </div>



    </form>




</body>
</html>
