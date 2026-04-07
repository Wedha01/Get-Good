<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Character - Gaming Guide</title>
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
            max-width: 750px;
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
            width: 650px;
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
    <h1>Add Pengumuman</h1>
    <div> 
        @if($errors->any())
        <ul>
            @foreach ($errors ->all() as $error)
            <li>{{$error}}</li>       
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{ route('characters.store') }}" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div>
            <label for="file">Character Image</label>
            <input type="file" name="file"   id="file"/>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description"/>
        </div>
        <div>
            <label for="banner">Banner</label>
            <input type="file" name="banner" id="banner"/>
        </div>
        <div>
            <label for="relic">Relic Image</label>
            <input type="file" name="relic"  id="relic"/>
        </div>
        <div>
            <label for="relicdescription">Relic Description</label>
            <input type="text" name="relicdescription"  id="relicdescription" placeholder="Description"/>
        </div>
        <div>
            <label for="relic2">2pcs Image</label>
            <input type="file" name="relic2"  id="relic2"/>
        </div>
        <div>
            <label for="relicdescription">Relic Description 2pcs</label>
            <input type="text" name="relicdescription2pcs"  id="relicdescription2pcs" placeholder="Description"/>
        </div>
        <div>
            <label for="planetarysetdescription">planetaryset Description</label>
            <input type="text" name="planetarysetdescription"  id="planetarysetdescription" placeholder="Relic Description"/>
        </div>
        <div>
            <label for="planetaryset">Planetary Set Image</label>
            <input type="file" name="planetaryset"  id="planetaryset"/>
        </div>
        <div>
            <label for="lightcone">Lightcone Image</label>
            <input type="file" name="lightcone"  id="lightcone"/>
        </div>
        <div>
            <label for="lightconedescription">lightcone Description</label>
            <input type="text" name="lightconedescription" id="lightconedescription" placeholder="lightcone Description"/>
        </div>
        <div>
            <input type="submit" value="Save Character"/>
        </div>
    </form>
    </html>