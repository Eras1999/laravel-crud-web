<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Update Task Page</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 150px;
            max-width: 600px;
            background-color: white;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .form-control {
            border-radius: 5px;
            box-shadow: none;
            border: 1px solid #ced4da;
            font-size: 1.2rem;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn {
            padding: 10px 20px;
        }

        input[type="submit"], input[type="button"] {
            width: 120px;
        }

        input[type="text"] {
            font-size: 1.2rem;
            height: 45px;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="/updatetasks" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <input type="text" class="form-control" name="task" value="{{$taskdata->task}}" placeholder="Enter your updated task">
        </div>
        <!-- Correct hidden input field for task ID -->
        <input type="hidden" name="id" value="{{$taskdata->id}}"/>
        <div class="text-center">
            <input type="submit" class="btn btn-success" value="Update"/>
            &nbsp;&nbsp;
            <input type="button" class="btn btn-danger" value="Cancel"/>
        </div>
    </form>
</div>

</body>
</html>
