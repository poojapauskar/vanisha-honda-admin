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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


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
    <h5>Mobile App</h5>
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
    <div class="col-sm-1">
    </div>
    <div class="col-sm-2">
      <h6 style="margin-top:-8%;font-weight:bold">Recent Push Notifications</h6>
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

<div class="col-sm-6">
  <form>
    From
    <input id="date11" class="date" type="text" placeholder="DD/MM/YYY" required="True">
    To
    <input id="date22" class="date" type="text" placeholder="DD/MM/YYY" required="True">
    <button type="submit" onclick="myFunction()" class="mdl-button mdl-js-button mdl-button--raised">
      Search
    </button>
  </form>
</div>

    <div class="col-sm-3">
      <button onclick="open_modal()" class="mdl-button mdl-js-button mdl-button--raised">
        New Push Notification 
      </button>
    </div>
  </div>
</div>

    <!-- Textfield with Floating Label -->

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

<div class="row">
<!-- <div class="form-group pull-right">
<input type="text" class="search form-control" placeholder="What you looking for?">
</div> -->
<!-- <span class="counter pull-right"></span> -->
<table id="example" align="center" class="mdl-data-table mdl-js-data-table mdl-shadow--2dp results">
  <thead>
    <tr>
      <th>Name</th>
      <th>Mobile</th>
      <th>Email</th>
      <th>Type</th>
      <th>Date</th>
      <th>Time</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Pleasure</td>
      <td>Mathew</td>
      <td>jason@bitjini.com</td>
      <td>Pleasure</td>
      <td>12/4/2015</td>
      <td>87979hj</td>
      <td>Rs.2000</td>
    </tr>
    <tr>
      <td>Jason Matt</td>
      <td>9123456789</td>
      <td>jason@bitjini.com</td>
      <td>Pleasure</td>
      <td>12/4/2015</td>
      <td>87979hj</td>
      <td>Rs.2000</td>
    </tr>
    <tr>
      <td>Jason Matt</td>
      <td>9123456789</td>
      <td>jason@bitjini.com</td>
      <td>Pleasure</td>
      <td>12/4/2015</td>
      <td>87979hj</td>
      <td>Rs.2000</td>
    </tr>
    <tr>
      <td>Jason Matt</td>
      <td>9123456789</td>
      <td>jason@bitjini.com</td>
      <td>Pleasure</td>
      <td>12/4/2015</td>
      <td>87979hj</td>
      <td>Rs.2000</td>
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
      <h2 style="text-align:center">New Push Notification</h2>
    </div>
    <div class="modal-body">
      <form action="#" style="text-align:center">
          <div class="mdl-textfield mdl-js-textfield">

          <div class="row">

<div style="text-align:left">
<input type="radio" ng-checked="true" ng-model="myVar" value="All">All Users<br>
<input type="radio" ng-model="myVar" value="User">Specific User
</div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">To</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Template</label>
                <input class="mdl-textfield__input" type="text" id="sample1">
                </div>

                <div class="mdl-textfield mdl-js-textfield">
                <label style="float: left;" for="sample1">Customized</label>
                <textarea class="mdl-textfield__input" type="text" id="sample1"></textarea>
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
        <div class="col-sm-4">
          <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Send</button>
        </div>
        <!-- <div class="col-sm-2">
          <button style="background-color:red;color:white" type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Cancel</button>
        </div> -->
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

