


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



      <div class="keyboardInput">


        <div class="writingArea">
    <div class="actionBtn">
        <button id="trash" class="btn btn-default btn-sm">Trash</button>
        <button id="undo"  class="btn btn-default btn-sm">Undo</button>
        <button id="redo"  class="btn btn-default btn-sm">Redo</button>
        <button id="keyboard" class="btn btn-default btn-sm" onclick="myObjectReset.toggleKeyboard()">Keyboard</button>
        <button id="trash" class="btn btn-default btn-sm">Upload Document</button>
        <button id="undo"  class="btn btn-default btn-sm">Note Pad</button>
      </div>

    <br/>
      <div class="keyboardImg" style="display:none;"><img src="{{ url('/') }}/image/keyboard-letter.png" width="100%"></div>
    <div id="ink-paper"></div>
    <br/>



    <!-- needs to be hidden to get the inner.html -->
    <pre id="result" style="display:none;"></pre>

  </div>

          <!-- keyboard input for mystyle
          add api keys
          ad javascript
         flexbox intergration
          - fix inputs
          - forcing keyboard
          - show and hide keyboard?
        -->




    </div>



    </main>

  </div>


@endsection

@push('javascript')


    <!-- CryptoJS imports -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/core-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/x64-core-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/sha512-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/components/hmac-min.js"></script>
    <!-- Q import -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/q.js/1.4.1/q.min.js"></script>
    <!-- HandJS import -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/handjs/1.3.11/hand.min.js"></script>
    <!-- MyScriptJS import -->
    <script type="text/javascript" src="{{ url('/') }}/MyScriptJS-1.1.0/resources/samples/lib/myscript.js"></script>
    <link rel="stylesheet" href="{{ url('/') }}/MyScriptJS-1.1.0/resources/samples/lib/myscript.css"/>
    <script>
        (function () {
            function initialize() {
                var result = document.getElementById('result');
                var inkPaper = document.getElementById('ink-paper');
                var options = {
                    // Handle MyScript Cloud authentication keys (cloud.myscript.com)
                    applicationKey: '88ac2b81-1a24-4adb-b06a-3b05fea01e44', // MyScript Cloud application key
                    hmacKey: '8d7b58b5-6499-40c3-9d57-c22c27ba9a06', // MyScript Cloud HMAC key
                    protocol: 'WebSocket', // Network protocol (i.e. REST, or WebSocket ONLY for TEXT and MATH)
                    type: 'TEXT', // Recognition type
                    width: '700', // InkPaper width
                    height: '350', // InkPaper height
                    textParameters: {
                        language: 'en_US' // Set the recognition language (i.e.: 'en_US', 'fr_FR', ...)
                    }
                };
                /**
                 * As canvas are positioned absolute to overlay, we have to explicitly set the parent dimensions
                 */
                inkPaper.style.height = options.height + 'px';
                inkPaper.style.width = options.width + 'px';


                /**
                 * Init the ink paper
                 * @param {Element} The DOM element to attach the ink paper
                 * @param {Object} The recognition options
                 * @param {Function} The result callback
                 */
                var paper = new MyScript.InkPaper(inkPaper, options, function (data, error) {
                    // Handle recognition result
                    result.innerHTML = '';
                    if (error) {
                        result.innerHTML = error;
                    }
                    if (data) { // Display the selected text candidate
                        result.innerHTML = data.getTextDocument().getTextSegment().getSelectedCandidate().getLabel();
                        console.log(result.innerHTML);
                        document.activeElement.value = result.innerHTML;
                    }
                });
                /**
                 * Map the buttons
                 */
                document.getElementById('trash').addEventListener('click', function () {
                    paper.clear();
                }, false);
                document.getElementById('undo').addEventListener('click', function () {
                    paper.undo();
                }, false);
                document.getElementById('redo').addEventListener('click', function () {
                    paper.redo();
                }, false);


                // reset the paper





                  myObjectReset = {
                  resetPaper: function(){
                    document.activeElement.value="";
                    paper.clear();
                  },

                  showWritingArea: function(){
                //    document.getElementsByClassName("writingArea").hide()
                    $(".writingArea").show();
                  },

                  hideWritingArea: function(){
                    $(".writingArea").hide();
                  },
                  toggleKeyboard:function(){
                    console.log('keyboardtoggle');
                    $(".keyboardImg").toggle();
                  }


                  }

              /*  var languages = document.getElementById('languages');
                languages.addEventListener('change', function () {
                    paper.getRecognizer().getParameters().setLanguage(languages.options[languages.selectedIndex].value);
                    paper.recognize();
                }, false);
                /**
                 * Populate the language options
                 */
                 /*
                paper.getAvailableLanguages().then(function (lngs) {
                    for (var i in lngs) {
                        languages.options[languages.options.length] = new Option(lngs[i], lngs[i]);
                    }
                }).done();



                */
            }
            MyScript.InkPaper.event.addDomListener(window, 'load', initialize);
        })();
    </script>

    <!-- Scripts  -->



@endpush
