 <!-- Start footer -->
 <footer class="container-fluid bg-dark text-white text-center p-1">
    <small class="text-white ">
      Copyright &copy; 2022 || Designed by Elearning || <a href=""  data-bs-toggle="modal" data-bs-target="#AdminLoginModalCenter">Admin login</a>
    </small>
  </footer>
  
  <!-- End footer -->

 
<!-- Start student Registeration -->
<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registeration</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
     <!--  Start student registeration form -->
     <div id ="success" class="alert alert-success alert-dismissible fade" role="alert">
  <strong>Success:</strong>  Form submitted successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     <div id = "failer" class="alert alert-danger alert-dismissible fade" role="alert">
  <strong>Error:</strong>  Form has not been  submitted.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<form action="" method ="POST" id ="stuRegForm">
<div class="mb-3">
  <label for="stuname" class="form-label"><i class="fas fa-user"></i> Name</label>
  <span id ="errormessage1"> </span>
  <input type="text" class="form-control" id="stuname" name = "stuname" placeholder="Enter your name">
  
  <small id="validname"   class="form-text invalid-feedback text-danger">
    User name must be 2-10 characters long include numbers,letters and start with letter.
  </small>
  <!-- <div class="invalid-feedback">
      Looks good!
    </div> -->
</div>
<div class="mb-3">
  <label for="stuemail" class="form-label"><i class="fas fa-envelope"></i> Email</label>
  <span id ="errormessage2"> </span>

  <input type=" Email" class="form-control" id="stuemail" name ="stuemail"placeholder="Enter your email">
  <small id="validname"   class="form-text invalid-feedback text-danger">
    Please Enter a valid email eg. example@mail.com
  </small>
</div>
<div class="mb-3">
  <label for="stupass" class="form-label"><i class="fas fa-key"></i> Password</label>
  <span id ="errormessage3"> </span>

  <input type="password" class="form-control" id="stupass" name = "stupass"placeholder="Enter your password">
  <small id="validname"   class="form-text invalid-feedback text-danger">
    User name must be 2-10 characters long include numbers,letters and start with letter.
  </small>
</div>
<div class="mb-3">
  <label for="stucpass" class="form-label"> <i class="fas fa-key"></i> Confirm Password</label>
  <span id ="errormessage4"> </span>

  <input type="password" class="form-control" id="stucpass" name = "stucpass"placeholder="Enter your password again ">
  <small id="validname"   class="form-text invalid-feedback text-danger">
    User name must be 2-10 characters long include numbers,letters and start with letter.
  </small>
</div>
</form>
<!-- End student registeration form -->
      </div>
      <div class="modal-footer">
        <span id ="successMsg"></span>
        <button type="button" id ="signup" class="btn btn-primary clickw" onclick="addstu()" >Sign Up</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--  End student Registeration  Modal-->

<!-- Start student  login Modal -->
<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student  Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="clearstuloginform()"></button>
      </div>
      <div class="modal-body">
     <!-- start student login form -->
<form action="" id = "stuLoginForm">

<div class="mb-3">
  <label for="stuemail" class="form-label"><i class="fas fa-envelope"></i> Email</label>
  <input type=" Email" class="form-control" id="stulogemail" name ="stulogemail"placeholder="Enter your email">
  
</div>
<div class="mb-3">
  <label for="stupass" class="form-label"><i class="fas fa-key"></i> Password</label>
  <input type="password" class="form-control" id="stulogpass" name = "stulogpass"placeholder="Enter your password">
</div>
</form>
<!-- End student login form -->
      </div>
      <div class="modal-footer">
        <!-- <small id="faillogmsg"></small> -->
        <small id="successlogmsg"></small>
        <button type="button" class="btn btn-primary" id = "stuloginbtn" onclick="stulogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick ="clearstuloginform()">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--  End student  Login Modal -->

<!-- Start  Admin  login Modal -->
<!-- Modal -->
<div class="modal fade" id="AdminLoginModalCenter" tabindex="-1" aria-labelledby="AdminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AdminLoginModalCenterLabel"> Admin  Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="clearadminloginform()"></button>
      </div>
      <div class="modal-body">
     <!-- start  Admin login form -->
<form action="" id = "AdminLoginForm">

<div class="mb-3">
  <label for="Adminemail" class="form-label"><i class="fas fa-envelope"></i> Email</label>
  <input type="Email" class="form-control" id="Adminlogemail" name ="adminlogemail"placeholder="Enter your email">
  
</div>
<div class="mb-3">
  <label for="Adminpass" class="form-label"><i class="fas fa-key"></i> Password</label>
  <input type="password" class="form-control" id="Adminlogpass" name = "adminlogpass"placeholder="Enter your password">
</div>
</form>
<!-- End  Admin login form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id = "Adminloginbtn" onclick="adminlogin()">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearadminloginform()">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--  End  Admin  Login Modal -->

  <script src="Js/bootstrap.min.js"></script>
  <script src="Js/popper.min.js"></script>
  <script src="Js/all.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script><script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  
  <script src="Js/ajaxRequest.js"></script>
  <script src="Js/adminAjaxRequest.js"></script>

</body>

</html>