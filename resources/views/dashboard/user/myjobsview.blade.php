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
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('business-people-casual-meeting.jpg') }}'); /* Replace with your image URL */
        background-size: cover; /* Ensure the background image covers the entire body */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Do not repeat the background image */
        }

        header {
            background-color: #343a40;
            color: white;
            padding: 10px;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #343a40;
            color: white;
        }

        tbody {
    background-color: #7878783a;
    color: rgb(0, 0, 0);
}

tbody tr {
    background-color: #7878783c; /* Set the background color for all rows */
    color: rgb(0, 0, 0);
}

tbody tr:hover {
    background-color: #7d7d7d;
}

        .table-container {
            margin: 20px;
        }

        h2 {
            color: #ffffff;
        }

        a {
            color: #000000;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
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

    <div class="table-container">
        <h2>My Jobs</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Job Company</th>
                        <th>CV</th>
                        <th>Cover Letter</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td style="background-color: #a2a2a275; color: black;">{{ $item->title }}</td>
                            <td style="background-color: #a2a2a275; color: black;">{{ $item->name }}</td>
                            <td style="background-color: #a2a2a275; color: black;"><a href="{{ asset('cv/' . $item->cv) }}" target="_blank">Download CV</a></td>
                            <td style="background-color: #a2a2a275; color: black;"><a href="{{ asset('cover/' . $item->cover) }}" target="_blank">Download Cover Letter</a></td>
                            <td style="background-color: #a2a2a275; color: black;">{{ $item->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 Workwise Freelancer Dashboard. All rights reserved.</p>
    </footer>

</body>
</html>
