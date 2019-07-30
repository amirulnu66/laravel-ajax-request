<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>

<div class="contianer">
<section class="wrapper site-min-height">
    <!-- page start-->
        <div class="row">
            <div class="col-lg-8 col-md-offset-2">
                <section class="panel">
                
                    <header class="panel-heading admin-bold-title admin-center-title">
                      Ajax request form submit
                    </header>

                    <div class="panel-body">
                        <form role="form" id="messge-request">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
 
                            <div class="form-group">
                                <label>Nmae</label>
                                <input type="text"  name="name" id="page-title" class="form-control" required="">
                            </div>
                             <div class="form-group">
                              <label>Phone</label>
                              <input type="text"  name="phone" id="in-phone" class="form-control date" >
                          </div>
                             <div class="form-group">
                                <label>Email</label>
                                <input type="text"  name="email" id="out-email" class="form-control date" >
                            </div>
                            <button type="button" id="submit-btn" class="btn btn-info">Submit</button>
                        </form>
                    
                    </div>
                </section>
            </div>

        </div>
</section>

 </div>



        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <!-- swieet alert cdn -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <script type="text/javascript">
              //Institute history data insert here
                $('#submit-btn').click(function(){
                   alert('alert ok');
                // ajax request
                 $.ajax({
                     url: '/backend/data/store',
                     type: 'post',
                     cache: false,
                     data: $('form#messge-request').serialize(),
                     datatype: 'json',
                     beforeSend: function() {
                         
                     },

                     success:function(data){
                      // 
                      if(data.status=='success') {
                          swal({
                            title: "Success",
                            text: "Data Posted Successfully",
                            icon: "success",
                            button: "Close",
                          });
                      }
                      //for empty field
                      $('#page-title').val('');
                      $('#in-phone').val('');
                      $('#out-email').val('');
                     },

                     error:function(data){
                       alert(JSON.stringify(data));
                     }
                 });
                });

                

              </script>

    </body>
</html>
