<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Work Wise - Freelancing Platform</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'Figtree', sans-serif;
            margin: 0;
            line-height: 1.5;
            background: url('{{ asset('5590457.jpg') }}') center/cover no-repeat fixed; /* Fixed background */
            display: flex;
            justify-content: center;
            min-height: 100vh;
            color: #fff; /* Text color to contrast with the background */
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;

        }

        .title-work {
    text-align: center;
    font-size: 50px;
    margin-top: 10px;
    color: rgba(186, 186, 186, 0.9);
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8); /* Subtle text shadow */
}

        .box {
            width: 300px;
            padding: 20px;
            margin-right: 20px;
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: rgba(186, 186, 186, 0.9); /* Semi-transparent white background */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .box:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .box h2 {
            margin-bottom: 10px;
            color: #333;
            font-size: 22px;
        }

        .box p {
            margin-bottom: 20px;
            color: #666;
            font-size: 16px;
        }

        .box button {
            padding: 12px 24px;
            background-color:rgba(60,76,91,255);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .box button:hover {
            background-color: #63707cc6;
        }

        footer {
            background-color: #181e24;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

        <div class="title-work">
            <h1>Work Wise</h1>
        </div>

        <!-- Box for Admin -->
        <div class="container">
            <div class="box">
                <h2>For Admins</h2>
                <p>Manage your freelancing platform effortlessly.</p>
                <button onclick="window.location.href = '{{ route('admin.login') }}'">Admin Login</button>
            </div>

            <!-- Box for Clients -->
            <div class="box">
                <h2>For Clients</h2>
                <p>Hire talented freelancers for your projects.</p>
                <button onclick="window.location.href = '{{ route('client.login') }}'">Client Login</button>
            </div>

            <!-- Box for Freelancers -->
            <div class="box">
                <h2>For Freelancers</h2>
                <p>Showcase your skills and find exciting projects.</p>
                <button onclick="window.location.href = '{{ route('user.login') }}'">Freelancer Login</button>
            </div>
        </div>

    </div>

    <!-- Footer section -->
    <footer>
        <p>&copy; 2024 Workwise Website. All rights reserved.</p>
    </footer>


</body>
</html>
