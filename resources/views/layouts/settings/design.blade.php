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
      <a href="/settings/factfind"><span class="badge">1</span> Name your fact find</a>
      <a href="/settings/layout"><span class="badge">2</span> Set up your fact find questions</a>
      <a class="current"><span class="badge">3</span> Add your logo and design</a>
      <a href="/settings/preview"><span class="badge badge-inverse">4</span> Preview </a>
  </div>
</div>



<div class="col-xs-12">
  <h1>Design</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
<hr>
</div>



<div class="row">


  <div class="col-xs-10 ">


    <div class="panel panel-default">
    				<div class="panel-heading"><strong>Upload your logo</strong> <small> </small></div>
    				<div class="panel-body">
    <div class="input-group image-preview">
						<input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">
						<!-- don't give a name === doesn't send on POST/GET -->
						<span class="input-group-btn">
						<!-- image-preview-clear button -->
						<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>
						<!-- image-preview-input -->
						<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>
							<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
							<!-- rename it -->
						</div>
						<button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>
						</span> </div>
					<!-- /input-group image-preview [TO HERE]-->

					<br />

					<!-- Drop Zone -->
					<div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>
					<br />
					<!-- Progress Bar -->
					<div class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>
					</div>

      </div>
    </div>

    				<strong>Pick your color</strong> <small> </small>


                <div id="cp2" class="input-group colorpicker colorpicker-component col-xs-3">

                  <input type="text" value="#00AABB" class="form-control" />
                    <span class="input-group-addon"><i></i></span>





            </div>
</div>

  </div>


  <a href="/settings/preview" class="btn btn-default pull-right">Save and Continue </a>

<!-- end col-8-->
</div>

<!-- end row -->
</div>


<!-- end container -->
</div>

@endsection

@push('javascript')





  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>


<script>

  $('.colorpicker').colorpicker();

</script>



@endpush
