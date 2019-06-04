<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
 
</style>
<section class="resource-breadcrumb inner-banner bg-image" data-background="<?php echo base_url('assets/frontend/images/details-breadcrumb.jpg') ?>" style="background-image: url(&quot;images/details-breadcrumb.jpg&quot;);">
<div class="overlay"></div>
<div class="breadcrumb-content">
    <h1>Drr Terminology</h1>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At veroLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
</div>
</section>
<section class="knowledge pdtb-50">
    <div class="container">
         <div class="row">
                <div class="col-lg-3">
                    <aside class="left-sidebar dictionary-sidebar sticky-top">
                        <div class="card">
                            <div class="card-header main-card-header">
                                <h5>Words</h5>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs flex-column border-tabs" id="myTab" role="tablist">
                                <?php if($dictionary){
                                    foreach ($dictionary as $key => $d) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" id="dict_1_tab<?php echo $key+1; ?>" data-toggle="tab" href="#dict_1<?php echo $key+1; ?>" role="tab" aria-controls="dict_1<?php echo $key+1; ?>" aria-selected="<?php if($key+1 == '1') { echo "true"; }else{ echo "false"; } ?>"><?php echo $d['word']; ?></a>
                                    </li>

                                <?php } } ?>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link active" id="dict_2_tab" data-toggle="tab" href="#dict_2" role="tab" aria-controls="dict_2" aria-selected="true">प्रविधिगत प्रकोप</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="dict_3_tab" data-toggle="tab" href="#dict_3" role="tab" aria-controls="dict_3" aria-selected="false">आपत्कालीन व्यवस्थापन</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="dict_4_tab" data-toggle="tab" href="#dict_4" role="tab" aria-controls="dict_4" aria-selected="false">क्षमता विकास</a>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="col-lg-9">
                    <div class="dictionary-body">
                        <div class="tab-content" id="myTabContent">
                            <!-- <div class="tab-pane fade" id="dict_1" role="tabpanel" aria-labelledby="dict_1_tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Meaning of अनुकूलन</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>प्राकृतिक तथा मानवीय कृयाकलाप औ प्रणालीमा गरिने समायोजन प्रकृया जसले गर्दा वास्तविक वा अपेक्षित जलवायू अदलबदल (Climatic Stimuli) वा त्यस्ता प्रभावहरुबाट हुने हानी–नोक्सानीको अल्पीकरण गर्ने तथा तद्जन्य उपयोगी अवसरहरुबाट अधिकतम लाभ लिन सकिन्छ ।</p>
                                        <div class="comment">
                                                <h5>Comment</h5>
                                                <p>यस परिभाषाले जलवायू परिवर्तनको सरोकारहरुलाई सम्बोधन गर्दछ । यसको स्रोत जलवायू परिवर्तनसम्बन्धी राष्ट्रसंघीय कार्यसंरचना महासभा (UNFCCC) द्धारा प्रतिपादित “अनुकूलन”भन्ने अभिव्यक्तिको व्यापक
                                                        अवधारणा भित्र “जलवायू” सँग सम्बन्ध नरहेका टडकारो भू–स्खलन जस्ता कारक प्रकृया वा परिणाम समेत समावेश हुन सक्छन् । अनुकूलनको प्रकृया स्वतःस्फूर्त हुनसक्छ । उदाहरणका लागि बजार परिवर्तनमार्फत अथवा अनुकूलन प्रकृयालाई सहायता पुग्ने किसिमका सरकारी नीति तथा योजनाहरुको परिणामको फलस्वरुप विपद् जोखिम न्यूनिकरणका अधिकांश उपायहरुले अनुकूलन कार्यलाई बढावा दिन योगदान दिन्छन् ।</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <?php if($dictionary){
                                    foreach ($dictionary as $kdk => $ds) { ?>
                            <div class="tab-pane fade <?php if($kdk+1 == '1') { echo "show active"; } ?> " id="dict_1<?php echo $kdk+1; ?>" role="tabpanel" aria-labelledby="dict_1_tab<?php echo $kdk+1; ?>">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Meaning of <?php echo $ds['word']; ?></h5>
                                    </div>
                                    <div class="card-body">
                                        <p><?php echo $ds['meaning'] ?></p>
                                        <figure>
                                            <img src="<?php echo $ds['image'] ?>'" alt="<?php echo $ds['word']; ?>" />
                                        </figure>
                                        <div class="comment">
                                                <h5>Comment</h5>
                                                <p><?php  echo $ds['comment']; ?></p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <?php } }   ?>
                            <!-- <div class="tab-pane fade" id="dict_3" role="tabpanel" aria-labelledby="dict_3_tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Meaning of आपत्कालीन व्यवस्थापन</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>दुर्घटना, खतरनाक कार्यविधि पूर्वाधार नाकाम हुनु, वा खास खालका मानवीय क्रियाकलाप लगायतका प्रविधिगत तथा औद्योगिक अवस्थाबाट उत्पन्न हुने प्रकोपहरु जसको परिणाम स्वरुप मृत्यु, क्षति, घाइते, विरामी वा अन्य स्वास्थ्य सम्बन्धी असर, धनमालको नोक्सानी, जनजीविका र आधारभूत सेवाहरुमा प्रभाव, सामाजिक तथा आर्थिक गतिरोध, अथवा वातावरणीय क्षति आदि हुन सक्छ ।</p>
                                        <figure>
                                            <img src="images/resource-1.jpg" alt="dictionary" />
                                        </figure>
                                        <div class="comment">
                                                <h5>Comment</h5>
                                                <p>प्रविधिगत प्रकोपका उदाहरणमा औद्योगिक प्रदूषण, आणविक विकिरण, विषालु अपशेष, बाँध भत्कनु, यातायात दुर्घटना, कारखानामा हुने विष्फोटन, आगलागी तथा रासायनिक चुहावट पर्दछन्। प्रविधिगत प्रकोपहरु प्रत्यक्षतः प्राकृतिक प्रकोप घटनाका असरका परिणामको रुपमा पनि उत्पन्न हुन सक्छन् ।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="dict_4" role="tabpanel" aria-labelledby="dict_4_tab">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Meaning of क्षमता विकास</h5>
                                    </div>
                                    <div class="card-body">
                                        <p>दुर्घटना, खतरनाक कार्यविधि पूर्वाधार नाकाम हुनु, वा खास खालका मानवीय क्रियाकलाप लगायतका प्रविधिगत तथा औद्योगिक अवस्थाबाट उत्पन्न हुने प्रकोपहरु जसको परिणाम स्वरुप मृत्यु, क्षति, घाइते, विरामी वा अन्य स्वास्थ्य सम्बन्धी असर, धनमालको नोक्सानी, जनजीविका र आधारभूत सेवाहरुमा प्रभाव, सामाजिक तथा आर्थिक गतिरोध, अथवा वातावरणीय क्षति आदि हुन सक्छ ।</p>
                                        <div class="comment">
                                                <h5>Comment</h5>
                                                <p>प्रविधिगत प्रकोपका उदाहरणमा औद्योगिक प्रदूषण, आणविक विकिरण, विषालु अपशेष, बाँध भत्कनु, यातायात दुर्घटना, कारखानामा हुने विष्फोटन, आगलागी तथा रासायनिक चुहावट पर्दछन्। प्रविधिगत प्रकोपहरु प्रत्यक्षतः प्राकृतिक प्रकोप घटनाका असरका परिणामको रुपमा पनि उत्पन्न हुन सक्छन् ।</p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> -->
<script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
    $(document).off('click','.findClickedItemData');
    $(document).on('click','.findClickedItemData',function(){
        var q=$(this).data('id');
        var url='<?php echo base_url()?>dictionary?query='+q;
        window.location=url;
        // var url='<?php echo base_url()?>dictionary';
        // window.location=url;
        // var action="<?php echo base_url() ?>dictionary/index";
        // $.ajax({
        // type: "POST",
        // url: action,
        // dataType: 'html',
        //     data: {q:q},
        //     success: function()
        //     {   window.location=url;
        //         // data = jQuery.parseJSON(jsons);
        //         // if(data.status=='success'){
        //         //     window.location.href = url;
        //         // }
        //     }
        // });
    });
</script>
