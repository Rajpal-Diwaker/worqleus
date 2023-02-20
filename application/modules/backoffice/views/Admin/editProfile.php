<style>
    .modal{max-height: 100%;background:none;box-shadow:none;}
</style>

      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title"><?php echo $page_title; ?></h2>
          <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb page-head-nav">
              <li class="breadcrumb-item"><a href="<?php echo(ADMINURL.'Admin/dashboard'); ?>">Home</a></li>
              <li class="breadcrumb-item"><a href="#"><?php echo $page_title; ?></a></li>
            </ol>
          </nav>
        </div>
        <div class="main-content container-fluid">
        <?php if(!empty($msg)){ ?>
            <div class="card-header">
                <h4><?php echo $msg; ?></h4>
            </div>  
        <?php } ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-body">
                  <form action="<?php echo(ADMINURL.'Admin/update_profiledata'); ?>"  method="post" enctype="multipart/form-data" onSubmit="return validateinput();" >
                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="fullname">Fullname</label>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <input id="fullname" type="text" class="form-control" value="<?php echo $userArr['fullname'] ?>" name="fullname"  autocomplete="off">
                        <span class="small" id="fullname-error" style="color:red;"></span>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-12 col-sm-3 col-form-label text-sm-right" for="email">Email</label>
                      <div class="col-12 col-sm-8 col-lg-6 email">
                        <input id="email" type="email" onkeyup="check_email_exists();" class="form-control" value="<?php echo $userArr['email'] ?>" name="email"  autocomplete="off">
                        <span class="small" id="email-error" style="color:red;"></span>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-12 col-sm-3 col-form-label text-sm-right">&nbsp;</div>
                      <div class="col-12 col-sm-8 col-lg-6">
                        <button class="btn btn-space btn-primary" type="submit">Update</button>
                      </div>
                    </div>
      
                  </form>
                </div>
              </div>
            </div>
          </div>
      
        </div>
      </div>            


    <button style="width:100%;" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Click here to Change Password</button>
    

 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Change Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form role="form" class="contact-form" action="" method="POST">
                <div class="modal-body padding-1">
                    <div class="msg">
                        <p id="error-msg" style="color:red;text-align:center;"></p>
                        <p id="success-msg" style="color:green;text-align:center;"></p>
                    </div>
                    <p class="padding-2">
                        <input type="password" id="oldpassword" name="oldpassword" class="form-control" placeholder="Old password">
                        <span class="small" id="oldpassword-error" style="color: red;"></span>
                    </p>
                    <p class="padding-2">
                        <input type="password" id="newpassword" name="newpassword" class="form-control" placeholder="New password">
                        <span class="small" id="newpassword-error" style="color: red;"></span>
                    </p>
                    <p class="padding-2">
                        <input type="password" id="confirmpassword" name="confirmpassword" class="form-control" placeholder="Confirm New password">
                        <span class="small" id="confirmpassword-error" style="color: red;"></span>
                    </p>
                </div>
                <div class="modal-footer padding-1">
                    <button id="password-change" class="btn btn-primary" type="button"> Submit</button>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>



<script src="<?php echo(ADMIN.'/lib/jquery/jquery.min.js'); ?>" type="text/javascript"></script>

<script>

function check_email_exists() {
    var email = $("#email").val();
    $.ajax({
        type:"post",
        url: "<?php echo(ADMINURL.'Admin/check_email_exists'); ?>",
        data:{ email:email},
        success:function(response)
        {
            if (response == 1) 
            {
              $("#email-error").text('').show();
            }
            else 
            {
              $("#email-error").text('Email already in Use').show();
            }  
        }
    });  
} 

function validateinput(){
 //   alert('sdfdsf');
    var isValid = true;
    if ($( "#fullname" ).val().trim() === "") {
        isValid = false;
        $("#fullname-error").text('Please enter fullname').show().fadeOut( 7500 );
    }
    var NAME = $( "#fullname" ).val();
    if(!/^[a-zA-Z\s]+$/.test(NAME)){
        isValid = false;
        $( "#fullname-error" ).text( "Please enter fullname." ).show();
    }   
    
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    if ($( "#email" ).val().trim() === "") {
        isValid = false;
        $( "#email-error" ).text( "Please enter email." ).show().fadeOut( 7500 );
    }
    if (!emailReg.test($( "#email" ).val())) {
        isValid = false;
        $( "#email-error" ).text( "Please enter a valid email." ).show().fadeOut( 7500 );
    }
    if ($('.email span').text() !== "") {
        isValid = false;
    }
   
    return isValid;         
}


$("#password-change").on('click', function(event) {
        var formStatus = true;
        if ($( "#oldpassword" ).val().trim() == "") {
            formStatus = false;
            $( "#oldpassword-error" ).text( "Please enter the old password." ).show().fadeOut( 8000 );
        }
        if ($( "#newpassword" ).val().trim() == "") {
            formStatus = false;
            $( "#newpassword-error" ).text( "Please enter new password." ).show().fadeOut( 8000 );
        }
        if ($( "#confirmpassword" ).val().trim() == "") {
            formStatus = false;
            $( "#confirmpassword-error" ).text( "Please enter your password." ).show().fadeOut( 8000 );
            return false;
        }
        if ($( "#newpassword" ).val().trim() != $( "#confirmpassword" ).val().trim()) {
            formStatus = false;
            $( "#confirmpassword-error" ).text( "New password does not match." ).show().fadeOut( 8000 );
        }
        if (!formStatus) {
            event.preventDefault();
        } else {  
            var data = {};
            data.oldpwd = $( "#oldpassword" ).val();
            data.newpwd = $( "#newpassword" ).val();
            data.confirmpwd = $( "#confirmpassword" ).val();
        //  console.log(data);
            $.ajax({
                type: "POST",
                url: "<?php echo(ADMINURL.'Admin/changepassword'); ?>",
                data: data,
                cache: false,
                dataType: 'text',
                success: function (res) {  
                  console.log(res);
                    if (res == 1) {
                        $("#success-msg").text('Updated Successfully.').show().fadeOut( 8000 );
                    }
                    else{
                        $("#error-msg").text('Incorrect old password.').show().fadeOut( 8000 );
                    }
                    $('input[type=password]').val('');
                }
            });
        }
    });
</script>



