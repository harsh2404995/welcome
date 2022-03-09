<html>
	<head>
		<title>History</title>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
<body>

<h1 style="text-align:center;">History Record</h1>
<table class="table table-striped">
<thead >
	<tr>
		<th>Id</th>
		<th>Username</th>
		<th>Name</th>
		<th>Price</th>
		<th>Category</th>
		<th>Image</th>
        <th>Delete</th>
		<th>Edit</th>
	</tr>
<thead>
	<tbody>
	
@foreach($emi as $student)
		<tr>
			<td>{{$student->id}}</td>
			<td>{{$student->user}}</td>
			<td>{{$student->name}}</td>
			<td>{{$student->price}}</td>
			<td>{{$student->category}}</th>
			<td><img src="/image/{{$student->image}}" height=80 width=80></td>
			<td><button class='delete btn btn-primary' value={{$student->id}}>Delete</button></td>
			<td><a href={{"/edit/".$student->id}} class='delete btn btn-success'>Edit</a></td>
		</tr>
@endforeach
	</tbody>
<script>
$(document).ready(function(){
$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': "{{ csrf_token() }}"
		}
	});	
$(document).on("click",".delete",function(){
	
	var id=$(this).val();
	console.log(id);
	$.ajax({
		
		url:"/deleting/"+id,
		type:"post",
		success:function(data)
		{
			
			location.reload();
		}
		
		
	});


});

});
</script>
    
</body>
</html>