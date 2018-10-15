<!DOCTYPE html>
<html lang="en">
<head>
  <title>Multimedia Converter</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- daterange picker -->
    <link rel="stylesheet" href="{{URL::asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="{{URL::asset('plugins/datepicker/datepicker3.css')}}">
    <link rel="stylesheet" href="{{URL::asset('plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{URL::asset('plugins/iCheck/all.css')}}">
    <!-- Bootstrap time Picker -->
	<link rel="stylesheet" href="{{URL::asset('plugins/timepicker/bootstrap-timepicker.min.css')}}">
	<!-- Select -->
	<link rel="stylesheet" href="{{URL::asset('plugins/select2/select2.min.css')}}">
    <!-- sweet alert css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.5/sweetalert2.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Multimedia Converter</a>
    </div>
  </div>
</nav>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <form action="{{ route('image.download') }}" method="post">
              {{csrf_field()}}
              <input class="hidden" type="text" value="{{ $message['filename'] }}" name="file_download">
              <label>{{ $message['message'] }} </label> 
              <button class="btn btn-primary" type="submit">Download</button>
            </form>
          </div>
        @endif
        @if ($message = Session::get('error'))
          <div class="alert alert-danger">
            <p>{{ $message }}</p>
          </div>
        @endif
        <div class="box-header with-border">
          <h3 class="box-title">Upload Image</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" enctype="multipart/form-data" method="POST" role="form" action="{{ route("image.convert") }}" onclick="getdate()">

            <div class="box-body">
              {{csrf_field()}} 
              <div class="form-group"> 
                <label>Upload Image</label> 
                <input type="file" name="nama_image" required=""> 
              </div>               

            <div class="form-group"> 
              <label>Pilih Format</label> 
              
            <select class="form-control" name="formatImage">
              <option disabled selected value><b>-- Pilih Menu Dibawah --</b></option>
              <option value="bmp">bmp</option>
              <option value="jpg">jpg</option>
              <option value="tiff">tiff</option>
              <option value="png">png</option>
              <option value="ppm">ppm</option>
              <option value="apng">apng</option>
              <option value="dpx">dpx</option>
              <option value="pam">pam</option>
              <option value="pbm">pbm</option>
              <option value="pcx">pcx</option>
              <option value="pgm">pgm</option>
              <option value="xbm">xbm</option>
              <option value="xface">xface</option>
              <option value="xwd">xwd</option>

            </select>
            </div>

            <div class="form-group">
              <label>Width Image</label>
              <input class="form-control" placeholder="Width" name="width" required="">
            </div>

            <div class="form-group">
              <label>Height Image</label>
              <input class="form-control" placeholder="Height" name="height" required="">
            </div>

            <div class="form-group">
              <label>Depth</label>
              <input class="form-control" placeholder="depth" name="depth" required="">
            </div>

            <div class="form-group">
              <label>Conversion Rate</label>
              <input class="form-control" placeholder="conversion" name="conversion" required="">
            </div>

            <div class="form-group"> 
              <label>Colorspace</label> 
              
            <select class="form-control" name="colorspace">
              <option disabled selected value><b>-- Pilih Menu Dibawah --</b></option>
              <option value="Gray">Grayscale</option>
              <option value="RGB">RGB</option>
            </select>
            </div>
        </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!--/.col (right) -->
  </div>
  <!-- /.row -->
</section>

<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../plugins/datepicker/bootstrap-datepicker.js"></script>

</body>