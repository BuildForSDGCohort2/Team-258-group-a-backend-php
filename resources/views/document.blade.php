<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title> Documents Upload</title>
    <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
          <h3 class="text-center mb-5">Upload Document to Fumana</h3>
            {{ csrf_field() }}
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif
           <label>Insert your profile picture</label>
           <div><input type="file"  name="profile_pic"> </div><br/>  
           <div><button type="submit">Upload </button></div><br>
			
			<label>Insert your id document</label>
			<div><input type="file" name="id_doc"> </div><br/>  
           <div><button type="submit">Upload </button></div><br>
			
			<label>Insert your qualification</label>
			<div><input type="file" name="qualification"> </div><br/>  
           <div><button type="submit">Upload </button></div><br>
        </form>
    </div>

</body>
</html>