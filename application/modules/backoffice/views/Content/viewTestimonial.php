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
                      <div class="pricing-table pricing-table-primary">
                        <div class="pricing-table-image">
                          <img src="<?php echo $postArr['post_media']; ?>" alt="">
                        </div>
                        <div class="pricing-table-title"><?php echo $postArr['post_title']; ?></div>
                        <div class="pricing-table-title"><?php echo $postArr['designation']; ?></div>
                        <div class="card-divider card-divider-xl"></div>
                        <div class="">
                          <?php echo $postArr['post_content']; ?>
                        </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> 
