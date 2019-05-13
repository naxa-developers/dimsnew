<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
    .material-switch > input[type="checkbox"] {
    display: none;
    }

    .material-switch > label {
        cursor: pointer;
        height: 0px;
        position: relative;
        width: 40px;
    }

    .material-switch > label::before {
        background: rgb(0, 0, 0);
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
        border-radius: 8px;
        content: '';
        height: 16px;
        margin-top: -8px;
        position:absolute;
        opacity: 0.3;
        transition: all 0.4s ease-in-out;
        width: 40px;
    }
    .material-switch > label::after {
        background: rgb(255, 255, 255);
        border-radius: 16px;
        box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        content: '';
        height: 24px;
        left: -4px;
        margin-top: -8px;
        position: absolute;
        top: -4px;
        transition: all 0.3s ease-in-out;
        width: 24px;
    }
    .material-switch > input[type="checkbox"]:checked + label::before {
        background: inherit;
        opacity: 0.5;
    }
    .material-switch > input[type="checkbox"]:checked + label::after {
        background: inherit;
        left: 20px;
    }
    #custom-search-form {
        margin:0;
        margin-top: 5px;
        padding: 0;
    }

    #custom-search-form .search-query {
        padding-right: 3px;
        padding-right: 4px \9;
        padding-left: 3px;
        padding-left: 4px \9;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */

        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        -webkit-transition: width  0.2s ease-in-out;
        -moz-transition:width  0.2s ease-in-out;
        -o-transition: width  0.2s ease-in-out;
        transition: width  0.2s ease-in-out;
    }

    #custom-search-form button {
        border: 0;
        background: none;
        /** belows styles are working good */
        padding: 2px 5px;
        margin-top: 2px;
        position: relative;
        left: -28px;
        /* IE7-8 doesn't have border-radius, so don't indent the padding */
        margin-bottom: 0;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .search-query:focus + button {
        z-index: 3;
    }
    .search-query:focus{
        width: 260px;
    }
    .list-group-item:hover{
        cursor: pointer;
    }
    .media-left{
        display: inline-block;
    }
    #center{
        margin-top:10px;
        display: inline;
    }
    #favorites{
        margin-left: -5px
    }
    #fav{
        font-size: 12px;
        font-weight: 700;
        color: #959595;
        text-transform: uppercase;
        letter-spacing: 1px;
        content: "Favorites";
    }
    .newAutolist{ overflow: scroll; }
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
        <div class="accordion contactaccordion terminology-acc bg-white" id="accordion">
           <?php if($dictionary):
            $previous = null;
                foreach ($dictionary as $key => $tag) { 
                    $firstLetter = strtoupper(substr($tag['word'], 0, 1));
                    if($previous !== $firstLetter) { 
                        if($key != 0) {
                            echo '</ol>';
                        } ?>
                        <div class="flex align-items-center <?php if($key+1 == '1')echo "collapsed";?> " role="button" data-toggle="collapse" href="#collapse-<?php echo $key+1; ?>" aria-expanded="true" aria-controls="collapse-2">
                            <div class="letter citems" style="margin-left: 10px;}"><?php echo $firstLetter;?></div>
                            <hr class="grow">
                            <div class="ind citems">
                            </div>
                        </div>
                        <ol class="tags main collapse show" id="collapse-<?php echo $key+1; ?>" data-parent="#accordion" aria-labelledby="heading-<?php echo $key+1; ?>">
                        <div class="dictionary-list">
                        <div class="row">
                    <?php } ?>
                        <div class="col-md-3 detailDictionary">
                            <div class="dictonaryItem">
                                <a href="javascript:void(0);"  data-html="true" id="popover" data-trigger="hover" class="dictionaryPopup" data-toggle="popover" title="Meaning Of <?php echo $tag['word']; ?>" data-content="<div><?php echo $tag['meaning'] ?></div><div class='mtb-15'><img src='<?php echo $tag['image'] ?>' width='200'/></div><div><h5>Comment</h5><?php  echo $tag['comment']; ?></div>"><?php echo $tag['word']; ?></a>  
                            </div>
                        </div>
                    <?php if($key == count($dictionary)-1) { 
                        echo '</div></div></ol>';
                    }
                    $previous = $firstLetter; 
                }
            endif;
            ?> 
        </div>
    </div>
  
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
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
