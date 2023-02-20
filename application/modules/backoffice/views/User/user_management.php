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
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-table">
                <div class="card-body">
                    <div id="table1_wrapper" class="dataTables_wrapper">
                        <div class="row be-datatable-header">
                            <div class="col-sm-6">
                                <div class="dataTables_length" id="table1_length">
                                    <label>Show 
                                    <select name="table1_length" class="custom-select custom-select-sm form-control form-control-sm" id="limitRows" onchange="sendRequest();">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                    </select>entries</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div id="table1_filter" class="dataTables_filter">
                                    <label>Search:<input type="text" nme="searchFor" class="form-control form-control-sm" placeholder="Search.." id="searchKey" onchange="sendRequest();"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row be-datatable-body">
                            <div class="col-sm-12">
                                <table class="table table-striped table-hover table-fw-widget dataTable" id="table1" role="grid" aria-describedby="table1_info">
                                  <thead>
                                    <tr>
                                      <th><span>S/N</span></th>
                                      <th data-action="sort" data-title="user_first_name" data-direction="ASC"><span>First Name</span> <i class="glyphicon glyphicon-triangle-bottom"></i></th>
                                      <th data-action="sort" data-title="user_last_name" data-direction="ASC"><span>Last Name</span> <i class="glyphicon glyphicon-triangle-bottom"></i></th>
                                      <th data-action="sort" data-title="user_email" data-direction="ASC"><span>Email</span> <i class="glyphicon glyphicon-triangle-bottom"></i></th>
                                      <th>Created On</th>
                                      <th>Last Login</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <?php 
                                        foreach ($postlist as $key => $value) {
                                          ?>
                                          <tr>
                                              <td><?php echo ($page+$key+1); ?></td>
                                              <td><?php echo $value->user_first_name; ?></td>
                                              <td><?php echo $value->user_last_name; ?></td>
                                              <td><?php echo $value->user_email;?></td>
                                              <td><?php echo $value->created_on;?></td>
                                              <td><?php echo $value->last_login;?></td>
                                              <td  style="text-align:center;" class="allbutton"><?php if ($value->user_status==='inactive') { ?>
                                                <a class="btn btn-danger" onclick="changeStatus(<?php echo $value->user_id.','.'1';?>)">Active</a>
                                                <?php } else { ?>
                                                <a class="btn btn-info" onclick="changeStatus(<?php echo $value->user_id.','.'0';?>)">Inactive</a>
                                                <?php } ?>
                                                <a class="" href="<?php echo(ADMINURL.'User/viewUser/').urlencode(base64_encode($value->user_id)); ?>"><span class="mdi mdi-eye"></span></a> 
                                              </td>
                                          </tr>
                                      <?php }
                                      ?>
                                  </tbody>
                                  <tfoot>
                                      <tr>
                                        <th><span>S/N</span></th>
                                        <th data-action="sort" data-title="user_first_name" data-direction="ASC"><span>First Name</span> <i class="glyphicon glyphicon-triangle-bottom"></i></th>
                                        <th data-action="sort" data-title="user_last_name" data-direction="ASC"><span>Last Name</span> <i class="glyphicon glyphicon-triangle-bottom"></i></th>
                                        <th data-action="sort" data-title="user_email" data-direction="ASC"><span>Email</span> <i class="glyphicon glyphicon-triangle-bottom"></i></th>
                                        <th>Action</th>
                                      </tr>
                                  </tfoot>
                                </table>
                                <?php echo $pagination; ?>
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
  <script type="text/javascript">
    var sendRequest = function(){
      var searchKey = $('#searchKey').val();
      var limitRows = $('#limitRows').val();
      window.location.href = '<?=base_url('backoffice/User/user_management')?>?query='+searchKey+'&limitRows='+limitRows+'&orderField='+curOrderField+'&orderDirection='+curOrderDirection;
    }


    var getNamedParameter = function (key) {
        if (key == undefined) return false;

        var url = window.location.href;
        //console.log(url);
        var path_arr = url.split('?');
        if (path_arr.length === 1) {
            return null;
        }
        path_arr = path_arr[1].split('&');
        path_arr = remove_value(path_arr, "");
        var value = undefined;
        for (var i = 0; i < path_arr.length; i++) {
            var keyValue = path_arr[i].split('=');
            if (keyValue[0] == key) {
                value = keyValue[1];
                break;
            }
        }

        return value;
    };


    var remove_value = function (value, remove) {
        if (value.indexOf(remove) > -1) {
            value.splice(value.indexOf(remove), 1);
            remove_value(value, remove);
        }
        return value;
    };


    var curOrderField, curOrderDirection;
    $('[data-action="sort"]').on('click', function(e){
      curOrderField = $(this).data('title');
      curOrderDirection = $(this).data('direction');
      sendRequest();
    });


    $('#searchKey').val(decodeURIComponent(getNamedParameter('query')||""));
    $('#limitRows option[value="'+getNamedParameter('limitRows')+'"]').attr('selected', true);

    var curOrderField = getNamedParameter('orderField')||"";
    var curOrderDirection = getNamedParameter('orderDirection')||"";
    var currentSort = $('[data-action="sort"][data-title="'+getNamedParameter('orderField')+'"]');
    if(curOrderDirection=="ASC"){
      currentSort.attr('data-direction', "DESC").find('i.glyphicon').removeClass('glyphicon-triangle-bottom').addClass('glyphicon-triangle-top'); 
    }else{
      currentSort.attr('data-direction', "ASC").find('i.glyphicon').removeClass('glyphicon-triangle-top').addClass('glyphicon-triangle-bottom');  
    }

function changeStatus(post_id,type){

    var user_id=post_id;
    var type=type;
    if(type == 1){
      var showtext = 'Do you really want to Activate this User?';
    }else{
      var showtext = 'Do you really want to De-activate this User?';
    }
    bootbox.confirm(showtext, function(result) {
       if(result){
         $(".loaderCntr").show();
          event.preventDefault();
         $.ajax({
           url: '<?php echo(ADMINURL.'User/changeuserStatus'); ?>',
           type: 'POST',
           data: {user_id:user_id,type:type},
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

</script>

  <div id="myModal" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p style="font-size: 17px; text-align:center">Successfully Done</p>
      </div>
      <div class="modal-footer" style="border:0px!important; text-align: center;">
        <a class="btn btn-default" href="<?php echo(ADMINURL.'User/user_management'); ?>">OK</a>
      </div>
    </div>

  </div>
</div>