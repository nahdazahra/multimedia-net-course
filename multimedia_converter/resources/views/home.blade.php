<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multimedia Converter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home')}}">Multimedia Converter</a>
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-3 mx-auto">
      <a href="{{ route('image.index') }}" class="btn btn-primary btn-block">Image</a>
    </div>
    <div class="col-3 mx-auto">
      <a href="{{ route('audio.index') }}" class="btn btn-primary btn-block">Audio</a>
    </div>
    <div class="col-3 mx-auto">
      <a href="{{ route('video.index') }}" class="btn btn-primary btn-block">Video</a>
    </div>
  </div>
</div>

</body>
</html>
