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
  <h1>New Client</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
<hr>
</div>


<div class="form-group">
  <label for="">First Name</label>
  <input type="text" class="form-control" id="" placeholder="First Name">
</div>

<div class="form-group">
  <label for="">Last Name</label>
  <input type="text" class="form-control" id="" placeholder="Last Name">
</div>

<div class="form-group">
  <label for="">Email Address</label>
  <input type="text" class="form-control" id="" placeholder="Email Address">
</div>





<hr>
<a href="/home" class="btn btn-default pull-right">Save and Continue </a>


<!-- end container -->
</div>

@endsection

@push('javascript')





@endpush
