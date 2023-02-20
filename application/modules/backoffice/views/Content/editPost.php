<script src="<?php echo  $this->config->item('base_url'); ?>public/ckeditor/ckeditor.js"></script>
<script src="<?php echo  $this->config->item('base_url'); ?>public/ckeditor/samples/js/sample.js"></script>

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
            <div class="col-sm-2">&nbsp;</div>
            <div class="col-sm-8">
              <div class="card card-border-color card-border-color-primary">
                <div class="card-header card-header-divider">Basic Form<span class="card-subtitle"></span></div>
                <div class="card-body">
                  <form id="uploadForm" action="<?php echo(ADMINURL.'Content/editPostProcess'); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group pt-2">
                      <label for="post_title">Post Title</label>
                      <input class="form-control" id="post_title" type="text" value="<?php echo $postArr['post_title']; ?>" placeholder="Post Title" name="post_title" required>
                    </div>

                    <div class="form-group field-videolang-name-en required">
                        <label for="editor1">Post Content</label>
                        <textarea id="editor1" name="post_content" class="form-control" ><?php echo $postArr['post_content']; ?></textarea>  
                        <span class="small" id="faq_description_en_error" style="color:red;"></span>
                        <div class="help-block"></div>
                    </div>        
                    <div class="form-group row">
                      <div class="col-md-2" style="float: left;">
                           <img src="<?php echo $postArr['post_media'] ?>" width="70" height="50" alt=""> 
                      </div> 
                      <div class="col-md-3" style="float: left;">
                         <label>To change Image</label>    
                      </div> 
                      <div class="col-md-3" style="float: left;">       
                         <div class="form-group field-video-video_logo required">
                          <input id="page_media" onchange="readname(this);" class="inputfile " name="page_media" type="file">
                          <label class="btn btn-sm btn-primary" for="page_media">
                          <i class="fa fa-upload" aria-hidden="true"></i> &nbsp;<span>Browse files</span></label>
                         </div>
                      </div>
                    </div>
                    <input type="hidden" name="post_id" value="<?php echo $postArr['post_id']; ?>">
                    <div class="row pt-3">
                      <div class="col-sm-6">
                        <p class="text-left">
                          <button class="btn btn-space btn-primary" type="submit">Submit</button>
                        </p>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-sm-2">&nbsp;</div>
          </div>
        </div>

      </div> 

<script type="text/javascript">
  CKEDITOR.replace( 'editor1' );
  CKEDITOR.add  

function readname(input) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  input.parentElement.getElementsByTagName("span")[0].innerHTML = fileName;
}

</script>