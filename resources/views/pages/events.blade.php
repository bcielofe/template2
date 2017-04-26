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
        @foreach($events as $event)
          <tr>
            <td>{{$event->event_name}}</td>
            <td>{{$event->event_code}}</td>
            <td>
            <a href='{{url("myevents/registry/$event->id")}}'>  
              <button type="button" class="btn btn-primary btn-xs">Registry</button>
            </a>
            </td>
            <td>{{$event->date}} @ {{$event->time}}</td>
            <td>{{$event->venue}}</td>
            <td>
            <a href='{{url("myevents/editEvent/$event->id")}}'>
              <button type="button" class="btn btn-info btn-xs">Edit Event?</button>
            </a>
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteEvent{{$event->id}}">Delete Event?</button>

            <div class="modal fade" id="deleteEvent{{$event->id}}" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Confirm Delete</h4>
                    </div>
                    <div class="modal-body">
                      <p>{{$event->event_name}}</p>
                    </div>
                    <div class="modal-footer">
                      <a href='{{url("myevents/deleteEvent/$event->id")}}'>
                        <button type="button" class="btn btn-danger" >Delete</button>
                      </a>
                    </div>
                  </div>
                  
                </div>
              </div>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>