<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>| Registry</title>

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
      <button type="button" class="btn btn-warning btn-md" style="margin-top: 20px; float: right;">Go Back to Events List</button>
      <h2>Event Name</h2>
      <p>Below are the people who are GOING to this event:</p>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <!-- <th>
              <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropup" href="#" style="text-decoration: none; color: black;">Response
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Going</a></li>
                  <li><a href="#">Not Going</a></li>
                  <li><a href="#">Undecided</a></li>
                </ul>
              </div>
            </th> -->
            <th>Other Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($guests as $guest)
          <tr>
            <td>{{$guest->first_name}} {{$guest->last_name}}</td>
            <!-- <td>{{$guest->response}}</td> -->
            <td>
            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteGuest{{$guest->id}}">Delete this Guest?</button>
            <div class="modal fade" id="deleteGuest{{$guest->id}}" role="dialog">
                <div class="modal-dialog">
                
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Confirm Delete</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to remove {{$guest->first_name}} {{$guest->last_name}} from the registry?</p>
                    </div>
                    <div class="modal-footer">
                      <a href='{{url("deleteGuest/$guest->id/$event->id")}}'>
                        <button type="button" class="btn btn-danger">Remove</button>
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