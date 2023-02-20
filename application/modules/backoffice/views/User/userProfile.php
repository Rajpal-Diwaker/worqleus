<style type="text/css">   .padding{padding: 10px;} section header{padding-bottom:0;} 
.card_profile{
	position:relative;
	width:200px;
	height:200px;
	overflow:hidden;
	border-radius: 50%;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.1);
	margin:25px auto;
	background:#fff;
}
.chat_section{
  display: inline-block;
  width:100%;
  margin:20px 0px;
}
.card_profile img{
	position:relative;
	transform:translate(-50%,-50%);
	top:50%;
	left:50%;
	max-width:100%;
}
.card-detail{
	position:relative;
}
.card-detail .card-text{
	position:relative;
	padding-top:20px;
}
.card-text h5{
	font-size:18px;
	font-weight:bold;
	margin-bottom:10px;
	color: #f79b41;
}
.card-text p{
	font-size:14px;
	margin:0;
}
.card-text h6{
	font-size:16px;
	font-weight:normal;
	margin:15px 0 5px 0;
}
.bdrRgt{
	border-right:1px solid #c2c2c2;
}
.card-text a{
	text-decoration:none;
}
.card-text .icon{
	position:relative;
	width:30px;
	height:30px;
	border-radius:50%;
	background:#555;
	display:inline-block;
}
.card-text .fa{
	position:absolute;
	transform:translate(-50%,-50%);
	top:50%;
	left:50%;
	color:#fff;
}
.card-text .edit_card {
    position: absolute;
    top: -15px;
    right: 5px;
}
a.task_list:hover{
text-decoration: none;
}
.page-head-title{
	position:relative;
}
.ask_pk{
background: #555;
    color: #fff;
    padding: 1px 10px;
    font-size: 15px;
    position: absolute;
    right: 0;
}
.ask_pk:focus,.ask_pk:hover{
	color:#fff;
}
@media (max-width:767px){
.card_profile{
	width:125px;
	height:125px;
}
.card-text h5{
	margin:10px 0;
}
.card-text h6{
	font-size:14px;
}
.bdrRgt{
	border-right:0px;
}
}
.locked_inactive,.unlocked_active{
  font-size: 12px;
 border:0;
}
.locked_active,.unlocked_inactive{
   font-size: 12px;
  border:0;
}
.panel-body {
    background: #e6eaea;
}
.data_numbering p strong{
    color: #000;
    width: 175px;
    display: inline-block;
}
.data_numbering p {
  font-size:18px;
  color: #f79e3c!important;
}
</style>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/scroller/2.0.0/css/scroller.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>  
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
            <h2 class="page-head-title"><?php echo $page_title; ?><a style="float: right;" class="ask_pk" href="<?php echo(ADMINURL.'User/askPk/'.$userArr['basic']['user_id']); ?>">Ask PK</a></h2>
          </header>
          <div class="row">
            <div class="col-lg-12">   
            	<!--
				<div class="row clearfix" style="position: relative;">
					<div class="card_profile">
						<?php if(!empty($userArr['basic']['user_image'])){ ?>
							<img src="<?php echo $userArr['basic']['user_image']; ?>" alt=""/>
						<?php }else{ ?>
							<img src="<?php echo(ADMIN.'/img/logo.jpg'); ?>" alt=""/>
						<?php } ?>
					</div>
					<a href="<?php echo(ADMINURL.'User/UserTaskList/'.$userArr['basic']['user_id']); ?>" class="task_list" style=" border-radius:5px;position: absolute;top:0;right:20px;background: #555; color:#fff;padding: 5px 10px;">Task List</a>
				</div>	  -->		
				<?php //echo"<pre>"; print_r($userArr); die; ?>
              <div class="card">               
                <div class="card-body">
					<div class="card-detail">
						<div class="card-text">
							<div class="row clearfix">
								<div class="col-xs-12 col-sm-3 col-md-3 bdrRgt">
									<a href="<?php echo(ADMINURL.'User/editBasicdetail/'.$userArr['basic']['user_id']); ?>">
										<div class="edit_card clearfix">
											<span class="icon"><i class="fa fa-pencil"></i></span>
										</div>
									</a>
									<h5>Basic Details</h5>		
									<h6><strong>Name</strong></h6>
									<p><?php echo $userArr['basic']['user_fullname']; ?></p>

									<h6><strong>Email Id</strong></h6>
									<p><?php echo $userArr['basic']['user_email']; ?></p>

									<h6><strong>Phone Number</strong></h6>
									<p><?php echo $userArr['basic']['country_code'].'-'.$userArr['basic']['user_mobile']; ?></p>

									<h6><strong>Whatsapp Number</strong></h6>
									<p><?php echo $userArr['basic']['user_whatsapp']; ?></p>

									<h6><strong>Voder Id</strong></h6>
									<p><?php echo $userArr['basic']['user_voterid']; ?></p>

									<h6><strong>Gender</strong></h6>
									<p><?php echo $userArr['basic']['user_gender']; ?></p>

									<h6><strong>Permanent Address</strong></h6>
									<p><?php echo $userArr['basic']['user_address']; ?></p>

									<h6><strong>State</strong></h6>
									<p><?php echo $userArr['basic']['state_name']; ?></p>

									<h6><strong>District</strong></h6>
									<p><?php echo $userArr['basic']['district_name']; ?></p>

									<h6><strong>Block</strong></h6>
									<p><?php //echo $userArr['basic']['user_fullname']; ?></p>

									<h6><strong>Panchayat</strong></h6>
									<p><?php //echo $userArr['basic']['user_fullname']; ?></p>

									<h6><strong>Assembly constituency</strong></h6>
									<p><?php echo $userArr['basic']['ac_name']; ?></p>

									<h6><strong>Date of Birth</strong></h6>
									<p><?php //echo $userArr['basic']['user_fullname']; ?></p>

									<h6><strong>Do you live in Rural or Urban Area?</strong></h6>
									<p><?php echo $userArr['basic']['region']; ?></p>

									<h6><strong>Are you currently associated with any political party?</strong></h6>
									<p><?php echo $userArr['basic']['party_associates']; ?></p>

									<h6><strong>Party Name</strong></h6>
									<p><?php echo $userArr['basic']['party_name']; ?></p>

									<h6><strong>Select your position in the party</strong></h6>
									<p><?php echo $userArr['basic']['party_position']; ?></p>

									<h6><strong>YIP Advocates</strong></h6>
									<p><?php echo $userArr['basic']['yip_advocates']; ?></p>

									<h6><strong>YIP Hosts</strong></h6>
									<p><?php echo $userArr['basic']['yip_hosts']; ?></p>

									<h6><strong>YIP Fellow</strong></h6>
									<p><?php echo $userArr['basic']['yip_fellow']; ?></p>

									<h6><strong>YIP Campus Ambassadors</strong></h6>
									<p><?php echo $userArr['basic']['yip_ambassador']; ?></p>
						
								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 bdrRgt">
									<a></a>
									<h5>Profile Pic</h5>
									<?php if(!empty($userArr['basic']['user_image'])){ ?>
										<img style="max-width: 150px;" src="<?php echo $userArr['basic']['user_image']; ?>" alt=""/>
									<?php }else{ ?>
										<img style="max-width: 150px;" src="<?php echo(ADMIN.'/img/logo.jpg'); ?>" alt=""/>
									<?php } ?>
									<br>
									<a href="<?php echo(ADMINURL.'User/editPersonaldetail/'.$userArr['basic']['user_id']); ?>">
										<div class="edit_card clearfix">
											<span class="icon"><i class="fa fa-pencil"></i></span>
										</div>
									</a>
									<h5>Personal Details</h5>
									<h6><strong>Father's Name</strong></h6>
									<p><?php echo $userArr['personal']['father_name']; ?></p>

									<h6><strong>Father’s Profession</strong></h6>
									<p><?php echo $userArr['personal']['father_profession']; ?></p>

									<h6><strong>Mother’s Name</strong></h6>
									<p><?php echo $userArr['personal']['mother_name']; ?></p>

									<h6><strong>Mother’s Profession</strong></h6>
									<p><?php echo $userArr['personal']['mother_profession']; ?></p>

									<h6><strong>Spouse’s Name</strong></h6>
									<p><?php echo $userArr['personal']['spouse_name']; ?></p>

									<h6><strong>Spouse’s Profession</strong></h6>
									<p><?php echo $userArr['personal']['spouse_profession']; ?></p>

									<h6><strong>Facebook Presence</strong></h6>
									<p><?php echo $userArr['personal']['fb_friend']; ?></p>

									<h6><strong>Twitter Presence</strong></h6>
									<p><?php echo $userArr['personal']['tw_follower']; ?></p>

									<h6><strong>Instagram Presence</strong></h6>
									<p><?php echo $userArr['personal']['ins_follower']; ?></p>

									<h6><strong>Youtube Presence</strong></h6>
									<p><?php echo $userArr['personal']['yt_subscribers']; ?></p>

								</div>
								<div class="col-xs-12 col-sm-3 col-md-3 bdrRgt">
									<a href="<?php echo(ADMINURL.'User/editCriminaldetail/'.$userArr['basic']['user_id']); ?>">
										<div class="edit_card clearfix">
											<span class="icon"><i class="fa fa-pencil"></i></span>
										</div>
									</a>
									<h5>Political Background </h5>

									<h6><strong>Political party inclination & previous involvement</strong></h6>
									<p><?php echo $userArr['political']['previous_inclination']; ?></p>	

									<h6><strong>Previous elections contested if any</strong></h6>
									<p><?php echo $userArr['political']['previously_contested']; ?></p>

									<h6><strong>Current Political dynamics in the constituency</strong></h6>
									<p><?php echo $userArr['political']['political_dynamics']; ?></p>	

									<h6><strong>Other leaders who wish to contest from choosen constituency</strong></h6>
									<p><?php echo $userArr['political']['other_leader']; ?></p>

									<h6><strong>Criminal charges, If any </strong></h6>
									<p><?php echo $userArr['political']['criminal_charges']; ?></p>

									<h6><strong>Criminal charges detail, If any </strong></h6>
									<p><?php echo $userArr['political']['criminal_detail']; ?></p>

								<div class="box" style="position: relative;">
									<a href="<?php echo(ADMINURL.'User/editProfessiondetail/'.$userArr['basic']['user_id']); ?>">
										<div class="edit_card clearfix" style="top:15px;">
											<span class="icon"><i class="fa fa-pencil"></i></span>
										</div>
									</a>
									<h5>Professional Details</h5>		

									<h6><strong>Profession</strong></h6>
									<p><?php echo $userArr['profession']['profession']; ?></p>	

									<h6><strong>Profession and Position of Responsibility</strong></h6>
									<p><?php echo $userArr['profession']['position']; ?></p>	

									<h6><strong>Years of experience</strong></h6>
									<p><?php echo $userArr['profession']['experience']; ?></p>	

									<h6><strong>Location of work / work area</strong></h6>
									<p><?php echo $userArr['profession']['work_location']; ?></p>		
								</div>

								</div>
								<div class="col-xs-12 col-sm-3 col-md-3">								<a href="<?php echo(ADMINURL.'User/editEducationdetail/'.$userArr['basic']['user_id']); ?>">
										<div class="edit_card clearfix">
											<span class="icon"><i class="fa fa-pencil"></i></span>
										</div>
									</a>
									<h5>Educational Details</h5>		

									<h6><strong>Educational Qualification</strong></h6>
									<p><?php echo $userArr['education']['qualification']; ?></p>

									<h6><strong>College Name</strong></h6>
									<p><?php echo $userArr['education']['college']; ?></p>		

								<div class="box" style="position: relative;">
									<a href="<?php echo(ADMINURL.'User/editAspirationdetail/'.$userArr['basic']['user_id']); ?>">
										<div class="edit_card clearfix">
											<span class="icon"><i class="fa fa-pencil"></i></span>
										</div>
									</a>
									<h5>Political Aspiration Details</h5>		

									<h6><strong>Level of election that you want to contest?</strong></h6>
									<p><?php echo $userArr['aspiration']['election_level']; ?></p>

									<h6><strong>Constituency from where you want to contest?</strong></h6>
									<p><?php echo $userArr['aspiration']['constituency']; ?></p>

									<h6><strong>Year in which you want to contest?</strong></h6>
									<p><?php echo $userArr['aspiration']['year']; ?></p>	
								</div>
						
								</div>
						
							</div>
							<!--
							<a href="<?php echo(ADMINURL.'User/editUser/'.$userArr['basic']['user_id']); ?>"><div class="edit_card clearfix">
								<span class="icon"><i class="fa fa-pencil"></i></span>
							</div></a> -->
						</div>
					</div>     
                </div>
              </div>
            </div>         
          </div>
        </div>


        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h2 class="page-head-title">User Dashboard</h2> 
          </header>
          <div class="row">
            <div class="col-lg-12">   
						
				<?php //echo"<pre>"; print_r($userArr); die; ?>
              <div class="card">               
                
              	<div class="card-body data_numbering">
				  <div class="row">
				      <div class="col-md-6">
						  <p>
						 <strong>Activity Posted:</strong> <?php echo $dashboardArr['activity_posted'];  ?>
					   </p>
					   <p>
						 <strong>Activity Approved:</strong> <?php echo $dashboardArr['activity_approved'];  ?>
					   </p>
					   <p>
						<strong>Event Attended:</strong> <?php echo $dashboardArr['event_attended'];  ?>
					   </p>
					   <p>
						<strong>Event Organised:</strong> <?php echo $dashboardArr['event_organised'];  ?>
					   </p>
					   <p>
						<strong>Video Watched:</strong> <?php echo $dashboardArr['video_watched'];  ?>
					   </p>
					  </div>
					   <div class="col-md-6">
					   <p>
						<strong>Articles Read:</strong> <?php echo $dashboardArr['articles_read'];  ?>
					   </p>
					   <p>
						 <strong>Refereal Used:</strong> <?php echo $dashboardArr['referal_used'];  ?>
					   </p>
					   <p>
						<strong>Ongoing Task:</strong> <?php echo $dashboardArr['ongoing_task'];  ?>
					   </p>
					   <p>
					   <strong>Closed Task:</strong> <?php echo $dashboardArr['closed_task'];  ?>
					   </p>
					   </div>
				  </div>
                </div>


              </div>
            </div>         
          </div>
        </div>


    	<?php
        $newsmanagement = $this->session->userdata('news_management');
        $news_management = explode(',',$newsmanagement); 
      	?>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h2 class="page-head-title">User Activity</h2> 
          </header>
          <div class="row">
            <div class="col-lg-12">   
						
				<?php //echo"<pre>"; print_r($userArr); die; ?>
              <div class="card">               
                
              	<div class="card-body">
                  <?php if(empty($postArr)){  ?>
                    <h2>Sorry No result found</h2>
                  <?php }else{ ?>
                  <div id="searchdata">
                  <div class="table-responsive">
                    <table id="example">
                      <thead>
                        <tr>
                          <th style="width:150px;">Title</th>
                          <th>Added By</th>
                          <th style="width:150px;">Description</th>
                          <th>Created On</th>
                          <?php 
                            if($this->session->userdata('admin_type') == 'Super Admin'){
                          ?>
                          <th>Status</th>
                          <?php 
                           }
                          if($newsmanagement =='all' || ($newsmanagement !='none' && ((in_array('edit', $news_management))|| (in_array('delete', $news_management))))){
                          ?>
                          <th>Action</th>
                        <?php } ?>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($postArr as $value){ ?>
                        <tr>
                          <td><?php echo $value['feed_title_en'] ?></td>
                          <td><?php echo $value['editor_name'] ?></td>
                          <td><?php echo $value['feed_content_en'] ?></td>
                          <td><?php echo $value['feed_created_on'] ?></td>
                          <?php 
                            if($this->session->userdata('admin_type') == 'Super Admin'){
                          ?>
                          <td>
                            <div class="btn-group" id="toggle_event_editing<?php echo $value['feed_id']; ?>">
                            <?php if($value['feed_status'] == 'rejected'){$class1 = "locked_active"; $class2="unlocked_inactive";}
                            if($value['feed_status'] == 'approved'){$class1 = "locked_inactive"; $class2="unlocked_active";}         
                            ?>  
                            <button id="first_<?php echo $value['feed_id']; ?>" data-id1='{"id":1,"user_id":"<?php echo $value['feed_id']; ?>"}' type="button" class="btn btn-block <?php echo $class1; ?>">Reject</button>
                          
                            <button id="second_<?php echo $value['feed_id']; ?>" data-id2='{"id":2,"user_id":"<?php echo $value['feed_id']; ?>"}' type="button" class="btn btn-block <?php echo $class2; ?>">Approved</button>
                            </div>
                          </td>
                        <?php } ?>
                          <td>
                            <a class="ac-bt" target="_blank" href="<?php echo(ADMINURL.'News/viewFeed/'.$value['feed_id']); ?>">
                              <i class="fa fa-eye" style="font-size:18px"></i>
                            </a>
                            <?php
                            if($newsmanagement =='all' || ($newsmanagement !='none' && (in_array('edit', $news_management)))){
                            ?>
                            <a class="ac-bt" target="_blank" href="<?php echo(ADMINURL.'News/editPost/'.$value['feed_id']); ?>">
                              <i class="fa fa-edit" style="font-size:18px"></i>
                            </a> 
                          <?php } if($newsmanagement =='all' || ($newsmanagement !='none' && (in_array('delete', $news_management)))){  ?>
                            <a  onclick="deleteuser(<?php echo $value['feed_id']; ?>);" class="ac-bt">
                              <i class="fa fa-trash-o" style="font-size:18px"></i>
                            </a>
                          </td>
                        <?php } ?>
                        </tr>
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
                
                <?php } ?>
                </div>


              </div>
            </div>         
          </div>
        </div>



        <?php
        $taskmanagement = $this->session->userdata('task_management');
        $task_management = explode(',',$taskmanagement); 
      	?>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h2 class="page-head-title">User Mentorship Task</h2> 
          </header>
          <div class="row">
            <div class="col-lg-12">   
						
				<?php //echo"<pre>"; print_r($userArr); die; ?>
              <div class="card">               
                
              	<div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Task Name</th>
                          <th>Assigned On</th>
                          <th>Completed</th>
                          <th width="15%">Send Notification</th>
                          <?php 
                          // if($taskmanagement =='all' || ($taskmanagement !='none' && ((in_array('edit', $task_management))|| (in_array('delete', $task_management))))){
                          ?>
                           <?php 
                             if($value['identifier'] =='dynamic form'){ ?>
                          <th>Action</th>
                        <?php } ?>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($taskArr as $value){ ?>
                        <tr>
                          <td><?php echo $value['task_name_en']; ?></td>
                        
                          <td><?php echo $value['created_on']; ?></td>
                          <td><?php echo $value['isCompleted']; ?></td>
                          <td><a onclick="viewTaskNotify(<?php echo $value['task_id'];?>,<?php echo $value['user_id']; ?>)" class="ac-bt" target="_blank" href="JavaScript:void(0);">
                              <i class="fa fa-bell" style="font-size:18px"></i>
                            </a>                             
                          </td>
                          <?php 
                          if($taskmanagement =='all' || ($taskmanagement !='none' && ((in_array('edit', $task_management))|| (in_array('delete', $task_management))))){
                          ?>
                          <td>
                           <?php 
                             if($value['identifier'] =='dynamic form'){ ?>
                               <a class="ac-bt" target="_blank" href="<?php echo (ADMINURL.'Task/viewTaskDetail/'.$value['task_id'].'/'.$value['user_id']); ?>">
                              <i class="fa fa-eye" style="font-size:18px"></i>
                            </a>
                             <?php }else{
                              
                             } 
                            ?>
                           
                            
                          </td> 
                        <?php } ?>
                        </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>


              </div>
            </div>         
          </div>
        </div>


    <div class="modal fade" id="viewTaskNotify" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>
        <div class="modal-body">
          <div class="form-group">
            <form id="notifyform">
            <label><strong>Message English</strong></label>
            <input type="hidden" name="task_id" id="task_id" value="<?php echo $this->uri->segment(4); ?>">
            <input type="hidden" name="user_id" id="user_id" value="">
            <textarea rows="5" class="form-control" name="message_en" id="message_en"></textarea>
            <span class="small" id="message_en-error" style="color:red;"></span>
            <label><strong>Message Hindi</strong></label>
            <textarea rows="5" class="form-control" name="message_hi" id="message_hi"></textarea>
            <span class="small" id="message_hi-error" style="color:red;"></span>
            <button style="margin-top: 30px;" class="btn btn-space btn-primary" type="button" id="sendNotification">Send Notification</button>
            <span class="small" id="success-msg" style="color:green;"></span>
            <span class="small" id="error-msg" style="color:red;"></span>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>


</section>


<script type="text/javascript">
$(document).ready(function() {

$('#example,#example2').DataTable( {
    ordering: true,
    searching: true,
} );
} );

  $(document).ready(function(e){
    $(this).on('click','button',function(){
      var eleid = $(this).attr('id');
      var idarr = eleid.split("_");
    //  console.log(idarr[0]);
      if(idarr[0] == "first"){
        //$(".locked_inactive").css('background-color: red');
        $(this).css({'background-color': '#EF5350','color': '#fff'});
    $("#second_"+idarr[1]).css({'background-color':'rgb(221, 221, 221)','color':'#000'});
        var data = {};
        data.status = $('#'+eleid).data('id1').id;
        data.episode_id = $('#'+eleid).data('id1').user_id;
        $.ajax({
          type : "POST",
          url : "<?php echo  (ADMINURL.'News/changePostStatus/'); ?>",
          data : data,
          cache : false,
          dataType : 'text',
          success : function (res){
            console.log(res);
          }
          
        }); 
      }else if(idarr[0] == "second"){
        //$(".locked_active").css('background-color: green');
        $(this).css({'background-color': '#4ea2d0','color': '#fff'});
        $("#first_"+idarr[1]).css({'background-color':'rgb(221, 221, 221)','color':'#000'});
        var data = {};
        data.status = $('#'+eleid).data('id2').id;
        data.episode_id = $('#'+eleid).data('id2').user_id;
        $.ajax({
          type : "POST",
          url : "<?php echo  (ADMINURL.'News/changePostStatus/'); ?>",
          data : data,
          cache : false,
          dataType : 'text',
          success : function (res){
            console.log(res);
          }
        }); 
      }
    });
  });

 $("#sendNotification").on('click', function(event) {
    var formStatus = true;
    if ($( "#message_en" ).val() === "" && $( "#message_hi" ).val() === "") {
      formStatus = false;
      $( "#message_hi-error" ).text( "Please enter Message." ).show().fadeOut( 5000 );
    }
    if (!formStatus) {
      event.preventDefault();
    } else {  
    //  alert('1');
      var myForm = document.getElementById('notifyform');
      formData = new FormData(myForm);

      $.ajax({
        type: "POST",
        url: "<?php echo  (ADMINURL.'Task/sendNotification/'); ?>",
        data: formData,
        processData: false,
        contentType: false,
        type: 'POST',
            //  dataType:'json',
        success: function (res) {  
          if (res == 1) {   
            $("#success-msg").text('Sent Successfully.').show().fadeOut( 10000 );
            $('#notifyform')[0].reset();  
          }
          else{
            $("#error-msg").text('Sorry something went wrong.').show().fadeOut( 5000 );
          }
        }
      });
    }
});

function viewTaskNotify(task, user) {
        $('#viewTaskNotify').modal('show');
        $('#user_id').val(user);
        $('#task_id').val(task);
    }
</script>