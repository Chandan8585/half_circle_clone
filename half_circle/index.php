<?php 
include "admin/config.php"; 
?>
<?php
$id = 2;
$stmt = $conn->prepare("SELECT * FROM pages WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt-> execute();
$result = $stmt-> get_result();

if($result->num_rows== 1){
  $row = $result->fetch_assoc();
  $fetchData = json_decode($row['slide_content'], true);

  if($fetchData === null ){
    die("Error decoding JSON data");
  }
} else{
    die("No record found with id = $id");
}
?>


<?php
include 'pages/header.php';
?>

<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">



<div class="banner-carousel-item" style="background-image:url(<?php echo htmlspecialchars($fetchData['banner_images'][0]['url']); ?>)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown"><?php echo htmlspecialchars($fetchData['banner_images'][0]['title']); ?></h2>
                <h3 class="slide-title" data-animation-in="fadeIn"><?php echo htmlspecialchars($fetchData['banner_images'][0]['content']); ?></h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft"><?php echo htmlspecialchars($fetchData['banner_images'][0]['tag']); ?></h3>
                <p data-animation-in="slideInRight">
				<a href="pricing.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Plan</a>
                     <!--    <a href="#" class="slider btn btn-primary border">Our Services</a>    -->				            </p>
              </div>
          </div>
        </div>
    </div>
  </div>




  <div class="banner-carousel-item" style="background-image:url(<?php echo htmlspecialchars($fetchData['banner_images'][1]['url']); ?>)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown"><?php echo htmlspecialchars($fetchData['banner_images'][1]['title']); ?></h2>
                <h3 class="slide-title" data-animation-in="fadeIn"><?php echo htmlspecialchars($fetchData['banner_images'][1]['content']); ?></h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft"><?php echo htmlspecialchars($fetchData['banner_images'][1]['tag']); ?></h3>
                <p data-animation-in="slideInRight">
				<a href="pricing.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Plan</a>
                     <!--    <a href="#" class="slider btn btn-primary border">Our Services</a>    -->            </p>
              </div>
          </div>
        </div>
    </div>
  </div>





  <div class="banner-carousel-item" style="background-image:url(<?php echo htmlspecialchars($fetchData['banner_images'][2]['url']); ?>)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown"><?php echo htmlspecialchars($fetchData['banner_images'][2]['title']); ?></h2>
                <h3 class="slide-title" data-animation-in="fadeIn"><?php echo htmlspecialchars($fetchData['banner_images'][2]['content']); ?></h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft"><?php echo htmlspecialchars($fetchData['banner_images'][2]['tag']); ?></h3>
                <p data-animation-in="slideInRight">
				<a href="pricing.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Plan</a>
                 <!--    <a href="#" class="slider btn btn-primary border">Our Services</a>    -->            </p>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>






<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">WE UNDERSTAND YOUR DIGITAL NEEDS</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="pricing.html">Get Plan And Pricing</a>              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->



<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h2 class="into-title">Our Work Speaks</h2>
              <h3 class="into-sub-title"><?php echo htmlspecialchars($fetchData['paragraphs'][0]['title']); ?></h3>
              <p><?php echo htmlspecialchars($fetchData['paragraphs'][0]['content']); ?>
</p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">ASPIRING FOR EXCELLENCE</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">BRINGING UNIQUENESS</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Guided by Commitment</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">A Team of Professionals</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title"><?php echo htmlspecialchars($fetchData['paragraphs'][1]['title']); ?></h3>
          <p><?php echo htmlspecialchars($fetchData['paragraphs'][1]['content']); ?></p>

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <strong> <?php echo htmlspecialchars($fetchData['faqs'][0]['title']); ?> </strong>                    </button>
                    </h2>
                </div>
              
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($fetchData['faqs'][0]['content']); ?>
                  </div>
                </div>
              </div>
			  
			  
			   <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <?php echo htmlspecialchars($fetchData['faqs'][1]['title']); ?>  </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($fetchData['faqs'][1]['content']); ?>
                    </div>
                </div>
              </div>
			  
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingthree">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                      <?php echo htmlspecialchars($fetchData['faqs'][2]['title']); ?>        </button>
                    </h2>
                </div>
                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($fetchData['faqs'][2]['content']); ?>
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingfour">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      <?php echo htmlspecialchars($fetchData['faqs'][3]['title']); ?></button>
                    </h2>
                </div>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($fetchData['faqs'][3]['content']); ?>                    </div>
                </div>
              </div>
          </div>
          <!--/ Accordion end -->
        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section id="facts" class="facts-area dark-bg">
  <div class="container">
    <div class="facts-wrapper">
        <div class="row">
          <div class="col-md-3 col-sm-6 ts-facts">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/campaign.png" alt="facts-img" width="100">              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="200">0</span> +</h2>
                <h3 class="ts-facts-title">Campaigns</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/creative.png" alt="facts-img" width="100">              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="20000">0</span> +</h2>
                <h3 class="ts-facts-title">Creatives</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/videos.png" alt="facts-img" width="100">              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="8000">0</span> +</h2>
                <h3 class="ts-facts-title">Videos</h3>
              </div>
          </div><!-- Col end -->

          <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
              <div class="ts-facts-img">
                <img loading="lazy" src="images/trends.png" alt="facts-img" width="100">              </div>
              <div class="ts-facts-content">
                <h2 class="ts-facts-num"><span class="counterUp" data-count="1000">0</span> +</h2>
                <h3 class="ts-facts-title">Trends</h3>
              </div>
          </div><!-- Col end -->
        </div> <!-- Facts end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Facts end -->

<section id="ts-service-area" class="ts-service-area pb-0">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
        <!--/   <h2 class="section-title">We Are Specialists In</h2> -->
          <h3 class="section-sub-title">What We Do</h3>
        </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
        <div class="col-lg-4">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/digitalMarketing.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="/">
                <?php echo htmlspecialchars($fetchData['services'][0]['title']) ?></a></h3>
                <p>
                  <?php echo htmlspecialchars($fetchData['services'][0]['content']) ?>
                </p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/content_creation.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Content-Creation.html"><?php echo htmlspecialchars($fetchData['services'][1]['title']) ?></a></h3>
                <p> 
                  <?php echo htmlspecialchars($fetchData['services'][1]['content']) ?>
                </p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/promotional_services.png"  alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Political-Services.html">
                <?php echo htmlspecialchars($fetchData['services'][2]['title']) ?></a></h3>
                <p>
                <?php echo htmlspecialchars($fetchData['services'][2]['content']) ?>
                </p>
              </div>
          </div><!-- Service 3 end -->
        </div><!-- Col end -->

        <div class="col-lg-4 text-center">
          <img loading="lazy" class="img-fluid" src="images/service.jpg" alt="service-avater-image">        </div><!-- Col end -->

        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/political.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Political-Services.html">
                <?php echo htmlspecialchars($fetchData['services'][3]['title']) ?></a></h3>
                <p>
                <?php echo htmlspecialchars($fetchData['services'][3]['content']) ?>
                </p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/videos.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Video-Creation.html">
                <?php echo htmlspecialchars($fetchData['services'][4]['title']) ?></a></h3>
                <p> <?php echo htmlspecialchars($fetchData['services'][4]['content']) ?></p>
              </div>
          </div><!-- Service 5 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/photography.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Photography.html">
                <?php echo htmlspecialchars($fetchData['services'][5]['title']) ?></a></h3>
                <p> <?php echo htmlspecialchars($fetchData['services'][5]['content'])?></p>
              </div>
          </div><!-- Service 6 end -->
        </div><!-- Col end -->
    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Service end -->




<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <!--/ <h2 class="section-title">Work of Excellence</h2> -->
        <h3 class="section-sub-title">Our Projects </h3>
      </div>
    </div>
    <!--/ Title row end -->
    <div class="row">
  <div class="col-12">
    <div class="shuffle-btn-group">
      <label class="active" for="all">
        <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">All
      </label>
      
      <?php
      $uniqueIds = [];
      foreach ($fetchData['project_images'] as $index => $project) {
        $id = $project['id'];
        if (!isset($uniqueIds[$id])) {
          $uniqueIds[$id] = true;
          ?>
          <label for="project_images_<?php echo $index; ?>_id">
            <input type="radio" name="shuffle-filter" id="project_images_<?php echo $index; ?>_id" value="<?php echo htmlspecialchars($id); ?>">
            <?php echo htmlspecialchars($id); ?>
          </label>
          <?php
        }
      }
      ?>
    </div><!-- project filter end -->

    <div class="row shuffle-wrapper">
      <div class="col-1 shuffle-sizer"></div>

      <?php
      foreach ($fetchData['project_images'] as $index => $project) {
        ?>
        <div class="col-lg-4 col-sm-6 shuffle-item" data-groups='["<?php echo htmlspecialchars($fetchData['project_images'][$index]['id']); ?>"]'>
          <div class="project-img-container">
            <a class="gallery-popup" href="images/projects/project1.png" aria-label="project-img">
              <img class="img-fluid" src="<?php echo htmlspecialchars($fetchData['project_images'][$index]['url']); ?>" alt="project-img">
              <span class="gallery-icon"><i class="fa fa-plus"></i></span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
                <h3 class="project-item-title">
                  <a href="#"><?php echo htmlspecialchars($fetchData['project_images'][$index]['tag']); ?></a>
                </h3>
                <p class="project-cat"><?php echo htmlspecialchars($fetchData['project_images'][$index]['title']); ?></p>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>




    
  
      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="Our-Portfolio.html">View All Projects</a>		        </div>
      </div>
    </div>
    <!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<section class="content">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title">Testimonials</h3>
          <div id="testimonial-slide" class="testimonial-slide">
          <?php
   foreach ($fetchData['testimonials'] as $index => $testimonial) {
      ?>
    <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                    <?php echo htmlspecialchars($fetchData['testimonials'][$index]['content']); ?>
									              </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="<?php echo htmlspecialchars($fetchData['testimonials'][$index]['url']); ?>" alt="">
                      <div class="quote-item-info">
                          <h3 class="quote-author"><?php echo htmlspecialchars($fetchData['testimonials'][$index]['name']); ?></h3>
                          <span class="quote-subtext"><?php echo htmlspecialchars($fetchData['testimonials'][$index]['designation']); ?></span>                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
          
      <?php
    }
?>
              
          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">

<?php
   foreach ($fetchData['clients'] as $index => $client) {
      ?>
      <div class="col-sm-4 col-6">
                <figure class="clients-logo">
     <a href="#!"><img loading="lazy" class="img-fluid" src="<?php echo htmlspecialchars($fetchData['clients'][$index]['url']); ?>" alt="clients-logo" /></a></figure>
              </div>
      <?php
    }
?>

          
  
			  
			  <!-- Client 6 end -->
          </div><!-- Clients row end -->
        </div><!-- Col end -->
    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->


<!--/ subscribe end -->

<!--/ News end -->
<?php
include './pages/footer.php';
?>
</body>
</html>