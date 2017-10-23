


@extends('layouts.app')

@section('content')


<div class="wrap">


  <main>


    <aside>



<!-- take it out of here and create a partal over the top https://www.w3schools.com/howto/howto_js_snackbar.asp -->

          @if(Session::has('flash_message'))
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {!! session('flash_message') !!}
          </div>

          @endif



<h2>Client Name</h2>



       <form method="post" action="">
          {{csrf_field()}}
          <input name="_method" type="hidden" value="PATCH">

          <div class="row">




            <div class="col-xs-12" style="padding-bottom:30px;">
                <div class="btn-group btn-block ">
                  <a class="btn btn-primary btn-block dropdown-toggle" data-toggle="dropdown" href="#">Section<span class="caret"></span></a>
                  <ul class="dropdown-menu btn-block">

                  <li class="list-group-item"> <a href="">Section Title</a></li>

                  </ul>
                </div>
            </div>



          </div>



          <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default">

<!-- remove the input box for the general questions -->


                <div class="panel-heading">Question Title</div>



                <div class="panel-body">
                  <div class="form-group">
                    <label for="">Question</label>
                    <input type="text" class="form-control" id="" placeholder="Answer">
                  </div>

                  <div class="form-group">
                    <label for="">Question</label>
                    <input type="text" class="form-control" id="" placeholder="Answer">
                  </div>
                </div>



              </div>
                <div style="padding-bottom:50px;">


              <button type="submit" class="btn btn-primary">Save and Continue</button>
            </form>
            </div>



          </div>
        </div>
      </aside>










    </main>

  </div>


@endsection

@push('javascript')




@endpush
