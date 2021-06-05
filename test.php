<!DOCTYPE html>
<html>
<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
    .fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
}

/* Add a hover effect if you want */
.fa:hover {
  opacity: 0.7;
}

/* Set a specific color for each brand */

/* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

  </style>
</head>
<!--nav header-->
<?php 
include "header.php";
?>
<body>

    <div class="container d-flex justify-content-center ty ">
      
      <div class= " centr col-sm-3">
      <div class="form-group d-flex justify-content-center">
        <h1> Logo</h1>
      </div>
      <div class="form-group ">
        <label> Username/Email</label>
        <input type ="text" class="form-control" id="user_loginemail" name="uloginemail"/>
      </div>
      <div class="form-group">
        <label> Password </label>
        <input type ="text" class="form-control" id="user_loginpassword" name="uloginpassword"/>
      </div>
      <div class="form-group">
        <a href="javascript:void(0)"><button class="btn btn-primary" onclick="action_signup()"> Login</button></a>
      </div>
      <div class="form-group">
        <a href="javascript:void(0)" onclick="openSignupModal()"> Register Now</a>
        <a href="#"> Forgot Password</a>
      </div>
    
  
      <!-- Modal for Signup -->
    <div class="modal" id="Signup_modal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"> Signup Form </h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
   
      <div class="modal-body">
        <form class="was-validated">
        <div class="form-group">
          <label>First Name: </label>
          <input type="text" name="" id="user_firstname" name="ufirstname" class="form-control" placeholder="First Name" required="">
        </div>
        <div class="form-group">
          <label>Middle Name: </label>
          <input type="text" name="" id="user_middlename" name="umiddlename" class="form-control" placeholder="Middle Name" >
        </div>
        <div class="form-group">
          <label>Last Name: </label>
          <input type="text" name="" id="user_lastname" name="ulastname" class="form-control" placeholder="Last Name" required="">
        </div>
        <div class="form-group">
          <label>Email: </label>
          <input type="email" name="" id="user_email" name="uemail" class="form-control" placeholder="Email" required="">
        </div>
        <div class="form-group">
          <label>Mobile: </label>
          <input type="text" name="" id="user_mobile" name="umobile" class="form-control" placeholder="Mobile Number"required="">
        </div>
        <div class="form-group">
          <label>Password: </label>
          <input type="text" name="" id="user_password" name="upassword" class="form-control" placeholder="Password"required="">
        </div>
        <div class="form-check-inline">
          <label class="form-check-label"><input type="radio" class="form-check-input" name="utype" id="user_type_admin" value="administrator">Administrator  </label>
        </div>
         <div class="form-check-inline">
          <label class="form-check-label"><input type="radio" class="form-check-input"  name="utype" id="user_type_user" value="user" >User  </label>
        </div>
</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" data-dismiss="modal" onclick="addRecord()" >Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
  
    </div>
  </div>
</div>
<div id="serverdata">
  </div>
</body>




<script>

// for openinig Signup Modal
function openSignupModal(){
  //alert("modalcheck");
  $('#Signup_modal').modal('show');
}



function addRecord(){
  var user_firstname = $('#user_firstname').val();
  var user_middlename = $('#user_middlename').val();
  var user_lastname = $('#user_lastname').val();
  var user_email = $('#user_email').val();
  var user_mobile = $('#user_mobile').val();
  var user_password = $('#user_password').val();
  var user_type = $("input[name='utype']:checked").val();

  //alert(user_type);
  
  
$.ajax({
      url:"userlogin.php",
      type:'post',
      data: {user_firstname:user_firstname,
        user_middlename:user_middlename,
        user_lastname:user_lastname,
        user_email: user_email,
        user_mobile: user_mobile,
        user_password:user_password,
        user_type:user_type},

        success:function(data,status){
          alert(data);
          alert("suce");
        }
    });

  
  }

function action_signup(){
    var user_loginemail=$('#user_loginemail').val();
    var user_loginpassword = $('#user_loginpassword').val();


    if(user_loginemail != "" && user_loginpassword != ""){
    
     $.ajax({
      url:"userlogin.php",
      type:"post",
      data: {user_loginemail:user_loginemail,
        user_loginpassword:user_loginpassword
      },

        success:function(data,status){
          alert(data);
          alert("loginsucess");

          if(data === "Found Data"){
            window.open('dashboard.php');
          }else{
            alert("Login Failed");
          }
          
        }
        });

  }else if(user_loginemail === "" && user_loginpassword === ""){
    alert("empty email & password");
  }else if(user_loginemail === "" ){
    alert("empty email");
  }
    else{
    alert("emptypass");
  }
}
  

</script>
</html>

<?php

?>
