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

</head>
<body ng-app="">


  
<div class="container">
  <div class="row" style="background-color:#607D8B;height:100px;width:115%">


      <div class="col-sm-2">
      </div> 
      <div class="col-sm-6">
          <img style="margin-top:5%" src="images/Different-Honda-Logo.png"></img>
      </div> 
      <div class="col-sm-4"> 
          <h5 style="color:white;">Vanisha Honda</h5>
      </div>
      <!-- <div class="col-sm-2">
      </div>  -->
     
  </div>


<div class="row">
    <div class="col-sm-2">
    </div>

   

    <div class="col-sm-6">
    </div>


    <div class="col-sm-4" style="margin-top:10%;">
        <form name="myForm" method="post" action="admin_panel.php">
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="myName" class="mdl-textfield__input" ng-model="myName">
          <label class="mdl-textfield__label" for="sample3">Username</label>
          </div>
          </p>

<!-- pattern=".{8,}"  -->
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          <input name="myPassword" class="mdl-textfield__input" ng-model="myPassword" type="password">
          <label class="mdl-textfield__label" for="sample3">Password</label>
          </div>
          </p>

          <br>
          <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
           Log In
          </button>

        </form>
    </div>

    <div class="col-sm-1">
    </div>

  </div>
</div>

    <!-- Textfield with Floating Label -->
    
    

</body>
</html>

