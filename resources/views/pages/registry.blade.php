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
      <p>Below are the responses of the people you invited to this event:</p>            
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Name</th>
            <th>
              <div class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropup" href="#" style="text-decoration: none; color: black;">Response
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Going</a></li>
                  <li><a href="#">Not Going</a></li>
                  <li><a href="#">Undecided</a></li>
                </ul>
              </div>
            </th>
            <th>Other Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td><button type="button" class="btn btn-danger btn-xs">Delete this Guest?</button></td>
          </tr>
          <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td><button type="button" class="btn btn-danger btn-xs">Delete this Guest?</button></td>
          </tr>
          <tr>
            <td>July</td>
            <td>Dooley</td>
            <td><button type="button" class="btn btn-danger btn-xs">Delete this Guest?</button></td>
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