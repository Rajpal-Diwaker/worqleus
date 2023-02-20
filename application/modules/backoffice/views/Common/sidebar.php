
<div class="be-wrapper be-fixed-sidebar">
  <nav class="navbar navbar-expand fixed-top be-top-header">
    <div class="container-fluid">
      <div class="be-navbar-header"><a class="navbar-brand" href="<?php echo(ADMINURL.'Admin/dashboard/'); ?>"></a>
      </div>
      <div class="be-right-navbar">
        <ul class="nav navbar-nav float-right be-user-nav">
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-expanded="false"><img src="<?php echo(ADMIN.'/img/avatar.jpg'); ?>" alt="Avatar"><span class="user-name"><?php echo $this->session->userdata('fullname'); ?></span></a>
            <div class="dropdown-menu" role="menu">     
              <div class="user-info">
                <div class="user-name"><?php echo $this->session->userdata('fullname'); ?></div>
              </div>
              <a class="dropdown-item" href="<?php echo(ADMINURL.'Admin/editProfile'); ?>"><span class="icon mdi mdi-face"></span>Account</a>
              <a class="dropdown-item" href="<?php echo(ADMINURL.'Admin/do_logout'); ?>"><span class="icon mdi mdi-power"></span>Logout</a>
            </div>
          </li>
        </ul>
        <div class="page-title"><span>Dashboard</span></div>
      
      </div>
    </div>
  </nav>
  <div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="<?php echo(ADMINURL.'Admin/dashboard/'); ?>">Dashboard</a>
      <div class="left-sidebar-spacer">
        <div class="left-sidebar-scroll">
          <div class="left-sidebar-content">
            <ul class="sidebar-elements">
              <li class="divider">Menu</li>
              <li class="active"><a href="<?php echo(ADMINURL.'Admin/dashboard/'); ?>"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
              </li>
              <?php if($this->uri->segment(2)=='User' && $this->uri->segment(3)!='dashboard'){ $show='open';  }else{ $show='';  } ?>
              <li class="parent <?php echo $show; ?>"><a href="#"><i class="icon mdi mdi-face"></i><span>User Management</span></a>
                <ul class="sub-menu">
                  <li><a href="<?php echo(ADMINURL.'User/user_management/'); ?>">User Management</a></li>
                  </li>
                </ul>
              </li>
              <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Provider Management</span></a>
                <ul class="sub-menu">
                  <li><a href="">Test</a>
                  </li>
                  <li><a href="">Test</a>
                  </li>
                </ul>
              </li>
              <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Master Management</span></a>
                <ul class="sub-menu">
                  <li><a href="">Test</a>
                  </li>
                  <li><a href="">Test</a>
                  </li>
                </ul>
              </li>
              <li class="parent"><a href=""><i class="icon mdi mdi-chart-donut"></i><span>Subscription Management</span></a>
                <ul class="sub-menu">
                  <li><a href="">Test</a>
                  </li>
                  <li><a href="">Test</a>
                  </li>
                </ul>
              </li>
              <?php if($this->uri->segment(2)=='Content' && $this->uri->segment(3)!='dashboard'){ $show='open';  }else{ $show='';  } ?>
              <li class="parent <?php echo $show; ?>"><a href=""><i class="icon mdi mdi-layers"></i><span>Content Management</span></a>
                <ul class="sub-menu">
                  <li><a href="">Page Management</a>
                  </li>
                  <li><a href="<?php echo(ADMINURL.'Content/post_management/'); ?>">Post Management</a></li>
                  <li><a href="<?php echo(ADMINURL.'Content/testimonial/'); ?>">Testimonial</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

    </div>
  </div>
