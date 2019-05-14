 <!DOCTYPE html>
  <html lang="en">
  <head>
    <title>MyWeb-Restu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">MyWeb-Restu</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
      </ul>

      <form class="navbar-form navbar-right" action="config/proses.php?act=login" method="post">
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input id="email" type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
          <input id="password" type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">MASUK <i class='fas fa-sign-in-alt'></i></button>
      </form>

    </div>
  </nav>

  <div class="container">
    <h3>Navbar Forms</h3>
    <p>Use the .navbar-form class to vertically align form elements (same padding as links) inside the navbar.</p>
    <p>The .input-group class is a container to enhance an input by adding an icon, text or a button in front or behind it as a "help text".</p>
    <p>The .input-group-btn class attaches a button next to an input field. This is often used as a search bar:</p>
  </div>

  </body>
  </html>

