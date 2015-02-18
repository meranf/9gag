    <div class="main-wrapper">
      <h2 class="section-heading"><p>
      
       <?php if($_SESSION['toblerlanguage'] == 'ar'){ ?>
         <img src="images/section4-hd-ar.png" />
        <?php } else{ ?>
         <img src="images/upload-your-video-hd.png" />
        <?php  } ?>
      
           
      </p></h2>
      <p class="after-hd-para"><?php echo PARTICIPATE_UPLOADING_FILM; ?></p>
      <div class="btn-border before-footer-btn">
        <div class="btn"> <a class="fbconnectbtn" href="javascript:;"><?php echo UPLOAD_VIDEO; ?><i> <img src="images/btn-arrow.png"> </i> </a> </div>
              <span class="spinner  rotating loginspinner" style="display:none;"></span>
      </div>
    </div>