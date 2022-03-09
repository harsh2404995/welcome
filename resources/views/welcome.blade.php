<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>

    <style>
 .nn {
    background-color: aliceblue;
}
#pl{
    
color:red;
}
.mmm{
    background-color: black;
    margin-top: 17px;
    padding: 9px;
    border-radius: 17px;
}
.mm{
    margin-left: 23px;
}
    </style>
</head>
<body>


<div class="container"> 
    <div class="row nn">
        <div class="col-6">

        @if(session()->has('user'))

            <p id="pl"> Welcome, {{session()->get('user')}} </p>

        @else
            Guest
        @endif
        </div>

        <div class="col-6">
        <a href="/logout" class="btn btn-success vv float-end">Logout</a>

        </div>
    </div>
</div>

<?php

    $link=mysqli_connect("localhost","root","","practical");

    $disp=mysqli_query($link,"select distinct category from products");
    echo "<div class=container>";
        echo "<div class='d-flex mmm'>";
    while($value=mysqli_fetch_array($disp))
    {
            echo "<div class=mm>";
            echo "<a href='print/$value[category]'style='
            text-decoration:none; color:white;' >".$value["category"]."</a>";
            echo "</div>";
    }
    echo "</div>";
    echo "</div>";
   ?>
</body>
</html>

