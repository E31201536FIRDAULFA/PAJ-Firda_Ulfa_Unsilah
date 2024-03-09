
<!DOCTYPE html>
<html lang="en">
<head>
<h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
   
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/4.5.2-bootstrap.min.css">

    <style>
        /* Custom CSS to center the form */
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .margin-top{
            margin-top: 180px;
        }

        /* Custom CSS for the side image */
        .side-image {
            background-image: url('your-image-url.jpg'); /* Replace 'your-image-url.jpg' with the actual image URL */
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
    </style>
</head>
<head>
 <title>Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 
</head>
<body>
 <div class="row">
 <div class="container">
 <h2 class="text-center my-5">Tutorial Laravel #30 : Membuat Upload File Dengan Laravel</h2>
 
 <div class="col-lg-8 mx-auto my-5"> 
 
 @if(count($errors) > 0)
 <div class="alert alert-danger">
 @foreach ($errors->all() as $error)
 {{ $error }} <br/>
 @endforeach
 </div>
 @endif
 
                <form action="/upload/proses" method="POST" enctype="multipart/form-data">

                {{ csrf_field() }}
                
                <div class="form-group">
                <b>File Gambar</b><br/>
                <input type="file" name="file">
                </div>
                
                <div class="form-group">
                <b>Keterangan</b>
                <textarea class="form-control" name="keterangan"></textarea>
                </div>
                
                <input type="submit" value="Upload" class="btn btn-primary">
                </form>
                </div>
                </div>
                </div>
       
            <script src="js/jquery-3.5.1.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    
    </body>
    </html>


