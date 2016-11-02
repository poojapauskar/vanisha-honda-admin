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


  <script src="js/material.min.js"></script>
  <link rel="stylesheet" href="css/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/style.css">

<!-- search functionality -->
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
<link rel="stylesheet" href="css/search.css">
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/search.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- export -->
<!-- <link rel="stylesheet" href="css/datatable.css"> -->
<!-- <script src="js/jquery1.js"></script> -->
<script src="js/jquery2.js"></script>
<script src="js/table2excel.js"></script>
<script src="js/exportscript.js"></script>


</head>
<body ng-app="" style="background-color:#E8E8E8;overflow-x:hidden">

<div class="demo-layout-transparent mdl-layout mdl-js-layout">
  <header style="background-color:#607D8B;height:100px;" class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="admin_panel.php">
      <img style="margin-top:5%" src="images/Different-Honda-Logo.png"></img>
      </a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <h5 style="color:white;font-weight:bold">Vanisha Honda</h5>
      </nav>

    </div>
  </header>
  <div class="mdl-layout__drawer">
    <img style="margin-top:10%;margin-left:20%;width:25%" src="images/Different-Honda-Logo.png"></img>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="inventory.php">Enquiry</a>
      <a class="mdl-navigation__link" href="test_ride.php">Test Rides</a>
      <a class="mdl-navigation__link" href="bookings.php">Bookings</a>
      <a class="mdl-navigation__link" href="finance.php">Finance Requests</a>
      <a class="mdl-navigation__link" href="insurance.php">Insurance Renewal</a>
      <a class="mdl-navigation__link" href="service_requests.php">Service Requests</a>
      <a class="mdl-navigation__link" href="inventory.php">Inventory</a>
      <a class="mdl-navigation__link" href="customer_database.php">Customer Database</a>
      <a class="mdl-navigation__link" href="push_notification.php">Mobile App</a>
      <a class="mdl-navigation__link" href="employees_details.php">Admin</a>
    </nav>
  </div>
</div>
  
<div class="container">
  <div class="row" style="margin: auto;background-color:#607D8B;margin-top:15%;width:90%;height:80px;">

    

    <div class="col-sm-1" style="margin-top:3%;">
      <h6 style="margin-top:0%;font-weight:bold">Web App User List</h6>
    </div>

    <div class="col-sm-2" style="margin-top:3%">
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


<!-- <html ng-app="datepickerBasicUsage">
<div ng-controller="AppCtrl" style=''>
    <md-content>
      From <md-datepicker ng-model="myDate1" md-placeholder="Enter date"></md-datepicker>
      To <md-datepicker ng-model="myDate2" md-placeholder="Enter date"></md-datepicker>
    </md-content>
  </div> -->
<div class="col-sm-6" style="margin-top:2%">
  <form>
    <input id="date11" style="background-color:#E8E8E8" class="date" type="text" placeholder="From: DD/MM/YYY" required="True">
    <input id="date22" style="background-color:#E8E8E8" class="date" type="text" placeholder="To: DD/MM/YYY" required="True">
    <button type="submit" onclick="myFunction()" class="mdl-button mdl-js-button mdl-button--raised">
      Search
    </button>
  </form>
</div>

<div class="col-sm-3" style="margin-top:2%">
      <button onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
        Add New User 
      </button>
</div>

    <div class="col-sm-2">
      
    </div>
    <!-- <div class="col-sm-1">
      <button class="mdl-button mdl-js-button mdl-button--raised">
        Add New
      </button>
    </div> -->
  </div>
</div>

    <!-- Textfield with Floating Label -->
<script type="text/javascript">
  function clear1(){
    $('#date11').val('');
    $('#date22').val('');
    var table1 = document.getElementById("example");
    for (var j = 1, row; row = table1.rows[j]; j++) {
         table1.rows[j].style.display = "";
    } 
   
  }
</script>
<!-- DatePicker And Sorting -->

<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $( ".date" ).datepicker({ dateFormat: 'dd/mm/yy' });
  });
  </script>

<script>

function myFunction() {

   var table = document.getElementById("example");
   for (var i = 1, row; row = table.rows[i]; i++) {


      if(document.getElementById('date11').value !== '' && document.getElementById('date22').value !== '')
      {
        var dateFrom=document.getElementById('date11').value;
        var dateTo=document.getElementById('date22').value;
        var dateCheck=row.cells[4].innerText;

        var d1 = dateFrom.split("/");
        var d2 = dateTo.split("/");
        var c = dateCheck.split("/");

        var from = new Date(d1[2], parseInt(d1[1])-1, d1[0]); 
        var to   = new Date(d2[2], parseInt(d2[1])-1, d2[0]);
        var check = new Date(c[2], parseInt(c[1])-1, c[0]);

        console.log(check > from && check < to)

        if(check > from && check < to){ /*alert("bot are equal");*/}
        else{
         table.rows[i].style.display = "none";
         /*alert("bot are unequal");*/
        } 
      }
  }
}

/*when both dates are empty display all data*/
$('.date').blur(function()
{
    var value11=$.trim($("#date11").val());
    var value22=$.trim($("#date22").val());

    if(value11.length==0 && value22.length==0)
    {
             var table1 = document.getElementById("example");
             for (var j = 1, row; row = table1.rows[j]; j++) {
                   table1.rows[j].style.display = "";
             } 
            /* alert("hello");*/
             
    }
});
</script>

<!-- End Datepicker and sorting -->

<script type="text/javascript">
  $(window).on('hashchange', function() {
     /* alert((document.location.hash).replace('#',''))*/
});
</script>

<?php

if($_GET['page_no'] == '' || $_GET['page_no'] == 'null'){
  $page=1;
}else{
  $page=$_GET['page_no'];
}

$url_data = 'http://127.0.0.1:8000/get_all_employees_details/?access_token=YbZtBg6XuWWbZ39R3BIn9Mb1XOn7uy&page='.$page;
$options_data = array(
  'http' => array(
    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
    'method'  => 'GET',
  ),
);
$context_data = stream_context_create($options_data);
$output_data = file_get_contents($url_data, false,$context_data);
/*var_dump($output_data);*/
$employees_details_info = json_decode($output_data,true);
// var_dump($employees_details_info);
?>




<!-- <div class="form-group pull-right">
<input type="text" class="search form-control" placeholder="What you looking for?">
</div> -->
<!-- <span class="counter pull-right"></span> -->
<table id="example" align="center" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results">
  <thead>
    <tr>
      <th>Name</th>
      <th>Username</th>
      <th>Password</th>
      <th>Access Level</th>
      <th>Edit</th>
    </tr>
    <!-- <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i> No result</td>
    </tr> -->
  </thead>
  <tbody>
   <?php 
      for ($x = 0; $x < count($employees_details_info['response']); $x++) { ?>
              <tr>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_details']['name']) ? "All Users" : $employees_details_info['response'][$x]['user_details']['name']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_details']['username']) ? "NULL" : $employees_details_info['response'][$x]['user_details']['username']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['user_details']['password']) ? "NULL" : $employees_details_info['response'][$x]['user_details']['password']; ?></td>
                <td align="left"><?php echo empty($employees_details_info['response'][$x]['employee_details']['access_level']) ? "NULL" : $employees_details_info['response'][$x]['employee_details']['access_level']; ?></td>
                <td><button onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
                  Edit
                </button></td>
              </tr>
    <?php  } 
    ?> 

  </tbody>
</table>

<div class="no-result">
    <h2 style="text-align:center">No result</h2>
</div>

<div style="text-align:center">
  <ul class="pagination"  style="overflow-x:auto;overflow-y:hidden;max-width:239px;">

      <table>
          <tr>
            <?php 
                for ($x = 0; $x <= $employees_details_info['count']/10; $x++) { ?>
                    <td>
                      <form method="get" action="service_requests.php">
                        <input type="hidden" name="page_no" value=<?php echo $x+1 ?>>
                        <button type="submit"><?php echo $x+1 ?></button>
                      </form>
                    </td>
            <?php  } 
              ?>
      </tr>
      </table>
    <!-- <li><a href="customer_database.php#page=2">2</a></li>
    <li><a href="customer_database.php#page=3">3</a></li>
    <li><a href="customer_database.php#page=4">4</a></li>
    <li><a href="customer_database.php#page=5">5</a></li> -->
  </ul>

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

