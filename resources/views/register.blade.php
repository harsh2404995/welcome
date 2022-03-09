<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-6">
                <h1 style="text-align:center;">Register Form</h1>
			  <a href="admi" style="text-decoration:none; float:right;">Admin Login Here</a>
               <form method="post" action="registers">
                   @csrf
                    <input type="text" name="name" class="form-control" placeholder="Enter Name"><br>
                    
                    <div class="alert-danger">{{$errors->first("name")}}</div>
	              
                    <input type="text" name="email" class="form-control" placeholder="Enter Email"><br>
                    <div class="alert-danger">{{$errors->first("email")}}</div>
                    
                    <input type="password" name="password" class="form-control" placeholder="Enter Password"><br>
                    <div class="alert-danger">{{$errors->first("password")}}</div>
                    <input type="radio" name="r1[]" value="male">male
                    <input type="radio" name="r1[]" value="male">female<br><br>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Address" name="address"></textarea><br><br>
                    <div class="alert-danger">{{$errors->first("address")}}</div>
                    <input type="submit" value="Register" class="btn btn-success"><br><br>
                    @if(Session::get('register_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('register_status')}}

                            </div>  
                    @endif
                    <a href="registers" style="text-decoration:none;">Login Here</a>
            </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</body>
</html>