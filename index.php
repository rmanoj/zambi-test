
<?php 
session_start();

if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==1){
	header('location:dashboard.php');
}else if(isset($_SESSION['user_type'])&&$_SESSION['user_type']==2){
		header('location:staff_profile.php');
}

include('header.php'); ?>
 
  
<div class="span12">
					 
					<div class="box-content">
                  	<div class="row-fluid">
                        <div class="row-fluid sortable ui-sortable">
				<div class="box span6">
					<div class="box-header well" data-original-title="">
						<h2><i class="icon-pencil"></i> New user register here</h2>
					 </div>


					<div class="box-content">
                  	<div class="row-fluid">
                        
                <legend>
                </legend>
					 
					 
						<form class="form-horizontal">
						 
                                <!--Name-->
                          
							<div class="control-group">
							<label class="control-label" for="typeahead">First Name</label>
							<div class="controls">
						    <input type="text" placeholder="first name" name="staff_fname" required class="span6 typeahead" id="typeahead">
							</div>
							</div>

                                  <!--email id-->	
							<div class="control-group">
							<label class="control-label" for="typeahead">email Id</label>
							<div class="controls">
						    <input type="email" name="staff_email"  placeholder="name@gmail.com" class="span6 typeahead" id="typeahead">
							</div>
							</div>

		                    
		                    <!--phone number-->	
							<div class="control-group">
							<label class="control-label" for="typeahead">Phone Number</label>
							<div class="controls">
						    <input type="text" name="staff_phone" required placeholder="phone number" class="span6 typeahead" id="typeahead">
							</div>
							</div>

 						    <!--college id-->	
							<div class="control-group">
							<label class="control-label" for="typeahead">College Id</label>
							<div class="controls">
						    <input type="text" name="staff_college_id" placeholder="College Id" class="span6 typeahead" id="typeahead" >
							</div>
							</div>




							  <!--department-->	
							<div class="control-group">
							<label class="control-label" for="typeahead">Department</label>
							<div class="controls">
						    <input type="text"  name="staff_department" placeholder="department" class="span6 typeahead" id="typeahead">
							</div>
							</div>


 							<!--designation-->
							
							 <div class="control-group">
								<label class="control-label" for="selectError">Designation</label>
								<div class="controls">
								  <select id="selectError" name="staff_designation">
									<option>Professor</option>
									<option>Assistant Professor</option>
									<option>Lecturer</option>
									<option>Non-teaching staff</option>
								  </select>
								</div>
							  </div>



						</form>
					</div>
				</div><!--/span-->

			</div><!--/row-->


                                       
                 
				







				<!--Login Form-->
				<div class="box span6">
					<div class="box-header well" data-original-title="">
						<h2><i class="icon-lock"></i> Login</h2> 
					</div>
					<div class="box-content">
                  	<div class="row-fluid">
                         
				 	<div class="well span12 center login-box">
					 <legend>
                </legend>
					

					<?php 
					
					       
							

                     

                    if(isset($_GET['loginerr'])&&$_GET['loginerr']==0){

                      print('<div class="alert alert-error">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Oops</strong> Wrong user name or password
						</div>');

                    }else{

                    			  
                     
							if(isset($_GET['nouser'])&&$_GET['nouser']=='deny'){
 							print('<div class="alert alert-error">
									   Please login with your Username and Passwords to continue.
					                   </div>');
                           	}
							else{
 							print('<div class="alert alert-info">
									   Please login with your Username and Password.
					                   </div>');
                           	}
                    
                    
                    }
                     

                    

					?>
					<form class="form-horizontal" action="login_validate.php" method="post">
						<fieldset>
							<div class="input-prepend" title="Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large  " required name="username" id="username" type="text" placeholder="username" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large" required name="password" id="password" type="password" placeholder="password" />
							</div>
							<div class="clearfix"></div>
                            
							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>



							<p class="center span5">
							<button type="submit" class="btn btn-primary">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			         
                    </div>                   
                  </div>
				</div><!--/span-->
			</div>

					

			</div><!--/row-->
                    </div>                   
                  </div>

              </center>
				</div>




<?php include('footer.php'); ?>