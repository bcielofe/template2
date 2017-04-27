<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>| Customize Invite</title>

    <!-- Bootstrap -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background: url( {{ asset('images/StockSnap_VEG698H8CK.jpg') }} ) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

  <div class="container" style="margin-top: 10%">

    <div class="row" style="background-color: rgba(0,0,0,0.7);">

      <div class="col-xs-1"></div>

      <div class="col-xs-10" >

        <div class="col-sm-7" style="color: white">
          <img src="{{asset('images/unnamed.jpg')}}" style="width: 100%; margin-top: 50px; margin-bottom: 20px;">
          <h1>GRAD SOCIALS</h1>
        </div>

        <div class="col-sm-5" style="color: white; margin-top: 50px; margin-bottom: 50px;">
          <form method="POST" action="{{url("myevents/savenewevent")}}" enctype="multipart/form-data">
          {{csrf_field()}}
        <div class="form-group">
          <label for="EventName">Event Name:</label>
          <input type="text" class="form-control" name="event_name">
        </div>
        <div class="form-group">
          <label for="EventName">Event Code:</label>
          <input type="text" class="form-control" name="event_code" placeholder="This will appear in the url of your e-invite.">
        </div>
        <div class="form-group">
          <label for="pic1">Image 1: This will be the background image of your entire page. Photo should be less than 5MB. </label>
          <input type="file" class="form-control" name="pic1">
        </div>
        <div class="form-group">
          <label for="pic2">Image 2: This will be the image that will appear beside the Login Page of your e-invite. Photo should be less than 5MB. </label>
          <input type="file" class="form-control" name="pic2">
        </div>
        <div class="form-group">
          <label for="date">Date:</label>
          <input type="date" class="form-control" name="date">
        </div>
        <div class="form-group bfh-timepicker" data-mode="12h">                      
          <label for="time">Time:</label>
          <input type="time" class="form-control" name="time"> 
        </div>
        <div class="form-group">
          <label for="venue">Venue:</label>
          <input type="text" class="form-control" name="venue">
        </div>
        <button type="submit" class="btn btn-default btn-success">Create Event</button>
      </form>
        </div>

      </div>

      <div class="col-xs-1"></div>

    </div>

    <div class="row" style="background-color: rgba(0,0,0,0.8); text-align: center; color: white; font-weight: bold; padding-bottom: 20px; margin-bottom: 50px;">
      <h3> When:</h3>
      <p> 10 May 2017 @ 2:00 PM</p>
      <h3> Where:</h3>
      <p> UP School of Statistics, UP Campus, Diliman, Quezon City </p>
    </div>
    
  </div>

    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>