<style>
 body {
    font-family: 'Josefin Sans', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        background-image: url('{{ asset('bg.jpg') }}'); /* Replace with your image URL */
        background-size: cover; /* Ensure the background image covers the entire body */
        background-position: center; /* Center the background image */
        background-repeat: no-repeat; /* Do not repeat the background image */
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

.container {
    max-width: 600px;
    margin: 100px auto;
    background-color: transparent;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    color: white;
    transition: transform 0.3s ease-in-out;
    font-family: 'Arial', sans-serif; /* Specify the desired font family */
    font-size: 16px; /* Specify the desired font size */
    line-height: 1.5; /* Specify the desired line height */
}

    .container:hover {
        transform: scale(1.02); /* Scale effect on hover */
    }

    .profile-info label {
    font-weight: bold;
    display: block;
    margin-bottom: 10px;
    color: #ddd;
}

.profile-info p {
    margin: 0;
    color: #ccc;
    font-size: 14px; /* Specify the desired font size */
}


    /* Add a border-radius to the container for a softer appearance */
    .container {
        border-radius: 15px;
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
</style>
