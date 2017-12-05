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
      <a class="current" href="/settings/layout"><span class="badge">2</span> Set up your fact find questions</a>
      <a href="/settings/design" ><span class="badge">3</span> Add your logo and design</a>
      <a href="/settings/preview"><span class="badge badge-inverse">4</span> Preview </a>
  </div>
  </div>
</div>

<div class="row">
<div class="col-xs-12">
  <h1>Fact Find Questions</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
<hr>
</div>
</div>






<div class="row">





    <div id="vueApp">
        <example-component></example-component>
    </div>





<!-- end row -->
</div>


<!-- end container -->
</div>

@endsection

@push('javascript')





@endpush
