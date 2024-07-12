<?php 
// include "includes/db.php"; 
?>
<?php
//  $sql = "select * from homepage WHERE id=1";
//  $result = mysqli_query($connection , $sql);
// if(mysqli_num_rows($result)== 1 ){
//  while($row = mysqli_fetch_assoc($result)){
//   $banner1 = $row['banner_image1'];
//     $banner2 = $row['banner_image2'];
//     $banner3 = $row['banner_image3'];

//     $paragraph_title1 = $row['paragraph_title1'];
//     $paragraph_content1 = $row['paragraph_content1'];
//     $paragraph_title2 = $row['paragraph_title2'];
//     $paragraph_content2 = $row['paragraph_content2'];
//     $paragraph_title3 = $row['paragraph_title3'];
//     $paragraph_content3 = $row['paragraph_content3'];

//     $faq_title1 = $row['faq_title1'];
//     $faq_content1 = $row['faq_content1'];
//     $faq_title2 = $row['faq_title2'];
//     $faq_content2 = $row['faq_content2'];
//     $faq_title3 = $row['faq_title3'];
//     $faq_content3 = $row['faq_content3'];
//     $faq_title4 = $row['faq_title4'];
//     $faq_content4 = $row['faq_content4'];

    
// $service_title1 = $row['service_title1'];
// $service_title2 = $row['service_title2'];
// $service_title3 = $row['service_title3'];
// $service_title4 = $row['service_title4'];
// $service_title5 = $row['service_title5'];
// $service_title6 = $row['service_title6'];

//     $service1 = $row['service1'];
//     $service2 = $row['service2'];
//     $service3 = $row['service3'];
//     $service4 = $row['service4'];
//     $service5 = $row['service5'];
//     $service6 = $row['service6'];
//  }
// }
?>

<?php
include './pages/header.php';
?>

<!--/ Header end -->

<div class="banner-carousel banner-carousel-1 mb-0">



<div class="banner-carousel-item" style="background-image:url(<?php echo htmlspecialchars($banner1); ?>)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">Engaging Content</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">8 Years of excellence in</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Social Media & Digital Space</h3>
                <p data-animation-in="slideInRight">
				<a href="pricing.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Plan</a>
                     <!--    <a href="#" class="slider btn btn-primary border">Our Services</a>    -->				            </p>
              </div>
          </div>
        </div>
    </div>
  </div>




  <div class="banner-carousel-item" style="background-image:url(<?php echo htmlspecialchars( $banner2); ?>)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">World Class Service</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">When Service Matters</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Your Expression, Our Ways </h3>
                <p data-animation-in="slideInRight">
				<a href="pricing.html" class="slider btn btn-primary" aria-label="contact-with-us">Get Plan</a>
                     <!--    <a href="#" class="slider btn btn-primary border">Our Services</a>    -->            </p>
              </div>
          </div>
        </div>
    </div>
  </div>





  <div class="banner-carousel-item" style="background-image:url(<?php echo htmlspecialchars( $banner3); ?>)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h2 class="slide-title-box" data-animation-in="slideInDown">Creative Team</h2>
                <h3 class="slide-title" data-animation-in="fadeIn">Making You Victorious</h3>
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">Awards & Achievements</h3>
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
                <h3 class="action-title">We understand your digital needs</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="pricing.html">Get Plan & Pricing</a>              </div>
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
              <h3 class="into-sub-title"><?php echo htmlspecialchars($paragraph_title1); ?></h3>
              <p><?php echo htmlspecialchars($paragraph_content1); ?>
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
          <h3 class="into-sub-title"><?php echo htmlspecialchars($paragraph_title2); ?></h3>
          <p><?php echo htmlspecialchars($paragraph_content2); ?></p>

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <strong> <?php echo htmlspecialchars($faq_title1); ?> </strong>                    </button>
                    </h2>
                </div>
              
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($faq_content1); ?>
                  </div>
                </div>
              </div>
			  
			  
			   <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <?php echo htmlspecialchars($faq_title2); ?>  </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($faq_content2); ?>
                    </div>
                </div>
              </div>
			  
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingthree">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                      <?php echo htmlspecialchars($faq_title3); ?>        </button>
                    </h2>
                </div>
                <div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($faq_content3); ?>
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingfour">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                      <?php echo htmlspecialchars($faq_title4); ?></button>
                    </h2>
                </div>
                <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#our-values-accordion">
                    <div class="card-body">
                    <?php echo htmlspecialchars($faq_content4); ?>                    </div>
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
                <?php echo htmlspecialchars($service_title1) ?></a></h3>
                <p>
                  <?php echo htmlspecialchars($service1) ?>
                </p>
              </div>
          </div><!-- Service 1 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/content_creation.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Content-Creation.html"><?php echo htmlspecialchars($service_title2) ?></a></h3>
                <p> 
                  <?php echo htmlspecialchars($service2) ?>
                </p>
              </div>
          </div><!-- Service 2 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/promotional_services.png"  alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Political-Services.html">
                <?php echo htmlspecialchars($service_title3) ?></a></h3>
                <p>
                <?php echo htmlspecialchars($service3) ?>
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
                <?php echo htmlspecialchars($service_title4) ?></a></h3>
                <p>
                <?php echo htmlspecialchars($service4) ?>
                </p>
              </div>
          </div><!-- Service 4 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/videos.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Video-Creation.html">
                <?php echo htmlspecialchars($service_title5) ?></a></h3>
                <p> <?php echo htmlspecialchars($service5) ?></p>
              </div>
          </div><!-- Service 5 end -->

          <div class="ts-service-box d-flex">
              <div class="ts-service-box-img">
                <img loading="lazy" src="images/photography.png" alt="service-icon" width="100">              </div>
              <div class="ts-service-box-info">
                <h3 class="service-box-title"><a href="Photography.html">
                <?php echo htmlspecialchars($service_title6) ?></a></h3>
                <p> <?php echo htmlspecialchars($service6) ?></p>
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
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">All          </label>
            
            
          <label for="government">
            <input type="radio" name="shuffle-filter" id="government" value="government">Government          </label>
            
            
            
              <label for="internationalbody">
            <input type="radio" name="shuffle-filter" id="internationalbody" value="internationalbody">International Body          </label>
            
            
            
          <label for="political">
            <input type="radio" name="shuffle-filter" id="political" value="political">Political          </label>
            
            
            
            
          <label for="corporate">
            <input type="radio" name="shuffle-filter" id="corporate" value="corporate">Corporate</label>
            
            
            
              <label for="institution">
            <input type="radio" name="shuffle-filter" id="institution" value="institution">Institution</label>
        </div><!-- project filter end -->
  
  
        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>
  
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;internationalbody&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project1.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1557838923-2985c318be48?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">UN: Unicef</a>                  </h3>
                  <p class="project-cat">Social Media Campaign</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->
          
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;internationalbody&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/GIZ-India.jpeg" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="GIZ India">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">GIZ India</a>                  </h3>
                  <p class="project-cat">Social Media Coverage & Live Streaming</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->
  
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project2.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">UP INVESTORS SUMMIT</a>                  </h3>
                  <p class="project-cat">Social Media Management</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->
          
          
  
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project3.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">ODOP : MSME</a>                  </h3>
                  <p class="project-cat">Social Media Management</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->
          
          
  
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project4.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                 <h3 class="project-item-title">
                    <a href="#">BECIL : Ministry of  Information & Broadcasting</a>                  </h3>
                  <p class="project-cat">Ideation, Creation, Implimentation</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->
          
          
              <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;corporate&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project5.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Arthur D. Little ( For UP Forest Department )</a>                  </h3>
                  <p class="project-cat">Social Media Coverage & Live Streaming</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->
          
          
          
            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;institution&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project14.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">IIT Kanpur</a>                  </h3>
                  <p class="project-cat">Social Media Management </p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 14 end -->
  
  
  
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;political&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project7.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">BJP Uttar Pradesh</a>                  </h3>
                  <p class="project-cat">Social Media Management & Content Creation</p>
                </div>
              </div>
            </div>			
          </div><!-- shuffle item 7 end -->
  
  
  
  
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;political&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project6.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Content</a></h3>
                  <p class="project-cat">Social Media Management & Content Creation</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->
  
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;political&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project9.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Content</a>                  </h3>
                  <p class="project-cat">Social Media Management & Content Creation</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 8 end -->
  
  
          
          
          
          
          
          
            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project12.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">UP Tourism</a>                  </h3>
                  <p class="project-cat">Social Media Management & Content Creation</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 12 end -->
          
          
          
            <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;government&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project13.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">UP Metro</a>                  </h3>
                  <p class="project-cat">Social Media Management & Content Creation</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 13 end -->
          
          
        
          
          
          
          <div class="col-lg-4 col-sm-6 shuffle-item" data-groups="[&quot;corporate&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project15.png" aria-label="project-img">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1562577309-4932fdd64cd1?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Gaon Connection</a>                  </h3>
                  <p class="project-cat">Social Media Management </p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 15 end -->
        </div><!-- shuffle end -->
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
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      HCMPL is a team of dedication, hard work and sheer will. I wish them good luck for
									their future.                   </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/sanjayRai.jpg" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Sanjay Rai</h3>
                          <span class="quote-subtext">IT Head, BJP Uttar Pradesh</span>                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      We are just amazed at the level of team's dedication. The ability to think out of
									the box is what differentiates them from the others.  </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/avinashJoshi.jpg" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Avinash Joshi</h3>
                          <span class="quote-subtext">IT Head, BJP Rajasthan</span>                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                    HCMPL will always be known for strong, creative and dedicated team which can do
									wonders if given good support and free hand.                 </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/amitMalviya.jpg" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Amit Malviya</h3>
                          <span class="quote-subtext">National IT Head, BJP</span>						             </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 3 end -->
			  
			    <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      We worked on a
									short term project with aimed at accelerating the online growth of our rural
									media platform Gaon Connection and saw amazing
									results, and in keeping with with our strictly ethical para metres.
									<p>
									All the very best.								</p>
									              </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/clients/nileshMisra.jpg" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">Neelesh Misra</h3>
                          <span class="quote-subtext">Founder, Gaon Connection</span>                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">

          <h3 class="column-title">Happy Clients</h3>

          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
      <a href="#!"><img loading="lazy" class="img-fluid" src="images/company1.webp" alt="clients-logo" /></a></figure>
              </div><!-- Client 1 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
     <a href="#!"><img loading="lazy" class="img-fluid" src="images/company2.webp" alt="clients-logo" /></a></figure>
              </div><!-- Client 2 end -->

              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
      <a href="#!"><img loading="lazy" class="img-fluid" src="images/company3.webp" alt="clients-logo" /></a></figure>
              </div><!-- Client 3 end -->




              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company4.webp" alt="clients-logo" /></a>                </figure>
              </div><!-- Client 4 end -->



              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company5.webp" alt="clients-logo" /></a>                </figure>
              </div><!-- Client 5 end -->




              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company6.webp" alt="clients-logo" /></a>                </figure>
              </div>
			  
			  
			         <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company1.webp" alt="clients-logo" /></a>                </figure>
              </div>
			         <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company2.webp" alt="clients-logo" /></a>                </figure>
              </div>
			         <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company1.webp" alt="clients-logo" /></a>                </figure>
              </div>
			  
			  <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company1.webp" alt="clients-logo" /></a>                </figure>
              </div>
			  
			  <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company1.webp" alt="clients-logo" /></a>                </figure>
              </div>
			  
			  
			  <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="#!"><img loading="lazy" class="img-fluid" src="images/company1.webp" alt="clients-logo" /></a>                </figure>
              </div>
			  
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
include 'footer.php';
?>
</body>
</html>