<!-- herobanner start -->
    <section class="details-breadcrumb inner-banner bg-image" data-background="<?php echo base_url('assets/frontend/images/details-breadcrumb.jpg') ?>">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
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
     