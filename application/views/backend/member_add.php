 <?php  if(!isset($currentID)){ $currentID='';}
		if(!isset($name)){ $name ='';}
		if(!isset($phone)){ $phone ='';}
		if(!isset($line)){ $line ='';}
		if(!isset($email)){ $email ='';}
		if(!isset($password)){ $password ='';}
?>  
<div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                           
                            <h4 class="page-title">Member Data</h4>
                            <br>
							<div class="row">
                    			<div class="col-sm-12">
									<div class="card m-b-30 card-body">
										<h5 class="card-title">
											<div class="progress mb-0" style="display: none">
										<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
										</div>
                                                                                    <div class="pull-right">
                                                             <?php if($currentID!=''){?>
								<button type="button" class="btn btn-success btn-sm" onClick="window.location.href='<?php echo base_url('Control2/member_add')?>'"><i class="fa fa-plus"></i> Add Member</button> 
						    &nbsp;&nbsp;
                                                             <?php }?>
								<button type="button" class="btn btn-info btn-sm" onClick="window.location.href='<?php echo base_url('Control2/member')?>'">Back</button></div>
										</h5>
						<form enctype="multipart/form-data" id="memberForm" name="memberForm">
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-6">
									<input type="text" id="name" name="name" class="form-control form-control-sm" value="<?php echo $name?>" >
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">Password</label>
								<div class="col-sm-6">
                                                                    <input type="password" id="password" name="password" class="form-control form-control-sm" value="" >
                                                                    <input type="hidden" id="passwordold" name="passwordold" value="<?php echo $password?>">
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">Confirm Password</label>
								<div class="col-sm-6">
                                                                    <input type="password" id="Confirmpassword" name="Confirmpassword" class="form-control form-control-sm" onchange="confirmpass(this.value)">
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">E-mail</label>
								<div class="col-sm-6">
                                                                    <input type="text" id="email" name="email" class="form-control form-control-sm" value="<?php echo $email?>" onchange="checkmail(this.value)">
                                                                    <input type="hidden" id="emailold" value="<?php echo $email?>">
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">Phone</label>
								<div class="col-sm-6">
                                                                    <input type="text" id="phone" name="phone" class="form-control form-control-sm" value="<?php echo $phone?>" >
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						 <div class="form-group row">
							  <label class="col-sm-2 col-form-label">Line</label>
								<div class="col-sm-6">
                                                                    <input type="text" id="line" name="line" class="form-control form-control-sm" value="<?php echo $line?>" >
								</div>
							   <div class="col-sm-4">	</div>
						</div>
						<div class="form-group row" >
							<div class="col-sm-6" style="text-align: center">
							<button type="button" class="btn btn-success btn-sm" onClick="Addmember()">Add / Edit Data</button>
							<input type="hidden" name="currentID" id="currentID" value="<?php echo $currentID?>">
							</div>
					</div>					
						</form>	
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div> <!-- end container -->
        </div>