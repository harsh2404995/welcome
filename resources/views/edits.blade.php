<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-6">
                <h1 style="text-align:center;">Edit Form</h1>
                
                <form method="post" action="/update"  enctype="multipart/form-data">
                    @csrf
                <input type="hidden" name="user" value="{{session()->get('name')}}">
                <input type="hidden" name="id" value={{$data->id}}>
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value={{$data->name}}><br><br>
                    <label>price</label>
                    <input type="text" name="price" class="form-control" value={{$data->price}}><br><br>
                    <label>Category</label>
                    <input type="text" name="category" class="form-control" value={{$data->category}}><br><br>
                    <label>Image</label>
                    <input type="file" name="image" placeholder="Choose image" multiple  accept="image/png, image/jpeg" ><br><br>

                    <input type="submit" value="Update" class="btn btn-primary"> 

                 
                </form>
            </div>
            <div class="col-4">

            </div>
        </div>
    </div>
</body>

</html>