<div class="row">
    <section class="content-header col-sm-7" >
        <div class="card-body" style="margin-top: 50px" >
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                  </ol>
                  <div class="carousel-inner"  >
                    <div class="carousel-item active" >
                      <img class="d-block w-100" src="images/slide2.jpg" alt="First slide" >
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="images/slide3.jpg" alt="Second slide" >
                    </div>
                    
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
    </section> 
    <!-- video show-->
    <section class="content-header col-sm-4" >
      
        <div class="card-body" style="margin-top: 50px" >
                                   <?php
                          $directory='document/video/'; // Add your Directory here
                          $path    = './'.$directory.'/';
                          $allFiles = scandir($path,1);
                          $files = array_diff($allFiles, array('.', '..'));
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
                          <video autoplay src="<?php echo 'document/video/'.$files[0];?>" id="myvideo" width="100%" height="100%" controls muted preload="auto"  poster="gambar\logo.png">
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
    </section> 
    </div>