<section class="details-breadcrumb inner-banner bg-image" data-background="<?php echo base_url('assets/frontend/images/details-breadcrumb.jpg') ?>" style="background-image: url(&quot;images/details-breadcrumb.jpg&quot;);">
    <div class="overlay"></div>
    <div class="breadcrumb-content">
        <h1><?php echo $beready[0]['name'] ?> </h1>
        <p>तपाईंको वरिपरीको जानकारी लिनुहोस् र विपद जोखिम न्यूनीकरणको लागि तयार हुनुहोस् आफ्नो परिवार, साथीभाई, सहयोगी , समुदायमा छलफल गर्नुहोस् र सुरक्षित हुनुहोस्</p>
    </div>
</section>
<div class="home-ready">
    <section class="before-section pdtb-50 bef-aft aos-init aos-animate active" id="before-section" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
        <div class="container">
            <div class="before-list bef-aft-list">
                <?php echo $beready[0]['description'] ?>
                <?php if($beready[0]['copy']){ ?>
                Source:    <?php echo $beready[0]['copy'];
                } ?>  
            </div>
        </div>
    </section>
</div>
