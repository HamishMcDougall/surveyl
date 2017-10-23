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

<div class="row" style="padding-bottom:20px;">
  <div class="col-xs-12">
    <div class="wizard">
      <a class="current"><span class="badge">1</span> Set up your fact find questions</a>
      <a href="/settings/design"><span class="badge">2</span> Add your logo and design</a>
      <a href="/settings/preview"><span class="badge badge-inverse">3</span> Preview </a>
  </div>
  </div>
</div>


<div class="col-xs-12">
  <h1>Fact Find Questions</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
<hr>
</div>



<div class="form-group">
  <label for="">Name your fact find</label>
  <input type="text" class="form-control" id="" placeholder="My first fact find">

</div>

<br/>

<div class="row">




  <div class="col-xs-4">

    <ul class="nav nav-pills nav-stacked">
      <li role="presentation" class="active"><a href="#"><span class="glyphicon glyphicon-move " aria-hidden="true"></span> General Info<span class="glyphicon glyphicon-trash pull-right" aria-hidden="true"> </span></a></li>
      <li role="presentation"><a href="#"><span class="glyphicon glyphicon-move" aria-hidden="true"></span> Personal Details<span class="glyphicon glyphicon-trash pull-right" aria-hidden="true"></span> </a></li>
      <li role="presentation"><a href="#"><span class="glyphicon glyphicon-move " aria-hidden="true"></span> Super Ballance<span class="glyphicon glyphicon-trash pull-right" aria-hidden="true"></span> </a></li>
    </ul>

    <button type="button" class="btn btn-default" name="button">+ Add Blank Section</button>


  </div>

  <div class="col-xs-8">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>General Info</h3>
          <!-- headding -->
        </div>
        <!-- body -->
        <div class="panel-body">
          <div class="line-hr">  </div>
          <div class="center-block col-xs-1" style="float: none;"><span class="glyphicon glyphicon-move" aria-hidden="true"></span></div>
            <div class="form-group">
              <label >Q1. This is the first question</label> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              <input type="text"  name="" class="form-control" value="Answer here">
            </div>
        <div class="pull-right">
        <span class="glyphicon glyphicon-trash " aria-hidden="true"></span>
      </div>


          <div class="line-hr"></div>
          <div class="center-block col-xs-1" style="float: none;"><span class="glyphicon glyphicon-move" aria-hidden="true"></span></div>
            <div class="form-group">
              <label >Q2. This is the second question</label> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              <input type="text"  name="" class="form-control" value="Answer here">
            </div>
              <div class="pull-right">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </div>


        </div>
      <!-- end of panel -->
      </div>
<!-- end col-8-->

<a href="/settings/design" class="btn btn-default pull-right">Save and Continue </a>


</div>

<!-- end row -->
</div>


<!-- end container -->
</div>

@endsection

@push('javascript')





@endpush
