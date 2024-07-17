<?php
include 'pages/header.php';
include 'admin/config.php';
$id= 5;
$stmt = $conn->prepare("SELECT * FROM pages WHERE id = ?");
$stmt -> bind_param("i", $id);
$stmt-> execute();
$result = $stmt->get_result();

if($result->num_rows=== 1 ){
  $row = $result->fetch_assoc();
  $jsondata = json_decode($row['slide_content'], true);

  if($jsondata===null){
    die("Error decoding JSON data");
  } 
}else{
  die("No record found with id=$id");
}
?>
<div id="banner-area" class="banner-area" style="background-image:url(<?php echo htmlspecialchars($jsondata['banner_images'][0]['url']) ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"> <?php echo htmlspecialchars($jsondata['paragraphs'][0]['title']) ?>  </h1>
                <nav aria-label="breadcrumb bg-dark">
                    <ol class="breadcrumb justify-content-center bg-transparent">
                      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                 
                      <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 
<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-lg-4 order-1 order-lg-0">

        <div class="sidebar sidebar-left">
         
          <div class="widget">
            <h3 class="widget-title">About Us</h3>
            <ul class="arrow nav nav-tabs">
              <li><a href="ourstory.php">Our Story</a></li>
              <li><a href="team.php">Our Team</a></li>
              <li><a href="ventures.php">Our Ventures</a></li>
              <li><a href="portfolio.php">Our Portfolio</a></li>
			   <li><a href="journalism.php">Our Journalism Efforts</a></li>
			    <li><a href="testimonials.php">Testimonials</a></li>
            </ul>
          </div><!-- Categories end -->

       

          <div class="widget widget-tags">
            <h3 class="widget-title">Top Services </h3>

            <ul class="list-unstyled">
              
              <li><a href="Digital-Marketing.php">Digital Marketing</a></li>
              <li><a href="SEO.php">SEO</a></li>
     
			  <li><a href="SMO.php">Social Media Management</a></li>
              <li><a href="Content-Creation.php">Content Creation</a></li>
              <li><a href="Political-Services.php">Political Service</a></li>
              <li><a href="Surveys.php">Survey</a></li>
              <li><a href="SEM-PPC.php">PPC</a></li>
            </ul>
          </div><!-- Tags end -->


        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

      <div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">
        <div class="post">
         

          <div class="post-body">
         
 <h2 class="entry-title">
 <?php echo htmlspecialchars($jsondata['paragraphs'][0]['title']) ?>  
              </h2>
            <div class="entry-content">
          <?php echo htmlspecialchars($jsondata['paragraphs'][0]['content']) ?>
          </div>

         

          </div><!-- post-body end -->
        </div><!-- 1st post end -->

        <!-- 2nd post end -->

        <!-- 3rd post end -->

        

      </div><!-- Content Col end -->

    </div><!-- Main row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->
</body>
<html>
<?php

include 'pages/footer.php';
?>