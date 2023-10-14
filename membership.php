<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membership</title>
</head>
<link rel="stylesheet" href="css/style.css">
<style>
    body{
        font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        color: white;
        margin: 0px;
        padding: 0px;
        background:url('img/bg3.jpg');
    }
    .left {
        position: absolute;
        left: 60px;
        top: 20px;
    /*border: 2px solid red;*/
    }
    .left img {
        width: 90px;
        filter: invert(100%);
    }
    .left div {
        text-align: center;
    }
    .mid {
        display: block;
        width: 33%;
        margin: 20px auto;
       /* border: 2px solid green;*/
    }
    .right {
        position: absolute;
        right: 34px;
        top: 20px;
       /* border: 2px solid yellow;*/
    }
    .navbar {
        display: inline-block;
    }
    .navbar li{
        display: inline-block;
        font-size: 20px;
    }
    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 20px 10px;
    }
    .navbar li a:hover, .navbar li a.active {
       text-decoration: underline;
       color: grey;
    }
    .btn {
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 14px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 16px;
        cursor:pointer;
    }
    .btn:hover {
        background-color:rgb(59, 41, 41);
    }
    .container {
        border: 2px solid green;
         margin: 80px 60px;
         padding: 60px 36px;
         border-color: white;
         border-radius: 10px;
         width: 38%;
    }
    .form-group input {
        text-align:center;
        display:block;
        border-radius: 10px;
        width: 68%;
        padding: 10px;
        font-size: 15px;
        margin: 11px auto;
    }
.container h1 {
    text-align: center;
}
.container button {
    display: block;
    width: 23%;
    margin:3px auto;

}
    </style>
<body>
    <div class="container">
    <h1>Do you want to take the membership?</h1>
    <form action="plan.php" method="POST">
        <div>
        <input type="text" name="username" placeholder="enter your username" id="password">
        </div><br>
        <div>
            <input type="password" name="password" placeholder="enter you password" id="password">
        </div><br>
            <button class="btn">view plans</button>
    </form>
    </div>
</body>
</html>