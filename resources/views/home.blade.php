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


  <h2>Welcome, {{ Auth::user()->name }}</h2>
  <div class="btn-group btn-group-sm paddingBase">
    <a href="/newclient" class="btn btn-default btn-block">New Client</a>
  </div>


      <div class="panel panel-default">
        <div class="panel-heading">
          <!-- search -->
          <div class="row">
            <div class="col-xs-12 centerText">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-describedby="basic-addon2" >
                <span class="input-group-addon" id="basic-addon2">Search</span>
              </div>
            </div>
          </div>
        </div>
        <!-- body -->
        <div class="panel-body">


          <ul class="nav nav-tabs nav-justified">
            <li class="active"><a data-toggle="pill" href="#clients">Clients <span class="badge">1</span></a></li>
            <li><a data-toggle="pill" href="#completed">Completed <span class="badge badge-success">1</span></a></li>
          </ul>

          <div class="tab-content">
            <div id="clients" class="tab-pane fade in active">
              <!-- client tab -->
                <div class="row">
                  <div class="col-xs-3">
                    <strong>Name</strong>
                  </div>
                  <div class="col-xs-3">
                    <strong>Email</strong>
                  </div>
                  <div class="col-xs-2">
                    <strong>D.O.B</strong>
                  </div>
                  <div class="col-xs-2">
                   <strong>Actions</strong>
                  </div>
                  <div class="col-xs-2">
                   <strong>Status</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-3">
                    <a href="/view/clientname">Joe Smith</a>
                  </div>
                  <div class="col-xs-3">
                    JoeSmith@gmail.com
                  </div>

                  <div class="col-xs-2">
                    12/11/1970
                  </div>
                  <div class="col-xs-2">
                    <!--<a href="#" data-toggle="tooltip" title="View Fact Find"><span class="glyphicon  glyphicon-eye-open" aria-hidden="true"></span></a>-->
                    <a href="/sendfactfind" data-toggle="tooltip" title="Email Fact Find"><span class="glyphicon  glyphicon-envelope" aria-hidden="true"></span></a>
                    <a href="#" data-toggle="tooltip" title="Export to TAC"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span></a>
                  </div>
                  <div class="col-xs-2">
                      <span class="glyphicon  glyphicon glyphicon-check" aria-hidden="true"></span>
                        <span> Email sent</span>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-3">
                    <a href="/view/clientname">Richard Jones</a>
                  </div>

                  <div class="col-xs-3">
                    R.Jones@gmail.com
                  </div>

                  <div class="col-xs-2">
                    16/11/1975
                  </div>
                  <div class="col-xs-2">
                    <!--<a href="#" data-toggle="tooltip" title="View Fact Find"><span class="glyphicon  glyphicon-eye-open" aria-hidden="true"></span></a>-->
                    <a href="/sendfactfind" data-toggle="tooltip" title="Email Fact Find"><span class="glyphicon  glyphicon-envelope" aria-hidden="true"></span></a>
                    <a href="#" data-toggle="tooltip" title="Export to TAC"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span></a>
                  </div>
                  <div class="col-xs-2">
                      <span class="glyphicon  glyphicon glyphicon-check" aria-hidden="true"></span>
                        <span> 50% complete</span>
                  </div>
                </div>


                <!-- client tab -->
            </div>
            <div id="completed" class="tab-pane fade">
              <!-- completed tab -->

              <div class="row">
                <div class="col-xs-3">
                  <strong>Name</strong>
                </div>
                <div class="col-xs-3">
                  <strong>Email</strong>
                </div>
                <div class="col-xs-2">
                  <strong>D.O.B</strong>
                </div>
                <div class="col-xs-2">
                 <strong>Actions</strong>
                </div>
                <div class="col-xs-2">
                 <strong>Completed</strong>
                </div>
              </div>

              <div class="row">
                <div class="col-xs-3">
                <a href="/view/clientname">Hamish McDougall</a>
                </div>
                <div class="col-xs-3">
                  hamish.mcdougall@tal.com.au
                </div>
                <div class="col-xs-2">
                  12/11/1976
                </div>
                <div class="col-xs-2">

                  <a href="#" data-toggle="tooltip" title="Download PDF"><span class="glyphicon glyphicon-save-file" aria-hidden="true"></span></a>
                  <a href="#" data-toggle="tooltip" title="Export to TAC"><span class="glyphicon glyphicon-transfer" aria-hidden="true"></span></a>
                  <a href="#" data-toggle="tooltip" title="Export to Xplan"><span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span></a>
                </div>
                <div class="col-xs-2">
                    15/11/2017
                </div>
              </div>
              <!-- completed tab -->
            </div>

          </div>

        </div>
      <!-- end of panel -->
      </div>

      <!-- setting -->
  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>  <a href="/settings/layout">Settings</a>
<!-- end container -->




</div>

@endsection

@push('javascript')

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>


@endpush
