<?php
if (isset($_GET['sid'])) {
  $sql_doc = "SELECT * FROM pro_cache_user where id='".$_GET['sid']."' ";
}
             $doc = mysqli_query($con,$sql_doc);
             while($row = mysqli_fetch_assoc($doc) ){
              $uname=$row['name'];
              $pnumber=$row['staff_id'];
             $img=$row['img_profile'];

             }
?>
<div class="row" >
    <section class="content-header col-sm-6" >
        <div class="card-body" style="margin-top: 40px" >
                 <div class="row">
                      <div class="card card-solid">
                        <div class="card-body pb-0">
                          <div class="row d-flex align-items-stretch">
                            <div class="col-12  d-flex align-items-stretch" data-aos="fade-up">
                              <div class="card bg-light">
                                <div class="card-header text-muted border-bottom-0">
                                  Digital Strategist
                                </div>
                                <div class="card-body pt-0">
                                  <div class="row">
                                    <div class="col-7">
                                      <h2 class="lead"><b><?php echo $uname ;?></b></h2>
                                      <p class="text-muted text-sm"><b>About: </b> Web Developer <br>Tank of Mobile legend</p>
                                      <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                      </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                      <img src="admin/profile/<?php echo $img ?>" alt="" class="img-circle img-fluid" style="width: 100%;height: 100%">
                                    </div>
                                  </div>
                                </div>
                                <div class="card-footer">
                                  <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                      <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                      <i class="fas fa-user"></i> View Profile
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
              </div>
            </div>
              </div>
    </section> 
    <!-- video show-->
    <section class="content-header col-sm-6" >
        <div class="card-body" style="margin-top: 40px" >
          <div class="row">
                      <div class="card card-solid">
                        <div class="card-body pb-0">
                          <div class="row d-flex align-items-stretch">
                            <div class="col-12  d-flex align-items-stretch" data-aos="fade-up">
                              <div class="card bg-light">
                       <?php
                      $directory='document/video/'; // Add your Directory here
                      $path    = './'.$directory.'/';
                      $allFiles = scandir($path,1);

                      $files = array_diff($allFiles, array('.', '..'));

                      // print_r($files)
                      ?>

                      <?php
                      $imagesDirectory = "document/video/";
                       $data=array();
                      if(is_dir($imagesDirectory))
                      {
                        $opendirectory = opendir($imagesDirectory);
                        
                          while (($image = readdir($opendirectory)) !== false)
                        {
                          if(($image == '.') || ($image == '..'))
                          {
                            continue;
                          }
                          
                          $imgFileType = pathinfo($image,PATHINFO_EXTENSION);
                          
                          if(($imgFileType == 'mp4') || ($imgFileType == 'mp4'))
                          {
                          $img=$image;
                           array_push($data,array($img));
                          }
                          }
                        
                          closedir($opendirectory);
                       
                      }
                      
                      ?> 

                      <div class="main">  
                          <video autoplay src="<?php echo 'document/video/'.$files[1];?>" id="myvideo" width="92%" height="95%" controls muted preload="auto"  poster="gambar\logo.png">
                      </video>
                      <script type='text/javascript'>
                        var directory = '<?php echo $directory;?>';
                          var myvids = <?php echo json_encode($data); ?>;
                          index=0;
                          document.getElementById('myvideo').addEventListener('ended',myHandler,false);
                          function myHandler(e) {
                           index++;
                             // For Repeating all video files 
                             if(index>=myvids.length)
                              index=0;

                           var vid = document.getElementById("myvideo");
                             vid.src = directory+'/'+myvids[index];
                             
                          }
                          

                      </script>
                      </div>  
 
                    </div>
                  </div>
                  </div>
              </div>
            </div>
          </div> 
        </div>
    </section> 
  </div>