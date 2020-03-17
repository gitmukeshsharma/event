<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  </head>
<body class="text-center">
<div class="bootstrap-iso">
 <div class="container">
  <div class="row">
   <div class="col-md-4">
    <form action="" class="form-horizontal" method="post">

    <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Create Event</h1>
     <div class="form-group ">

     <label for="eventFor" class="sr-only">Title</label>
      <input type="text" id="event_name" class="form-control" placeholder="Event Name">
     <label for="eventFor" class="sr-only">Event For</label>
      <input type="text" id="event_for" class="form-control" placeholder="Event For">
      <label for="eventLocation" class="sr-only">Event Location</label>
      <input type="text" id="event_location" class="form-control" placeholder="Location">
      <label for="eventComments" class="sr-only">Event Comment</label>
      <textarea name = "comment" class="form-control" placeholder = "comments" id = "comment"></textarea>

      <div class="col-sm-16">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <label for="eventDate" class="sr-only">Event Date</label>
        <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
               
       </div>
      </div>
      
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <input name="_honey" style="display:none" type="text"/>
       <button class="btn btn-lg btn-secondary btn-block" type="submit">Submit</button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>
</body>
  <!-- 
  <body class="text-center">
    <div class="container" style="width:400px;">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Create Event</h1>
     
      <label for="eventFor" class="sr-only">Event For</label>
      <input type="text" id="event_for" class="form-control" placeholder="Event For">
      
      <label for="eventDate" class="sr-only">Event Date</label>
    
      
      <input type="text" id="event_date" name="event_date" class="form-control" placeholder="MM/DD/YYYY">
      
      <label for="eventLocation" class="sr-only">Event Location</label>
      <input type="text" id="event_location" class="form-control" placeholder="Location">
      
      <div class="checkbox mb-3">
      </div>
      <button class="btn btn-lg btn-secondary btn-block" type="submit">Submit</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>


</div>

-->

<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script> 

<!-- Include Date Range Picker -->
<script type="text/javascript" src="../resources/js/bootstrap-datepicker.min.js"> </script>

<link rel="stylesheet" href="../resources/sass/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>

  </body>
</html>
