<?php
  if(isset($_SESSION['role'])){
?>
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
  <style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 20%;
    border-radius: 5px;
  }

  .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
  }

  img {
    border-radius: 5px 5px 0 0;
  }

  .container {
    padding: 2px 16px;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="background-color: #0c8e77; color: white; border-color: #0c8e77;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;">MyWeb-Restu</a>
    </div>

    <a class="navbar-form navbar-right" href="../config/logout.php">
      <button type="button" class="btn btn-primary">KELUAR <i class='fas fa-sign-in-alt'></i></button>
    </a>
  </div>
</nav>

<div class="container">  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Jadwal</a></li>
    <li><a data-toggle="tab" href="#menu2"><i class="fa fa-plus"></i> &nbsp;Tambah Matakuliah</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>Card</h3>
      <div class="card">
        <img src="../images/img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b><?php echo $_SESSION['name'];?></b></h4> 
          <p>NIM : <?php echo $_SESSION['nim'];?></p> 
        </div>
      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Matakuliah Yang Dipilih</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Nama Matakuliah</th>
            <th>SKS</th>
            <th>Hari</th>
            <th>Jam</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
            <td>john@example.com</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Card</h3>
      <div class="card">
        <img src="../images/img_avatar.png" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b><?php echo $_SESSION['name'];?></b></h4> 
          <p>NIM : <?php echo $_SESSION['nim'];?></p> 
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php
  }else{
    header('location:../?msg=noSession!');
  }
?>

