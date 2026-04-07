<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Event - Gaming Guide</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #ffffff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 30px;
        }
        form {
            max-width: 350px;
            margin: 0 auto;
            padding: 20px;
            background-color: #2c2c2c;
            border-radius: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="file"] {
            width: auto;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #555;
            border-radius: 5px  ;
            background-color: #333;
            color: #ffffff;
        }
        input[type="submit"] {
            background-color: #e68900;
            color: #ffffff;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #ff9900;
        }
    </style>
</head>
<body>
    <h1>Add Event</h1>
    <div> 
        @if($errors->any())
        <ul>
            @foreach ($errors ->all() as $error)
            <li>{{$error}}</li>       
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('events.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label for="file">Event/Minievent</label>
            <input type="file" name="file" id="file"/>
        </div>
        <div>
            <label for="description">Event Type</label>
            <input type="string" name="event_type" id="event_type" placeholder="Type"/>
        </div>
        <div>
            <label for="relic">Description</label>
            <input type="text" name="description" id="description" placeholder="Description"/>
        </div>
        <div>
            <input type="submit" value="Save Event"/>
        </div>
    </form>
</body>
</html>