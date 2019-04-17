<section class="resource-breadcrumb inner-banner bg-image" data-background="<?php echo base_url('assets/frontend/images/details-breadcrumb.jpg') ?>">
        <div class="overlay"></div>
        <div class="breadcrumb-content">
            <h1>knowledge product</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At veroLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
        </div>
    </section>
    <div class="breadcrumb-form">
        <form action="" method="POST">
            <div class="row">
                <div class="col-xl-5 col-md-4">
                    <div class="input-group">
                        <input type="text" class="form-control" aria-label="" placeholder="Search Hazard">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="la la-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-md-4">
                    <div class="form-group">
                        <select class="wide select">
                            <option selected>Select Category</option>
                            <option value="1">Audio</option>
                            <option value="2">Video</option>
                            <option value="3">Images</option>
                            <option value="4">Documents</option>
                        </select>
                    </div>
                </div>
                <div class="col-xl-2 col-md-4">
                    <button type="button" class="iset-btn">Search</button>
                </div>     
            </div>
    </div>
    <section class="knowledge pdtb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <aside class="left-sidebar">
                        <div id="accordion">
                            <div class="card">
                                <div class="card-header" id="heading-2">
                                    <h5>
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false"
                                            aria-controls="collapse-2">
                                            Brouchure
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                    <div class="card-body">
                                        <ul>
                                            <li>
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Flyers</label>
                                                </div>
                                            </li>
                                            <!-- <a href="brouchure.html">flyers</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-3">
                                    <h5>
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false"
                                            aria-controls="collapse-3">
                                            Audio
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="audio.html">jingles</a></li>
                                            <li><a href="audio.html">audio interviews</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-4">
                                    <h5>
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="true"
                                            aria-controls="collapse-4">
                                            Video
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-4" class="collapse show" data-parent="#accordion" aria-labelledby="heading-3">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="knowledge-list.html">Documentatries</a></li>
                                            <li><a href="knowledge-list.html">Tv shows</a></li>
                                            <li><a href="knowledge-list.html">Video Interviews</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="heading-5">
                                    <h5>
                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false"
                                            aria-controls="collapse-5">
                                            Documents
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-5" class="collapse" data-parent="#accordion" aria-labelledby="heading-5">
                                    <div class="card-body">
                                        <ul>
                                            <li><a href="document.html">Documents</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    </form>
                </div>
                <div class="col-lg-9">
                    <div class="knoledge-body">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <?php if($publication): //echo "<pre>";print_r($publication);die;
                                    foreach ($publication as $key => $pub) { ?>
                                        <div class="col-xl-4 col-md-6">
                                            <div class="knoledge-list <?php if($pub['type'] == 'files'){ echo "doclist"; } ?>">
                                            <?php if($pub['type'] == 'video'): ?>
                                                <?php $nurl=$pub['videolink'];
                                                    $nu = substr($nurl, strrpos($nurl, '/' )+1);
                                                   $thimg =str_replace('watch?v=','',$nu, $a); ?>
                                                <figure>
                                                    <img src="https://i.ytimg.com/vi/<?php echo $thimg ?>/mqdefault.jpg" alt="video">
                                                    <figcaption>
                                                        <a href="<?php echo $pub['videolink'] ?>?autoplay=1&rel=0 " class="video-preview"><i class="la la-play-circle"></i></a>
                                                    </figcaption>
                                                </figure>
                                            <?php endif; ?>
                                            <?php if($pub['type'] == 'images'): ?>
                                                <figure>
                                                    <img src="<?php echo $pub['photo'] ?>" alt="video">
                                                </figure>
                                            <?php endif; ?>
                                            <?php if($pub['type'] == 'files'): ?>
                                                <figure>
                                                    <img src="<?php echo base_url('assets/frontend/img/doc.png') ?>" alt="pdf Files">
                                                </figure>
                                            <?php endif; ?>
                                                <div class="knowldege-content">
                                                    <h4>
                                                        <a href="#"><?php echo $pub['title'] ?></a>
                                                    </h4>
                                                    <!-- <time><i class="la la-calendar"></i> 12 dec 2019</time> -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php }  endif; ?>
                                   <!--  <div class="col-xl-4 col-md-6">
                                        <div class="knoledge-list">
                                            <figure>
                                                <img src="images/video-2.jpg" alt="video">
                                                <figcaption>
                                                    <a href="https://www.youtube.com/watch?v=FZQPhrdKjow?autoplay=1&rel=0" class="video-preview"><i class="la la-play-circle"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="knowldege-content">
                                                <h4>
                                                    <a href="#">Fire that occurred due to increase of the 
                                                        temperature</a>
                                                </h4>
                                                <time><i class="la la-calendar"></i> 12 dec 2019</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="knoledge-list">
                                            <figure>
                                                <img src="images/video-3.jpg" alt="video">
                                                <figcaption>
                                                    <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="video-preview"><i class="la la-play-circle"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="knowldege-content">
                                                <h4>
                                                    <a href="#">Fire that occurred due to increase of the 
                                                        temperature</a>
                                                </h4>
                                                <time><i class="la la-calendar"></i> 12 dec 2019</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="knoledge-list">
                                            <figure>
                                                <img src="images/video-4.jpg" alt="video">
                                                <figcaption>
                                                    <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="video-preview"><i class="la la-play-circle"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="knowldege-content">
                                                <h4>
                                                    <a href="#">Fire that occurred due to increase of the 
                                                        temperature</a>
                                                </h4>
                                                <time><i class="la la-calendar"></i> 12 dec 2019</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="knoledge-list">
                                            <figure>
                                                <img src="images/video-5.jpg" alt="video">
                                                <figcaption>
                                                    <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="video-preview"><i class="la la-play-circle"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="knowldege-content">
                                                <h4>
                                                    <a href="#">Fire that occurred due to increase of the 
                                                        temperature</a>
                                                </h4>
                                                <time><i class="la la-calendar"></i> 12 dec 2019</time>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <div class="knoledge-list">
                                            <figure>
                                                <img src="images/video-6.jpg" alt="video">
                                                <figcaption>
                                                    <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="video-preview"><i class="la la-play-circle"></i></a>
                                                </figcaption>
                                            </figure>
                                            <div class="knowldege-content">
                                                <h4>
                                                    <a href="#">Fire that occurred due to increase of the 
                                                        temperature</a>
                                                </h4>
                                                <time><i class="la la-calendar"></i> 12 dec 2019</time>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>