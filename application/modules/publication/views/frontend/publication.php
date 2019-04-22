<!-- <?php $pub_cat_nep='<option value=0>सबै</option>
 <option value="files">फाईल</option>
 <option value="video">भिडियो</option>
 <option value="images">इमेज</option>
 <option value="audio">Audio</option>';

$pub_cat_en='<option value=0>ANY</option>
 <option value="files">Files</option>
 <option value="video">Videos</option>
 <option value="images">Images</option>
 <option value="audio">Audio</option>';
?>

    <section class="searchpanel">
        <div class="container">
          <div class="mapform">
          <form action="" method="POST">
                <div class="inputholder  form-group">
                    <label for=""><?php echo !empty(SEARCH)?SEARCH:'' ?></label>
                    <input class="search--input" name="keywords" id="myInput" placeholder="Enter to search..." type="text" onkeyup="myFunction()">
                </div>
                <div class=" form-group">
                    <label for="pub_cat">Select Hazard category<?php //echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></label>
                    <select id="pub_cat" name="category" class="niceSelect">
                      <option value=>ANY</option>
                    <?php
                    if($pub){
                      foreach ($pub as $key => $value) {  ?>
                      <option value="<?php echo $value['id']  ?>"><?php echo $value['name'] ?></option>
                    <?php }  } ?>
                    </select>
                </div>
                <div class=" form-group">
                    <label for="pub_cat">Select File Type<?php //echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></label>
                    <select id="FileTypes" name="type" class="niceSelect FileTypes">
                    <?php $lang=$this->session->get_userdata('Language');
                   if($lang['Language']=='en'){
                        $languageh='en';
                    }else{
                       $languageh='nep';
                    }
                    if ($languageh=='en') {
                        echo $pub_cat_en;
                      }else {
                        echo $pub_cat_nep;
                      } ?>
                    </select>
                </div>

                <div class=" form-group" id="subFilesType" style="display: none;">
                    <label for="pub_cat">Select file category type<?php //echo !empty(PUBL_TYPE)?PUBL_TYPE:'' ?></label>
                    <select id="pub_cat" name="subcat" class="niceSelect">
                      <option value=>ANY</option>
                     <?php if($pub){
                      foreach ($pubcat as $key => $value) {  ?>
                      <option value="<?php echo $value['id']  ?>"><?php echo $value['name'] ?></option>
                    <?php }  } ?>
                    </select>
                </div>
                <button type="submit" name="submit" class="btn-primary search btn"style="margin-top: 29px;""><?php echo SEARCH ?></button>
            </div>
            </form>
        </div>
      </div>
    </section>
    <section class="">
        <div class="container">
          <div class="multimedia-warp">
            <h4>Documents</h4>
            <div class="row" id="filter_pub">
                <?php if($publicationdata): //echo "<pre>";print_r($publicationdata);die;
                foreach($publicationdata as $d ){ ?>
                <div class="col-md-6 ">
                    <div class="doccontent ">
                      <?php if($d['type'] == "images"){ ?>
                        <div class="docImg">
                            <img src="<?php echo base_url()?>/uploads/publication/51.jpg" alt="<?php echo $d['title']?>">
                        </div>
                      <?php } if($d['type'] == "video"): ?>
                        <iframe width="100%" height="" src="<?php echo $d['videolink'];  ?>"></iframe>
                      <?php  endif; ?>
                      <?php if($d['type'] == "files"): ?>
                        <a clas="docImg" href="<?php echo $d['file'] ?>"><i class="fa-files-o"></i><img class="default_img" src="<?php echo base_url()?>/uploads/doc.png" alt="<?php echo $d['title']?>"></a>
                      <?php  endif; ?>
                      <?php if($d['type'] == "audio"): ?>

                      <?php  endif; ?>
                        <div class="docdetailwrp ">
                            <div class="docTitle" id="<?php echo $d['id'] ?>">
                               <?php echo $d['title']?>
                            </div>
                            <div class="doctype">
                                Type: <?php echo $d['type'] ?>
                            </div>
                            <p class="docDetail">
                               <?php echo $this->general->string_limit($d['summary'],100); ?>
                            </p>
                            <div class="docFooter flex justify-content-between">
                                <?php if($d['type'] == "files"): ?>
                                <div class="doccount">
                                    123 downloads
                                </div>


                                <div class="docsize">
                                  <?php
                                  $path=str_replace('http://kmc.naxa.com.np/','', $d['file']);
                                  if(file_exists($path)){
                                    $size=filesize($path);
                                    $size_kb=$size/1024;
                                   echo round($size_kb).' kB';
                                   $link= base_url().'/publication/download?file='.$d['file'].'&& title='.$d['title'];
                                 }else{
                                   echo '0 KB';
                                   $link='#';
                                 }


                                  ?>
                                    <a href="<?php  echo $link ?>"><?php echo !empty(DOWNLOAD)?DOWNLOAD:'' ?> <i class="fa fa-download"></i></a>
                                   
                                </div>
                                  <?php endif; ?>
                                <a href="<?php echo base_url()?>/publication/details/?id=<?php echo base64_encode($d['id']);?>" >
                                <button class="btnsmp"> View More
                                    <i class="fa fa-angle-right"></i>
                                </button></a>
                            </div>

                        </div>

                    </div>
                </div>
            <?php } endif; ?>
            </div>
          </div>
        </div>
    </section>
    -->
<script type="text/javascript">
  // $(document).ready( function() {
    function myFunction() {
      // Declare variables
      var input, filter, div, h6, a, i;
      input = document.getElementById('myInput');



      filter = input.value.toUpperCase();

      div = document.getElementsByClassName("myUL");

      h6 = document.getElementsByClassName("docTitle");//document.getElementsByTagName('h6');

    //alert(h6);
      // Loop through all list items, and hide those who don't match the search query
      for (i = 0; i < h6.length; i++) {
          // a = h6[i].getElementsByTagName("a")[0];

          if (h6[i].innerHTML.toUpperCase().indexOf(filter) > -1) {

              $("#"+h6[i].id).parent().parent().css('display','');
          } else {

                  $("#"+h6[i].id).parent().parent().css('display','none');
          }
      }
    }

    $('#pub_cat').change(function(){
        var category = $(this).val();
        $.ajax({
          type: "GET",
          //  data: name,
          url:  "NewsletterController/get_category_pub?cat="+category,
          beforeSend: function() {
              $('#filter_pub').empty();
              $('#filter_pub').html('<h2>Loading</h2>');
          },
          complete: function() {
        // $('#filter_pub').empty();
        // $('#filter_pub').append('<h2>Loading</h2>');
       },
      success: function (result) {

        $('#filter_pub').html('');


      var data = JSON.parse(result);
      console.log(data.length);
        //console.log (data[0].summary);
      var i;

      for(i=0; i<data.length; i++){
          var div_pub = "";
        console.log(data.length);
         div_pub +='<div class="col-md-6">';
            div_pub +='<div class="doccontent flex">'
                div_pub +='<div class="docImg">'
                    div_pub +='<img src="'http://app.naxa.com.np/uploads/publication/28.png'">';
                div_pub +='</div>';
                div_pub +='<div class="docdetailwrp  grow">';
                    div_pub +='<div class="docTitle" id="'+data[i].id+'">'+data[i].title+'</div>';
                    div_pub +='<div class="doctype">Type:Book</div>';
                    div_pub +='<p class="docDetail">'+data[i].summary+'</p>';
                    div_pub +='<div class="docFooter flex justify-content-between">';
                        div_pub +='<div class="doccount">123 downloads </div>';
                        div_pub +='<div class="docsize">';
                           div_pub +='<i class="fa fa-download"></i>';
                        div_pub +='</div>';
                        div_pub +='<button class="btnsmp"> View All';
                            div_pub +='<i class="fa fa-angle-right"></i>';
                        div_pub +='</button>';
                    div_pub +='</div>';
                div_pub +='</div>';
            div_pub +='</div>';
        div_pub +='</div>';


    $('#filter_pub').append(div_pub);
    console.log(div_pub);
    }


      }

    })
    });
</script>
<script>
  $(document).off('change','.FileTypes');
  $(document).on('change','.FileTypes',function(){
      var selvalue = $('#FileTypes').val();
      if(selvalue === "files") {
        $('#subFilesType').show();
        subFilesType
      }else{
        $('#subFilesType').hide();
      }
  });
</script> 
<!-- herobanner start -->
    <section class="resource-breadcrumb inner-banner bg-image" data-background="<?php echo base_url('assets/frontend/images/details-breadcrumb.jpg') ?>">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <h1>Resource</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At veroLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
        </div>
    </section>
    <div class="breadcrumb-form">
        <form method="POST" action>
            <div class="row">
                <div class="col-xl-5 col-md-4">
                     <div class="form-group">
                        <select class="wide select" name="category">
                        <option selected value="all">----- Select Hazard Type -----</option>
                        <?php if($pub):
                         foreach ($pub as $key => $pt) { ?>
                            <option value="<?php echo $pt['id'] ?>" <?php if($this->input->post('category')){ echo "selected";} ?>><?php echo $pt['name'] ?></option>
                          <?php } endif; ?>
                        </select>
                    </div>
                </div>
                <div class="col-xl-5 col-md-4">
                    <div class="form-group">
                        <select class="wide select" name="subcat">
                        <option selected value="all">----- Select File Type -----</option>
                        <?php if($pubcat):
                         foreach ($pubcat as $key => $pcat) { ?>
                            <option value="<?php echo $pcat['id'] ?>" <?php if($this->input->post('subcat')){ echo "selected";} ?>><?php echo $pcat['name'] ?></option>
                          <?php } endif; ?>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <button type="submit" class="iset-btn"><?php echo !empty(SEARCH)?SEARCH:'' ?></button>
                </div>     
            </div>
        </form>
    </div>
    <section class="resource-section pdtb-50">
        <div class="container">
            <div class="row">
            <?php if($publicationdata): //echo "<pre>";print_r($publicationdata);die;
                foreach($publicationdata as $d ){ ?>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="<?php echo base_url()?>/uploads/publication/51.jpg" alt="<?php echo $d['title']?>">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="<?php echo base_url()?>/publication/details/?id=<?php echo base64_encode($d['id']);?>"> <?php echo $d['title']?>
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p><?php echo $this->general->string_limit($d['summary'],100); ?></p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } endif; ?>
               <!--  <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-2.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-3.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-4.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-5.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-6.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-7.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-8.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-9.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-10.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-11.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-easing="ease-out-cubic" data-aos-duration="2000" data-aos-offset="0">
                    <div class="resource-list">
                        <figure>
                            <img src="images/resource-12.jpg" alt="resource">
                        </figure>
                        <div class="resource-content">
                            <div class="resource-top">
                                <h3>
                                    <a href="resource-details.html">The health hazard education program at NIOSH
                                    </a>
                                </h3>
                                <div class="post-meta">
                                    <time><i class="la la-calendar"></i>12 dec 2019,</time><span>Ram Sharma</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod…</p>
                            </div>
                            <div class="resource-bottom">
                                <div class="btm-left">
                                    <span class="file-size">200 mb</span>
                                    <a href="#">Download <i class="la la-download"></i></a>
                                </div>
                                <div class="btm-right">
                                    <a class="read-more" href="resource-details.html">Read more <i class="la la-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>