<link rel="stylesheet" type="text/css" href="<?php echo(ADMIN.'/lib/datatables/datatables.net-bs4/css/dataTables.bootstrap4.css'); ?>"/>

      <div class="be-content">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="page-head">
              <h2 class="page-head-title"><?php echo $page_title; ?></h2>
              <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb page-head-nav">
                  <li class="breadcrumb-item"><a href="<?php echo(ADMINURL.'Admin/dashboard'); ?>">Home</a></li>
                  <li class="breadcrumb-item"><a href="#"><?php echo $page_title; ?></a></li>
                </ol>
              </nav> 
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <a style="float: right;margin: 30px;" class="btn btn-sm btn-primary" href="<?php echo(ADMINURL.'Content/addTestimonial'); ?>"><i class="mdi mdi-plus"></i> Add New</a>
          </div>
        </div>
        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-body">
                    <div id="table1_wrapper" class="dataTables_wrapper">
                        <div class="row be-datatable-body">
                            <div class="col-sm-12">
                                <table class="table table-striped table-hover table-fw-widget" id="table1">
                                  <thead>
                                    <tr>
                                      <th><span>S/N</span></th>
                                      <th>Name</th>
                                      <th>Designation</th>
                                      <th>Description</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php 
                                        foreach ($postlist as $key => $value) {
                                          ?>
                                          <tr>
                                              <td><?php echo ($page+$key+1); ?></td>
                                              <td><?php echo $value['post_title']; ?></td>
                                              <td><?php echo $value['designation']; ?></td>
                                              <td><?php echo $value['post_content'];?></td>
                                              <td  style="text-align:center;" class="allbutton"><?php if ($value['status']==='inactive') { ?>
                                                <a class="btn btn-danger" onclick="changeStatus(<?php echo $value['testimonial_id'].','.'1';?>)">Active</a>
                                                <?php } else { ?>
                                                <a class="btn btn-info" onclick="changeStatus(<?php echo $value['testimonial_id'].','.'0';?>)">Inactive</a>
                                                <?php } ?>
                                                
                                                <a class="" href="<?php echo(ADMINURL.'Content/editTestimonial/').urlencode(base64_encode($value['testimonial_id'])); ?>"><span class="mdi mdi-edit">
                                                </span></a>
                                                <a class="" href="<?php echo(ADMINURL.'Content/viewTestimonial/').urlencode(base64_encode($value['testimonial_id'])); ?>"><span class="mdi mdi-eye"></span></a>
                                              </td>
                                          </tr>
                                      <?php }
                                      ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <th><span>S/N</span></th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                      </tr>
                                  </tfoot>
                                </table>
                              </div>
                          </div>

                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> 
      
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.2.0/bootbox.min.js" type="text/javascript"></script>
<script src="<?php echo(ADMIN.'/lib/datatables/datatables.net/js/jquery.dataTables.js'); ?>" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script type="text/javascript">
function changeStatus(post_id,type){

    var post_id=post_id;
    var type=type;
    if(type == 1){
      var showtext = 'Do you really want to Activate this testimonial?';
    }else{
      var showtext = 'Do you really want to De-activate this testimonial?';
    }
    bootbox.confirm(showtext, function(result) {
       if(result){
         $(".loaderCntr").show();
          event.preventDefault();
         $.ajax({
           url: '<?php echo(ADMINURL.'Content/testimonialStatus'); ?>',
           type: 'POST',
           data: {post_id:post_id,type:type},
           success: function(response){
                $(".loaderCntr").hide(); 
                if(response == 1)
                {
                  $('#submit').attr('disabled',true);
                 $('#myModal').modal('show');
                }else if(response==0){
              bootbox.alert('<b>Something went wrong please try again!.</b>');
                  return false; 
                }         
           }
         });
       }
    });
}
$(document).ready(function(){
  App.dataTables();
});

</script>

  <div id="myModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p style="font-size: 17px; text-align:center">Successfully Done</p>
      </div>
      <div class="modal-footer" style="border:0px!important; text-align: center;">
        <a class="btn btn-default" href="<?php echo(ADMINURL.'Content/testimonial'); ?>">OK</a>
      </div>
    </div>

  </div>
</div>