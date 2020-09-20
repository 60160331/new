	
<!DOCTYPE html>
<html lang="en">

	<head>
	
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
	   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	
	
  <link href="assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

  <!-- Fonts and icons -->
  <link href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png">
  </head>

	
  <body>
  <script>
  $(document).ready(function() {
    $('#example').DataTable();
} );
  </script>
 
  <div class="container-scroller">
	<div class="container-fluid page-body-wrapper">
	<?php
    include("header_Sys_admin.php")?>
		<!--space header-->
	    <div class="main-panel">
          <div class="content-wrapper">
             
			 <li class="nav-item sidebar-actions">
              <span class="nav-link">  
			
                </a>
              </span>
			  
            </li>
			 
			 
              <span class="nav-link">  
			
                </a>
              </span>
		
			 
			 
			<!--space header-->
			
			  <div class="card-header headC">
    <center style="color:white;"><h4><b>Manage Role</b><h4></center>
  </div>
			
			 <div class="card">
    <div class="card-body">
			
			   <form class="forms-sample">
			       <div class="data-table-area">
			<!---->
      
			<div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Company
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">SDM</a></li>
      <li><a href="#">SKD</a></li>
    </ul>
  </div>
      
  <div class="card-body">
							  <div class="table-responsive">
							  <table id="example" class="table table-hover ">
							  <thead>						  
								<tr>
                          <th><center>No</center></th>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Department</th>
                          <th>Role</th>
						  <th><center>Actions</center></th>
              
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><center>1</center></td>
						  <td>Jacob Jaidee.</td>
						  <td>AM</td>
						  <td>QA</td>
						  <td>QAP</td>                       
                         <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
						<td><center>2</center></td>
						  <td>Loling Jad</td>
						  <td>Sr.staff</td>
                          <td>PE</td>
						  <td>Creator</td>                          
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
                           <td><center>3</center></td>

						  <td>Kingkaew Kaewvaree.</td>
						  <td>Staff</td>
						  <td>PE</td>
						  <td>PE admin</td>                         
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
              <td><center>4</center></td>
						  <td>Timapron Warerat</td>
						  <td>Staff</td>
						<td>QA</td>
						  <td>QA admin</td>                        
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
                        <tr>
						<td><center>5</td>
						  <td>Jack Somsri</td>
						  <td>Sr.staff</td>
						  <td>QA</td>
						  <td>QAC</td>                        
              <center><td><center><button style ="background-color:#ecb100; border-color:#ecb100;" type="button" class="btn btn-sm btn-warning"data-toggle="modal" data-target="#exampleModal">
                         <img src="../assets/images/button/pencil.svg" class = "icon"/></button>
						 <button style ="background-color:#c2161c; border-color:#c2161c;" type="button" class="btn btn-sm btn-danger"data-toggle="modal" data-target="#mydelete">
             <img src="../assets/images/button/delete.svg" class = "icon" /></button></center></td></center>
                        </tr>
				
								
								
							  </tbody>
							</table>													
							</div>
						  </div>
			
			
</div>
<form>
			
			</div>
				
	
               
		</div>
<!---->
             
            </div>
			
	</div>

	</div>	
	   </div>
  </body>
  
  <style>
.headC{
	background-color: #b66dff;
	height: 45px;
}

.icon{
	max-height: 15px;
max-width: 25px;
width: 15px;
height: 25px;
}
</style>



<!--Data table -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>



<!-- Modal HTML -->
<!--confirm button-->
<div id="mydelete" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
									
				<h4 class="modal-title w-100">Are you sure to delete?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
      <button style ="background-color:#7eb73d; border-color:#7eb73d;" type="button" class="btn btn-danger">Yes</button>
				<button style ="background-color:#686868 ; border-color:#686868 ;"type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  
      <h3 class="modal-title" id="exampleModalLabel"><center>Edit Role</center></h3>
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Emp Code:</label>
            <input type="text" class="form-control" id="emp">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Name:</label>
            <input placeholder = "Kan Y." type="text" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Role :</label>
            <input placeholder = "QAP"type="text" class="form-control" id="role">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Change to :</label>
            <select class="form-control" id="role">
                  <option value="bkd">BKD</option>
                  <option value="qap">QAP</option>
                  <option value="qac">QAC</option>
</select>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
      <button style ="background-color:#7eb73d; border-color:#7eb73d;" type="button" class="btn btn-danger">Submit</button>
				<button style ="background-color:#686868 ; border-color:#686868 ;"type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

      </div>
    </div>
  </div>
</div>
<!--confirm button-->
<style>
<!--confirm button-->
body {
	font-family: 'Varela Round', sans-serif;
}
.modal-confirm {		
	color: #636363;
	width: 400px;
}
.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
	text-align: center;
	font-size: 14px;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -10px;
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -2px;
}
.modal-confirm .modal-body {
	color: #999;
}
.modal-confirm .modal-footer {
	border: none;
	text-align: center;		
	border-radius: 5px;
	font-size: 13px;
	padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
	color: #999;
}		
.modal-confirm .icon-box {
	width: 80px;
	height: 80px;
	margin: 0 auto;
	border-radius: 50%;
	z-index: 9;
	text-align: center;
	border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
	color: #f15e5e;
	font-size: 46px;
	display: inline-block;
	margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	min-width: 120px;
	border: none;
	min-height: 40px;
	border-radius: 3px;
	margin: 0 5px;
}
.modal-confirm .btn-secondary {
	background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
	background: #a8a8a8;
}
.modal-confirm .btn-danger {
	background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
	background: #ee3535;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
<!--confirm button-->
</style>

  
</html>