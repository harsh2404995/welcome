<html>
	<head>
		<title>History</title>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .ll{
            border: 1px solid coral;
    text-align: center;
    margin-left: 35px;
    background-color: cornsilk;
    padding: 21px;
    color: brown;
    font-size: 16px;
    font-family: cursive;
    border-radius: 16px;
        }
        .oo{
            border-bottom-color: cornflowerblue;
    border-bottom-width: 1px;
    border-bottom-style: inherit;
    padding-top: 9px;
        }
    </style>
    </head>
<body>
<h1 style="text-align:center; color:orange">Show Record</h1>


<div class="container">
    
    
<a href="/welcomes" style="text-decoration:none;" class="btn btn-success float-end">Back</a>

    <div class="d-flex" style="flex-wrap:wrap;">
@foreach($emi as $student)
		

		<div class="ll mb-4" >
            
			<img src="/image/{{$student->image}}" height=100 width=120>
            <p class="oo">Name:-{{$student->name}}</p>
			<p class="oo">Price:-{{$student->price}}</p>
			<p class="oo">Category:-{{$student->category}}</p>

         </div>
	
@endforeach

<div>	
</div>	
</body>
</html>