

<!-- <section class="detailheader">
    <div class="container">
        <div class="bold f30 white"><?php echo !empty($drrdata[0]['name'])?$drrdata[0]['name']:''; ?></div>
    </div>
</section>
<section class="drrtabs">
    <div class="container">
        <ul class="nav nav-tabs">
            <?php if($drrsubcat):
                foreach ($drrsubcat as $key => $dsbub): ?>
                <li >
                    <a class="<?php if($key+1 == "1"){ echo "active"; } ?>" data-toggle="tab" href="#introduction_<?php echo $dsbub['slug']; ?>"><?php echo  ucfirst($dsbub['name']); ?></a>
                </li>
            <?php endforeach;
             endif; ?>
        </ul>
        <div class="tab-content">
            <?php
                if($drrsubcat): 
                    $lang=$this->session->get_userdata('Language');
                    if($lang['Language']=='en') {
                      $language='en';
                    }else{
                      $language='nep'; 
                    }
                    foreach ($drrsubcat as $ken => $d):

                    $drrsubcateg = $this->general->get_tbl_data_result('*','drrinformation',array('subcat_id'=>$d['id'],'language'=>$language,'category_id'=>$drrdata[0]['id']));
            if($drrsubcateg){
            foreach ($drrsubcateg as $key => $finaldetails) {  ?>
            <div id="introduction_<?php echo $d['slug']; ?>" class="tab-pane fade in show <?php if($ken+1 == "1"){ echo"active ";} ?>">
                <p><?php echo $finaldetails['short_desc']; ?></p>
                <div class="row mt15">
                    <?php if($finaldetails['image']): ?>
                    <div class="col-md-6">
                        <div class="imageHolder">
                            <img src="<?php echo $finaldetails['image']; ?>" alt="<?php $finaldetails['language']; ?>">
                        </div>
                    </div>
                <?php endif; ?>
                    <div class="col-md-6">
                        <div class="dettitle bold f22">
                          
                        </div>
                        <?php echo $finaldetails['description']; ?>
                    </div>
                </div>
            </div>
            <?php  } }
            endforeach;
            endif; ?>
        </div>
    </div>
</section> -->


    <!-- herobanner start -->
    <section class="details-breadcrumb inner-banner bg-image" data-background="<?php echo base_url('assets/frontend/images/details-breadcrumb.jpg') ?>">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <figure>
                <svg xmlns="http://www.w3.org/2000/svg" width="109.217" height="96.517" viewBox="0 0 109.217 96.517"><g transform="translate(0 0)"><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M107.34,42.457c-1.235-.943-2.488-1.887-3.705-2.83-1.956-1.528-3.929-3.02-5.867-4.512L80.132,21.545l-3.466-2.66C71.314,14.8,65.96,10.668,60.625,6.585a9.184,9.184,0,0,0-2.779-1.492c-.051-.018-.085-.018-.121-.034-.275-.085-.549-.154-.84-.223-.154-.018-.308-.034-.48-.051-.206-.018-.4-.018-.583-.018s-.4,0-.583.018c-.154.018-.344.034-.5.051-.275.069-.549.136-.824.223-.034.018-.085.018-.121.034a8.931,8.931,0,0,0-2.763,1.492c-6.519,4.974-13.021,9.984-19.523,14.96V16a2.428,2.428,0,0,0-2.419-2.419H19.9a2.431,2.431,0,0,0-2.419,2.437c.018,5.454.069,10.087-.069,14.7a4.481,4.481,0,0,1-1.047,2.47c-2.779,2.162-5.559,4.288-8.355,6.433-1.235.943-2.47,1.887-3.688,2.83-1.682,1.287-2.8,2.763-2.711,4.65a4.594,4.594,0,0,0,.84,2.8,6.421,6.421,0,0,0,7.016,2.334,7.379,7.379,0,0,0,1.767-.789V78.381a66.24,66.24,0,0,0,7.822.154V59.046h.018V46.127a2.421,2.421,0,0,1,.085-.6Q36.271,32.48,53.3,19.348l1.184-.875a2.944,2.944,0,0,1,1.338-.447,2.8,2.8,0,0,1,1.32.447l1.184.875Q75.359,32.5,92.5,45.527c.018.206.069.4.069.6V59.046h.018V75.087a31.767,31.767,0,0,1,7.822.7V51.445a6.887,6.887,0,0,0,1.784.789,6.426,6.426,0,0,0,7-2.334,4.7,4.7,0,0,0,.824-2.8C110.119,45.218,109.022,43.744,107.34,42.457Z" transform="translate(-0.858 -4.767)" fill=""/><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M37.1,39.875a10.475,10.475,0,0,0-12.7-8.338A10.941,10.941,0,0,0,16.17,42.43V57.2c1.081-.172,2.144-.377,3.225-.617a49.523,49.523,0,0,1,17.875-.96V54.046c0-3.946.018-7.909,0-11.871A15.087,15.087,0,0,0,37.1,39.875Z" transform="translate(10.386 15.672)" fill=""/><path d="M33.441,20.777V35.662h8.346V20.777Z" transform="translate(23.721 7.594)" fill=""/><path d="M26.271,20.777V35.662h8.346V20.777Z" transform="translate(18.185 7.594)" fill=""/><path d="M65.064,28.956,47.428,15.4l-3.468-2.66" transform="translate(31.842 1.387)" fill=""/><path d="M82.306,54.149c-8.7-2.6-17.412-2.189-26.174-.262a73.7,73.7,0,0,1-30.15.36,2.515,2.515,0,0,0-1.48.133c.443.323.867.68,1.333.964a47.212,47.212,0,0,0,27.538,7.273c4.076-.223,8.1-1.409,12.142-2.183A85.751,85.751,0,0,1,87.841,58.8c1.522.108,3.037.314,4.556.475A26.642,26.642,0,0,0,82.306,54.149Z" transform="translate(16.82 31.949)" fill=""/><path d="M53.865,48.327c-7.776-2.32-15.566-1.956-23.4-.234a65.865,65.865,0,0,1-26.953.321,2.237,2.237,0,0,0-1.322.119c.4.289.774.608,1.191.863A42.188,42.188,0,0,0,28,55.9c3.643-.2,7.241-1.26,10.856-1.953a76.679,76.679,0,0,1,19.957-1.46c1.361.1,2.715.282,4.072.425A23.841,23.841,0,0,0,53.865,48.327Z" transform="translate(-0.407 27.603)" fill=""/><path d="M75.855,47.623c-5.931-1.77-11.873-1.492-17.847-.179a50.219,50.219,0,0,1-20.558.245,1.717,1.717,0,0,0-1.008.09c.3.22.59.464.909.657a32.178,32.178,0,0,0,18.777,4.958,63.243,63.243,0,0,0,8.281-1.489,58.526,58.526,0,0,1,15.222-1.115c1.038.074,2.072.214,3.106.324A18.239,18.239,0,0,0,75.855,47.623Z" transform="translate(26.038 27.359)" fill=""/><path d="M40.6,56.492C34.666,54.722,28.724,55,22.75,56.313a50.219,50.219,0,0,1-20.558.245,1.717,1.717,0,0,0-1.008.09c.3.22.59.464.909.657A32.178,32.178,0,0,0,20.87,62.264a63.243,63.243,0,0,0,8.281-1.489A58.526,58.526,0,0,1,44.373,59.66c1.038.074,2.072.214,3.106.324A18.213,18.213,0,0,0,40.6,56.492Z" transform="translate(-1.184 34.206)" fill=""/></g></svg>
            </figure>
            <h1><?php echo $drrdata[0]['name'] ?></h1>
            <p><?php echo $drrdata[0]['description'] ?></p>
        </div>
    </section>

    <div class="legend">
        <div class="legend-list">
            <h4>Remain Safe</h4>
            <?php if($drrsubcat):
                foreach ($drrsubcat as $key => $dsbub): ?>
                    <a href="#before-section<?php echo $dsbub['slug']; ?>" class="iset-btn"><?php echo  ucfirst($dsbub['name']); ?> <i class="la la-long-arrow-right"></i></a>
            <?php endforeach;
             endif; ?>
        </div>
    </div>
     <?php
        if($drrsubcat): 
            $lang=$this->session->get_userdata('Language');
            if($lang['Language']=='en') {
              $language='en';
            }else{
              $language='nep'; 
            }
            foreach ($drrsubcat as $ken => $d):
            $drrsubcateg = $this->general->get_tbl_data_result('*','drrinformation',array('subcat_id'=>$d['id'],'language'=>$language,'category_id'=>$drrdata[0]['id']));
        if($drrsubcateg){
        foreach ($drrsubcateg as $key => $finaldetails) {  ?>
            <section class="before-section<?php echo $d['slug']; ?> pdtb-50 bef-aft" id="before-section<?php echo $d['slug']; ?>" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                <div class="container">
                    <div class="section-title mrb-50">
                       <!--  <h3><?php //echo $d['name']; ?></h3> -->
                        <span><?php echo $finaldetails['short_desc']; ?></span>
                    </div>
                    <div class="before-list bef-aft-list">
                         <?php echo $finaldetails['description']; ?>
                    </div>
                </div>
            </section>
        <?php  } }
            endforeach;
            endif; ?>
           <!--  <section class="before-sectionintroduction bg-white bef-aft pdtb-50 mrb-50 aos-init aos-animate active" id="before-sectioninfographics" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                <div class="container">
                    <div class="section-title mrb-50">
                        <h3>Related Infographics</h3>
                        <span><?php echo $drrdata[0]['description'] ?></span>
                    </div>
                    <div class="info-wrap">
                        <div class="row">
                        <?php if($pubd):  
                         $similardata = $this->general->get_tbl_data_result('title,photo,file,lang,videolink,category,type','publication',array('category'=>$drrdata[0]['id']));
                         if($similardata):
                        foreach ($similardata as $key => $reltd) { ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="infograph-item">
                                    <?php if($reltd['type'] == 'video'): ?>
                                  <?php $nurl=$reltd['videolink'];
                                      $nu = substr($nurl, strrpos($nurl, '/' )+1);
                                     $thimg =str_replace('watch?v=','',$nu, $a); ?>
                                  <figure>
                                      <img src="https://i.ytimg.com/vi/<?php echo $thimg ?>/mqdefault.jpg" alt="video">
                                      <figcaption>
                                          <a href="<?php echo $reltd['videolink'] ?>?autoplay=1&rel=0 " class="video-preview"><i class="la la-play-circle"></i></a>
                                      </figcaption>
                                  </figure>
                              <?php endif; ?>
                              <?php if($reltd['type'] == 'images'): ?>
                                  <figure>
                                  <?php if($reltd['photo']){ ?>
                                      <img src="<?php echo $reltd['photo'] ?>" alt="video">
                                      <?php }else{ ?>
                                      <img src="<?php echo base_url('assets/frontend/images/resource-1.jpg') ?>" alt="pdf Files">
                                      <?php } ?>
                                  </figure>
                              <?php endif; ?>
                              <?php if($reltd['type'] == 'files'): ?>
                                  <figure>
                                      <img src="<?php echo base_url('assets/frontend/images/resource-1.jpg') ?>" alt="pdf Files">
                                  </figure>
                              <?php endif; ?>
                                <?php if($reltd['type'] == 'audio'){ ?>
                                    <audio id="audio" preload="auto" tabindex="0" controls="">
                                        <source src="<?php echo $reltd['audio'] ?>">
                                        <?php echo $reltd['title'] ?>
                                    </audio>
                                <?php } ?>
                                </div>
                            </div>
                        <?php } endif; endif; ?>
                        </div>
                    </div>
                </div>
            </section> -->