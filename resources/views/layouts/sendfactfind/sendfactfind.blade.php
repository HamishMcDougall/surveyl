


@extends('layouts.app')

@section('content')

<div class="container">

  <!-- take it out of here and create a partal over the top https://www.w3schools.com/howto/howto_js_snackbar.asp -->

  @if(Session::has('flash_message'))
  <div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {!! session('flash_message') !!}
  </div>

  @endif


  <div class="col-xs-12">
    <h1>Email Fact find </h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
    <hr>
  </div>




  <div class="col-xs-12">
    <h2>First Name</h2>
    <h2>Last Name</h2>
    <h2>Email address</h2>
  </div>



  <div class="col-xs-12">

    <div class="dropdown">
      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        Select fact find version
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
        <li><a href="#">Fact find Name 1</a></li>
        <li><a href="#">Fact find Name 2</a></li>
        <li><a href="#">Fact find Name 3</a></li>
      </ul>
    </div>

  </div>


    <div class="col-xs-12">
        Select fact find sections <br>
          <select class="selectpicker" multiple>
          <option>Section 1</option>
          <option>Section 2</option>
          <option>Section 3</option>
        </select>
      </div>



  <div class="col-xs-12">

    <p>Select send date</p>
    <input class="date form-control" type="text" style="width:100px;">

  </div>




  <a href="/home" onclick="window.open('/clientlogin')"; class="btn btn-default pull-right">Save and Continue </a>




  <!-- end container -->
</div>

@endsection

@push('javascript')

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>





<script>
$('.date').datepicker({

  format: 'mm-dd-yyyy'

});
</script>

@endpush
