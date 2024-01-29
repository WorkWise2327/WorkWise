<style>
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
