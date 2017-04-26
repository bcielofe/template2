<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>| My Events</title>

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
  <body>

    <div class="container table-responsive">
      <a href='{{url("myevents/createnewevent")}}'>
        <button type="button" class="btn btn-success btn-md" style="margin-top: 20px; float: right;">Create New Event</button>
      </a>
      <h2>My Events</h2>
      <p>The table below contains a listing of the events you manage:</p>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Event Name</th>
            <th>Event Code</th>
            <th>Who</th>
            <th>When</th>
            <th>Where</th>
            <th>Other Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td><button type="button" class="btn btn-primary btn-xs">Registry</button></td>
            <td>John</td>
            <td>Doe</td>
            <td><button type="button" class="btn btn-info btn-xs">Edit Event?</button>
            <button type="button" class="btn btn-danger btn-xs">Delete Event?</button>
            </td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td><button type="button" class="btn btn-primary btn-xs">Registry</button></td>
            <td>John</td>
            <td>Doe</td>
            <td><button type="button" class="btn btn-info btn-xs">Edit Event?</button>
            <button type="button" class="btn btn-danger btn-xs">Delete Event?</button>
            </td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td><button type="button" class="btn btn-primary btn-xs">Registry</button></td>
            <td>John</td>
            <td>Doe</td>
            <td><button type="button" class="btn btn-info btn-xs">Edit Event?</button>
            <button type="button" class="btn btn-danger btn-xs">Delete Event?</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>