<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
.kk {
    background-color: aliceblue;
    padding: 11px;
    color: chocolate;
    font-size: 17px;
    font-family: initial;  
} 
    </style>
</head>

<body>

<div  class="kk">
    @if(session()->has('name'))

    <p id="pl"> Welcome, {{session()->get('name')}} </p>

    @else
    Guest
    @endif
    <a href="/log" class="btn btn-success vv float-start">Logout</a>
                <a href="show/{{session()->get('name')}}" class="float-end btn btn-success">Show Form</a><br><br>
</div>
    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-6">
                <h1 style="text-align:center;">Add Form</h1>
               
                <form method="post" action="product"  enctype="multipart/form-data">
                    @csrf
                <input type="hidden" name="user" value="{{session()->get('name')}}">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control"><br><br>
                    <label>price</label>
                    <input type="text" name="price" class="form-control"><br><br>
                    <label>Category</label>
                    <input type="text" name="category" class="form-control"><br><br>
                    <label>Image</label>
                    <input type="file" name="image" placeholder="Choose image" multiple  accept="image/png, image/jpeg"><br><br>

                    <input type="submit" value="save" class="btn btn-primary"> 

                    @if(Session::get('success_status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success_status')}}
                        </div>  
                    @endif
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</body>

</html>