<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vanisha Honda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <!-- Material Design icon font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <script src="js/material.min.js"></script>
  <link rel="stylesheet" href="css/material.indigo-pink.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<script type="text/javascript">
function hide_wait_msg ()
{
    document.getElementById('loadingPleaseWait').style.display = 'none';
}

function show_wait_msg ()
{
     if(document.getElementById('username').value == '' && document.getElementById('password').value == ''){
       alert("Username and Password required");
     }else{
        document.getElementById('loadingPleaseWait').style.display = 'block';
     }
}

</script>

</script>
</head>
<body ng-app="" style="background-color:#E8E8E8;overflow-x:hidden" onload="hide_wait_msg()">

<?php 

if($_POST['username'] != '' && $_POST['password'] != ''){
$url2 = 'https://vanisha-honda.herokuapp.com/check_admin/?access_token=YbZtBg6XuWWbZ39R3BIn9Mb1XOn7uy';
$options2 = array(
  'http' => array(
    'header'  => array(
                  'USERNAME: '.$_POST['username'],
                  'PASSWORD: '.$_POST['password'],
                ),
    'method'  => 'GET',
  ),
);
$context2 = stream_context_create($options2);
$output2 = file_get_contents($url2, false,$context2);
$arr2 = json_decode($output2,true);
/*echo $arr2['status'];*/
                  if($arr2['status']==200){

                                            $url_logged = 'https://vanisha-honda.herokuapp.com/update_logged_in/?access_token=YbZtBg6XuWWbZ39R3BIn9Mb1XOn7uy';
                                            $options_logged = array(
                                              'http' => array(
                                                'header'  => array(
                                                              'LOGGED-IN: 1',
                                                              'USERNAME: '.$_POST['username'],
                                                              'PASSWORD: '.$_POST['password'],
                                                            ),
                                                'method'  => 'GET',
                                              ),
                                            );
                                            $context_logged = stream_context_create($options_logged);
                                            $output_logged = file_get_contents($url_logged, false,$context_logged);
                                            $arr_logged = json_decode($output_logged,true);
                                            if($arr_logged['status'] == 200){
                                                echo "<script>location='admin_panel.php'</script>";
                                            }
                  }else{
                    if($arr2['status']==401){
                       $error_message="Not an Admin";
                    }elseif($arr2['status']==402){
                       $error_message="Password Invalid";
                    }elseif($arr2['status']==403){
                       $error_message="Username Invalid";
                    }
                  }

}
elseif($_POST['username'] == '' && $_POST['password'] == ''){
  /*$error_message="Username and Password required";*/
}
elseif($_POST['username'] == ''){
  $error_message="Username is required";
}elseif($_POST['password'] == ''){
  $error_message="Password is required";
}

?>

  
<div class="container">
  <div class="row" style="background-color:#607D8B;height:100px;width:115%">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="admin_panel.php">
      <img style="margin-top:5%" src="images/Different-Honda-Logo.png"></img>
      </a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <h5 style="color:white;">Vanisha Honda</h5>
      </nav>

    </div>
  </div>

<div style="margin-top:7%;position: absolute; left: 0; top: 0;width: 100%; height: 10%;display: none;vertical-align: center;" id="loadingPleaseWait">
  <div style="text-align: center;">
    <h4 style="color:black;font-size:14px;">Loading, please wait...</h4>
  </div>
</div>

<div class="row">
    <div class="col-sm-9">
    </div>


    <div class="col-sm-3" style="margin-top:5%;width:250px;">
        <form name="myForm" method="post" action=""  style="background-color:white !important;padding:12px 0px 15px 10px">

          <p style="color:#607D8B;font-size:18px" id="admin_console">Admin Console</p>

<p style="color:red"><?php echo $error_message ?></p>

          <div style="width:180px" class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="username" id="username" class="mdl-textfield__input" value="<?php echo $_POST['username'] ?>">
          <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Username</label>
          </div>
          </p>

<!-- pattern=".{8,}"  -->
          <div style="width:180px"  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="password" id="password" class="mdl-textfield__input" type="password" value="<?php echo $_POST['password'] ?>">
          <label style="font-size:14px;" class="mdl-textfield__label" for="sample3">Password</label>
          </div>
          </p>

          <br>
          <button onclick="show_wait_msg()" type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
           Log In
          </button>

        </form>
    </div>

   <!--  <div class="col-sm-1">
    </div> -->

  </div>
</div>

    <!-- Textfield with Floating Label -->
    
    

</body>
</html>

