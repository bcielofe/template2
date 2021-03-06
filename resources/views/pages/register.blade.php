<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>| Guest Register </title>

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
  <body style="background: url( {{asset("uploads/$event->picture1")}} ) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

  <div class="container" style="margin-top: 10%">

    <div class="row" style="background-color: rgba(0,0,0,0.7);">

      <div class="col-xs-1"></div>

      <div class="col-xs-10" >

        <div class="col-sm-7" style="color: white">
          <img src='{{asset("uploads/$event->picture2")}}' style="width: 100%; margin-top: 50px; margin-bottom: 20px;">
          <h1 style="padding-bottom: 50px;">{{$event->event_name}}</h1>
        </div>

        <div class="col-sm-5" style="color: white; margin-top: 50px; margin-bottom: 50px;">
          <form method="POST" action="{{url($event->event_code.'/guestlog')}}">
            {{csrf_field()}}
          <!-- style was inserted to emphasize -->
          <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="first_name" class="form-control" name="first_name">
          </div>
          <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="last_name" class="form-control" name="last_name">
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="username" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd">
          </div>
          <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="phone" class="form-control" name="phone">
          </div>
          
          <button type="submit" class="btn btn-default">Register</button>
          </form>
              
        </div>

      </div>

      <div class="col-xs-1"></div>

    </div>

    <div class="row" style="background-color: rgba(0,0,0,0.8); text-align: center; color: white; font-weight: bold; padding-bottom: 20px; margin-bottom: 50px;">
      <h3> When:</h3>
      <p> {{$event->date}} @ {{$event->time}}</p>
      <h3> Where:</h3>
      <p> {{$event->venue}} </p>
    </div>
    
    

  </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>