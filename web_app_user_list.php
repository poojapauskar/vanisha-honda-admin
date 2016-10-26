<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vanisha Honda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>


<!-- datepicker -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular-aria.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.0.4/angular-material.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/t-114/assets-cache.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/angular-material/1.0.4/angular-material.css">
<script src="js/datepicker.js"></script>   

<!-- search functionality -->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/search.css">
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/search.js"></script>


<!-- export -->
<!-- <link rel="stylesheet" href="css/datatable.css"> -->
<!-- <script src="js/jquery1.js"></script> -->
<script src="js/jquery2.js"></script>
<script src="js/table2excel.js"></script>
<script src="js/exportscript.js"></script>


  <script src="js/material.min.js"></script>
  <link rel="stylesheet" href="css/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<style>

</style>
</head>
<body ng-app="" style="overflow-x:hidden">

<div class="row">
  <div class="col-sm-4">
  <a href="admin_panel.php">
    <img style="width:13%;height:13%;margin-top:4%;margin-left:4%" src="images/sample_logo.jpg"></img>
    <h6 style="color:black;margin-top:-5%;margin-left:19%">Vanisha Honda</h6>
    <img style="width:9%;height:9%;margin-top:-23%;margin-left:48%" src="images/home.png"></img>
  </a>
  </div>
  <div class="col-sm-4" style="text-align:center">
    <h5>Admin</h5>
  </div>
  <div class="col-sm-4">
  
 
          <!-- Navigation -->
          <nav class="mdl-navigation" style="margin-top:4%">
            <a class="mdl-navigation__link" href=""><img style="width:13%;height:13%;" src="images/bell.png"></img>Welcome User,</a>
            <a style="color:red" class="mdl-navigation__link" href="#">Logout</a>
          </nav>
        </div>
      
  </div>
</div>
  
<div class="container">
  <div class="row" style="margin-top:5%">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-2">
      <h6 style="margin-top:-8%;font-weight:bold">Web App Users List</h6>
      <form action="#" style="margin-top:-20%">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
          <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
            <i class="material-icons">search</i>
          </label>
          <div class="mdl-textfield__expandable-holder">
            <input class="search mdl-textfield__input" type="text" id="sample6">
            <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
          </div>
        </div>
      </form>
    </div>

    <div class="col-sm-1">
      <button class="mdl-button mdl-js-button mdl-button--raised">
        Search
      </button>
    </div>
    <div class="col-sm-5">
    </div>
    <div class="col-sm-2">
      <button class="mdl-button mdl-js-button mdl-button--raised">
        Add New User 
      </button>
    </div>
  </div>
</div>

    <!-- Textfield with Floating Label -->

<div class="row">
<!-- <div class="form-group pull-right">
<input type="text" class="search form-control" placeholder="What you looking for?">
</div> -->
<!-- <span class="counter pull-right"></span> -->
<table align="center" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results">
  <thead>
    <tr>
      <th>Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>Access Level</th>
      <th>Edit</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Jason</td>
      <td>jasonmatt</td>
      <td>12345678</td>
      <td>Sales</td>
      <td>
      <button onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
        Edit
      </button>
      </td>
    </tr>
    <tr>
      <td>Jason</td>
      <td>jasonmatt</td>
      <td>12345678</td>
      <td>Sales</td>
      <td>
      <button onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
        Edit
      </button>
      </td>
    </tr>
    <tr>
      <td>Jason123</td>
      <td>jasonmatt</td>
      <td>12345678</td>
      <td>Sales</td>
      <td>
      <button onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
        Edit
      </button>
      </td>
    </tr>
    <tr>
      <td>Jason</td>
      <td>jasonmatt</td>
      <td>12345678</td>
      <td>Sales</td>
      <td>
      <button onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
        Edit
      </button>
      </td>
    </tr>
  </tbody>
</table>
</div>  


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span style="color:black" class="close">×</span>
      <h2 style="text-align:center">Edit User</h2>
    </div>
    <div class="modal-body">
      <form action="#" style="text-align:center">
          <div class="mdl-textfield mdl-js-textfield">

          <div class="row">
            <div class="col-sm-6" style="">
                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Employee Id</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Name</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Email</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Mobile</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>
            </div>

            <div class="col-sm-6">
                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Username</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Password</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Access Level</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

  <select ng-model="myVar3">
    <option ng-selected="true" value="sales">Sales
    <option value="insurance">Insurance
    <option value="admin">Admin
  </select>
            </div>
          </div>

          </div>
        </form>
    </div>
    <div class="modal-footer">
      <div class="row">
       <!--  <div class="col-sm-4">
          <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Cancel</button>
        </div> -->
        <div class="col-sm-4">
        </div>
        <div class="col-sm-2">
          <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Save Changes</button>
        </div>
        <div class="col-sm-2">
          <button style="background-color:red;color:white" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Delete User</button>
        </div>
        <div class="col-sm-4">
        </div>
      </div>
    </div>
  </div>

</div>
    
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
/*var btn = document.getElementById("myBtn");*/

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
/*btn.onclick = function() {
    modal.style.display = "block";
}*/

/*document.getElementById("myBtn1").onclick = function() {
    modal.style.display = "block";
}*/

function open_modal(){
   modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

