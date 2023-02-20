<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<style type="text/css">   
.padding{padding: 10px;} section header{padding-bottom:0;} 
.card_tab{
	position:relative;
}
.card_tab .nav-tabs{
	border-bottom:0px;
}
.card_tab .nav-tabs li{
	padding:15px;
}
.card_tab .nav-tabs li a{
	color:#000;
	text-decoration:none;
}
.card_tab .tab-content{
	padding:0 15px;
}
.card_tab .form-control:focus{
	box-shadow:none;
	border-color:#ced4da;
}
.card_tab label{
	font-size:21px;
	display:block;
}
.card_tab .btn{
	display:table;
	margin:25px auto;
	width:200px;
}
.card_tab .btn-primary:focus{
	box-shadow:none;
}
.card_tab .tab-content>.active{
	opacity:1;
}
.card_tab select.form-control{
	font-size:14px;
}
</style>
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
<div class="container-fluid">
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="<?php echo(ADMINURL.'User/dashboard'); ?>">Home</a></li>
<li class="breadcrumb-item active"><?php echo $page_title; ?>       </li>
</ul>
</div>
</div>

<section>
<div class="container-fluid">
<!-- Page Header-->
<header> 
<h2 class="page-head-title"><?php echo $page_title; ?></h2> 
</header>
<div class="row">
<div class="col-lg-12">   		
  <div class="card">               
    <div class="card-body">
		<div class="card_tab">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#regis">Basic Detail</a></li>
				<li><a data-toggle="tab" href="#task1">Political Aspirations</a></li>
				<li><a data-toggle="tab" href="#task2">Personal Details</a></li>
				<li><a data-toggle="tab" href="#professional">Professional/Criminal Background</a></li>
			</ul>
			<div class="tab-content">
				
			 <!--Basic Details Opens --> 
			  <div id="regis" class="tab-pane fade in active">
				<form>
					<div class="row clearfix">
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="<?php echo $userArr['basic']['user_fullname']; ?>" placeholder="Name"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="email" class="form-control" value="" placeholder="Email Id"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Phone Number"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Whatsapp Number"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Voder Id"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group gen">
								<label>Gender</label>
								<input type="radio" name="gender" value="male"> <span>Male</span>
								<input type="radio" name="gender" value="female"> <span>Female</span>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Spouse’s Profession"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Permanent Address"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<label for="state">State</label>
									  <select class="form-control" id="state">
										<option>State 1</option>
										<option>State 2</option>
										<option>State 3</option>
										<option>State 4</option>
									  </select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<label for="district">District</label>
									  <select class="form-control" id="district">
										<option>District 1</option>
										<option>District 2</option>
										<option>District 3</option>
										<option>District 4</option>
									  </select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Instagram Presence"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Block"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Panchayat"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<label for="assembly">Assembly Constituency</label>
								<select class="form-control" id="assembly">
									<option>Assembly Constituency 1</option>
									<option>Assembly Constituency 2</option>
									<option>Assembly Constituency 3</option>
									<option>Assembly Constituency 4</option>
								</select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<label>Date:</label> <input type="text" class="form-control" id="datepicker" value="01/01/2010">
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Do you live in Rural or Urban Area?"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Are you currently associated with any political party?"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Party Name"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Select your position in the party"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="button" class="btn btn-primary" value="Submit"/>
							</div>
						</div>
					</div>
				</form>
			  </div>
			  <!--Basic Details Closes --> 

			  <!-- Political Aspirations Opens-->
			  <div id="task1" class="tab-pane fade">
				<form>
					<div class="row clearfix">								
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Level of election that you want to contest?"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Constituency from where you want to contest?"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Year in which you want to contest?"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="button" class="btn btn-primary" value="Submit"/>
							</div>
						</div>
					</div>
				</form>
			  </div>
			  <!-- Political Aspirations Closes-->
			  <!-- Personal Detail Opens-->
			  <div id="task2" class="tab-pane fade">
				<form>
					<div class="row clearfix">								
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Father's Name"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Father’s Profession"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Mother’s Name"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Mother’s Profession "/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Spouse’s Name "/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Spouse’s Profession "/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Facebook Presence"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Twitter Presence"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Instagram Presence"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Youtube Presence"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="button" class="btn btn-primary" value="Submit"/>
							</div>
						</div>
					</div>
				</form>
			  </div>
			  <!-- Professional Section Opens -->
			  <div id="professional" class="tab-pane fade">						
				<form>
					<div class="row clearfix">								
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Profession"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Profession and Position of Responsibility"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Years of experience "/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Location of work / work area"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Political Party Inclination and Previous Involvement "/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Previous elections contested, If any "/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Current Political dynamics in the constituency"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Other leaders who wish to contest from choosen constituency"/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" value="" placeholder="Criminal charges, If any "/>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12">
							<div class="form-group">
								<input type="button" class="btn btn-primary" value="Submit"/>
							</div>
						</div>
					</div>
				</form>
			  </div>
			  <!-- Professional Section CLose -->

			</div>
		</div>     
    </div>
  </div>
</div>         
</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
