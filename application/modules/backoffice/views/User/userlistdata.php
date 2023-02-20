<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>Full Name</th>
          <th>Mobile</th>
          <th>Gender</th>
          <th>State</th>
          <th>District</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($userArr as $value){ ?>
        <tr>
          <td><?php echo $value['user_fullname'] ?></td>
          <td><?php echo $value['user_mobile'] ?></td>
          <td><?php echo $value['user_gender'] ?></td>
          <td><?php echo $value['state_name'] ?></td>
          <td><?php echo $value['district_name'] ?></td>
          <td>
            <div class="btn-group" id="toggle_event_editing<?php echo $value['user_id']; ?>">
            <?php if($value['user_status'] == 'inactive'){$class1 = "locked_active"; $class2="unlocked_inactive";}
            if($value['user_status'] == 'active'){$class1 = "locked_inactive"; $class2="unlocked_active";}         
            ?>  
            <button id="first_<?php echo $value['user_id']; ?>" style="border: 1px solid;color: #343434;border-radius: 10px 0 0 10px;" data-id1='{"id":1,"user_id":"<?php echo $value['user_id']; ?>"}' type="button" class="btn <?php echo $class1; ?>">Inactive</button>
          
            <button id="second_<?php echo $value['user_id']; ?>" style="border: 1px solid;color: #343434;border-radius: 0 10px 10px 0;" data-id2='{"id":2,"user_id":"<?php echo $value['user_id']; ?>"}' type="button" class="btn <?php echo $class2; ?>">Active</button>
            </div>
          </td>
          <td>
            <a class="ac-bt" target="_blank" href="<?php echo(ADMINURL.'User/userProfile/'.$value['user_id']); ?>">
              <i class="fa fa-eye" style="font-size:18px"></i>
            </a> 
            <a  onclick="deleteuser(<?php echo $value['user_id']; ?>);" class="ac-bt">
              <i class="fa fa-trash-o" style="font-size:18px"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>