<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body,
    html {
        margin: 0;
        padding:0;
        height:100%;

    }

    .container {
        display: flex;
        height:100%;

    }
    .sidebar {
        flex: 0 0 250;
        background-color: #333;
        color: #fff;
    }

    .sidebar ul{
        list style:none;
        padding: 0;
    }

    .sidebar ul li {
        color: #fff;
        text-decoration:none;

    }

    .sidebar ul li a:hover {
        background-color: #555;
    }

    .content {
        flex: 1;
        padding: 20px;
    }

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<body>



<div class="container">
    <nav class="sidebar">
        <ul>
            <li><a href="">Dashboard</a></li>
            <li><a href="">Category</a></li>
            <li><a href="">Products</a></li>
            <li><a href="">Logout</a></li>
        </ul>
    </nav>

    <main class = "content" >
        @yield('content')
</main>
</div>




</body>
</html>