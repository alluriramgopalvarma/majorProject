<?php session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['login']) == 0) {
  header('location:index.php');
} else { ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>CMS | Complaint Details</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
  </head>
<body>
<section id="container">
      <?php include('includes/header.php'); ?>
      <?php include('includes/sidebar.php'); ?>
      <section id="main-content" style="padding-left:5%; color:#000">
        <section class="wrapper site-min-height">
          <h3><i class="fa fa-angle-right"></i> Complaint Details</h3>
          <form class="add-player-form" action="" method="post" enctype="multipart/form-data">
            <div class="form-row" style="margin: 8px" >
                <div class="form-group col-md-3">
                    <label for="dist">District:</label>
                    <input type="text" class="form-control" name="dist" id="dist" placeholder="Eg.Nalgonda" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="dist">Year:</label>
                    <input type="text" class="form-control" name="year" id="year" placeholder="" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="dist">Username:</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="">
                </div>
                <div class="form-group col-md-3">
                    <label for="dist">Date:</label>
                    <input type="text" class="form-control" name="date" id="date" placeholder="DD/MM//YYYY" required>
                </div>
              </div>
            
        
            <div class="form-row"style="margin: 10px ">
                <div class="form-group col-md-6" >
                    <label for="dist">Acts and Section:</label>
                    <input type="text" class="form-control" name="act" id="act" placeholder="Eg.420-IPC" >
                </div>
                <div class="form-group col-md-6">
                    <label for="dist">Choose Police Station:</label>
                    <select id="ps" name="Police Station" class="form-control" required>
                        <option selected disabled>Choose police Station:</option>
                        <option>Rasoolpura</option>
                        <option>Ashok Nagar</option>
                        <option>Gandhi Nagar</option>
                        <option>Masab Tank</option>
                        <option>Begumpet</option>
                    </select>
                </div>

            </div>
                
                <div class="form-row" style="margin: 10px">
                    <div class="form-group col-md-4">
                        <label for="dist">Day</label>
                        <input type="text" class="form-control" name="day" id="day" placeholder="Eg.Monday" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">From Date:</label>
                        <input type="text" class="form-control" name="datefrom" id="datefrom" placeholder="DD/MM/YYYY" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">To Date:</label>
                        <input type="text" class="form-control" name="dateto" id="dateto" placeholder="DD/MM/YYYY" required>
                    </div>
                    
                  </div>

                  <div class="form-row " style="margin: 10px">
                    <div class="form-group col-md-4">
                        <label for="dist">Duration of Offence:</label>
                        <input type="text" class="form-control" name="timep" id="timep" placeholder="HH:MM" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">From Time:</label>
                        <input type="text" class="form-control" name="timef" id="timef" placeholder="Eg.12:00pm" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">To Time:</label>
                        <input type="text" class="form-control" name="timeto" id="timeto" placeholder="Eg.12:00pm" required>
                    </div>

                    
                    
                  </div>

                  <div class="form-row " style="margin: 10px">
                    <div class="form-group col-md-4">
                        <label for="dist">Place:</label>
                        <input type="text" class="form-control" name="place" id="place" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">Village/Street:</label>
                        <input type="text" class="form-control" name="strt" id="strt" placeholder="Eg.Manikonda" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">Mandal/Area:</label>
                        <input type="text" class="form-control" name="area" id="area" placeholder="Eg.Khairathabad" required>
                    </div>

                    
                    
                  </div>


                  <div class="form-row " style="margin: 10px">
                    <div class="form-group col-md-4">
                        <label for="dist">District/City:</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Eg.Warangal" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">State:</label>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Eg.Telangana" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="dist">PIN:</label>
                        <input type="text" class="form-control" name="pin" id="pin" required>
                    </div>

                    
                    
                  </div>

                  <div class="form-row " style="margin: 10px">
                    <div class="col-sm-12 col-centered">
                        <h5> If outside the police station, then name of the concerned Police Station:</h5>
                  </div>   

                    <div class="form-group col-md-12">
                        <input type="text" class="form-control" name="cd" id="cd" required>
                    </div>
                </div>
                <div class="form-row " style="margin: 10px">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-4">
                        <label for="player-img"><b>Player Image</b></label><br>
                        <input type="file" name="image" id="uimg" class="" >
                    </div>
                </div>
                <div class="form-row " style="margin: 10px">
                    <button type="submit" class="btn btn-primary float-right">Add Player</button>
                </div>
                
            
</div>

            
        </form>

</body>


  </html>
  <?php } ?>