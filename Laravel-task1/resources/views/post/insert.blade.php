<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.save')}}" method="post">
        
        {{csrf_field()}}
        
        <label for="">Employee Name: </label>
        <input type="text" name="emp_name">
        <br>
        <label for="">Employee Salary: </label>
        <input type="number" name="emp_salary">
        <br>
        <label for="">Employee City: </label>
        <input type="text" name="emp_city">
        <br>
        <button>Submit</button>
        <br>
        <br>
        <a href="{{route('post.list')}}">List Employees</a>
    </form>
</body>
</html>