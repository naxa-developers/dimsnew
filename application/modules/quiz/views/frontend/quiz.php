<style type="text/css">
    body{ 
        margin-top:40px; 
    }

    .stepwizard-step p {
        margin-top: 10px;
    }

    .stepwizard-row {
        display: table-row;
    }

    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }

    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .btn-circle {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 6px 0;
      font-size: 12px;
      line-height: 1.428571429;
      border-radius: 15px;
    }
</style>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <section class="details-breadcrumb inner-banner bg-image" data-background="<?php echo base_url('assets/frontend/images/details-breadcrumb.jpg') ?>">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <figure>
                    <svg xmlns="http://www.w3.org/2000/svg" width="47.404" height="42.749" viewBox="0 0 47.404 42.749"><g transform="translate(1 -33)"><path d="M12.862,33.73c0,9.01,8.31,16.319,18.621,16.319,3.7,0,10.112-2.6,10.112-2.6s5.456,1.5,7.108,1.3a.522.522,0,0,0,.2-.951,7.707,7.707,0,0,1-2.953-3.8A14.987,14.987,0,0,0,50.1,33.73c0-9.01-8.31-16.319-18.621-16.319S12.862,24.72,12.862,33.73Zm25.529-3-6.057,6.007-2.653,2.6-2.6-2.653-2.5-2.553,2.653-2.6,2.5,2.553,6.057-6.007ZM6.1,29.275a12.317,12.317,0,0,1-3.4-8.46C2.7,13.357,9.608,7.3,18.068,7.3a15.829,15.829,0,0,1,13.415,6.908h0c-11.413,0-20.824,7.909-21.775,17.921h0A8.933,8.933,0,0,1,3.851,33.18a.4.4,0,0,1-.15-.751A6.93,6.93,0,0,0,6.1,29.275Z" transform="translate(-3.7 25.7)" fill=""></path></g></svg>
            </figure>
            <h1>हाजिरीजवाफ खेल्नुहोस् </h1>
            <p>विभिन्न विपदको जानकारी सम्बन्धि हाजिरीजवाफ खेल खेल्नुहोस् र वास्तविक जानकारी लिनुहोस्</p>
        </div>
    </section>
    <section class="quiz-section pdtb-30 aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
        <div class="quiz-container">
            <div class="container">
                <div class="stepwizard">
                    <div class="stepwizard-row setup-panel">
                        <?php if($category):
                         foreach ($category as $key => $catvalue) { ?>
                        <div class="stepwizard-step ">
                            <a href="#step-<?php echo $key+1 ?>" type="button" class="<?php if($key+1 == "1") { echo "btn btn-circle btn-default btn-primary";}else{ echo "btn btn-default btn-circle";} ?> "<?php if($key+1 != "1") { echo "disabled=disabled";} ?>><?php echo $key+1 ?></a>
                            <p><!-- QN: <?php //echo $key+1 ?> --></p>
                        </div>
                        <?php } endif; ?>
                    </div>
                </div>
                <form role="form">
                <?php if($category): 
                 foreach ($category as $kp => $catevalue) {
                    $newoptions = $this->general->get_tbl_data_result('*','quiz_options',array('category_id'=>$catevalue['id'])); ?>
                        <div class="stepwizard-step "style="<?php //if($kp+1 !="1"){ //echo"display: none";} ?>">
                        <div class="row setup-content" id="step-<?php echo $kp+1 ?>" >
                            <div class="col-xs-12">
                                <div class="col-md-12">
                                    <!-- <h3> Question <?php echo $kp+1 ?></h3> -->
                                   <?php if($newoptions):  ?>
                                   <div class="quiz-content">
                                        <div class="quiz-qs">
                                            <span><?php echo $kp+1 ?></span>
                                            <h4><?php echo $catevalue['question'] ?></h4>
                                        </div>
                                        <ul>
                                        <?php foreach ($newoptions as $key => $opvalue) { ?>
                                            <li>
                                                <style type="text/css">
                                                    .flex-label {
                                                      display: flex;
                                                    }
                                                    input[type=radio] {
                                                      margin-right: 12px;
                                                    }
                                                </style>
                                                <label class="flex-label form-control">
                                                    <input type="radio" class="checkAnswerStatus" name="kp" data-id="<?php echo $opvalue['id'] ?>" data-qnid ="<?php echo $catevalue['id'] ?>">
                                                    <span><?php echo strip_tags($opvalue['name']); ?></span>
                                                </label>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                    <div id="FinalAnswerShow<?php echo $catevalue['id'] ?>"></div>
                                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    <?php } endif; ?>
                </form>
            </div>
        </div>
    </section>
<script type="text/javascript">
        $(document).off('click','.checkAnswerStatus');
        $(document).on('click','.checkAnswerStatus', function(){ 
            event.preventDefault();
            jQuery.noConflict();
            var base_url='<?php echo base_url(); ?>';   
            var urlpost = base_url+'/quiz/check_status';
            var curn = $(this).data('id');
            var nqnid = $(this).data('qnid');
            $.ajax({
               type:'POST',
               url:urlpost,
               dataType: 'html',
               data:{"curn":curn,"nqnid":nqnid},
                beforeSend: function(){

                },
                success:function(jsons){
                    console.log(jsons);
                    data = jQuery.parseJSON(jsons);  
                    console.log(data.result); 
                    if(data.status=='success')
                    {
                        $('#FinalAnswerShow'+nqnid).html(data.result);
                    }
                }
            });
        });
    $(document).ready(function () {
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='radio'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>