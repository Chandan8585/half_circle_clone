<?php
include 'pages/header.php';
include 'admin/config.php';
$id = 7;
$stmt = $conn->prepare("SELECT * FROM pages WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt-> execute();
$result = $stmt->get_result();

if($result->num_rows===1){
  $row = $result->fetch_assoc();
  $jsonData = json_decode($row['slide_content'], true);

    if($jsonData === null){
      die("Error decoding JSON Data");
    }
  } else{
      die("No record found with id=$id");
  }

?>
<html>
<div id="banner-area" class="banner-area" style="background-image:url(<?php echo htmlspecialchars($jsonData['banner_images'][0]['url'])?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title"><?php echo htmlspecialchars($jsonData['banner_images'][0]['title'])?></h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center bg-dark">
                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                 
                      <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($jsonData['banner_images'][0]['title'])?></li>
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
      <div class="row text-center">
         <div class="col-12">
            <h3 class="section-sub-title mb-4">What People Said</h3>
         </div>
      </div>
      <!--/ Title row end -->

      <div class="row">
         <?php
      foreach ($jsonData['testimonials'] as $index => $testimonial) {
      ?>
              <div class="col-lg-4 col-md-6">
            <div class="quote-item quote-border mt-5">
               <div class="quote-text-border">
               <?php echo htmlspecialchars($jsonData['testimonials'][$index]['content']); ?>
               </div>

               <div class="quote-item-footer">
                 <img loading="lazy" class="testimonial-thumb" src="<?php echo htmlspecialchars($jsonData['testimonials'][$index]['url']); ?>" alt="testimonial">
                  <div class="quote-item-info">
                          <h3 class="quote-author"> <?php echo htmlspecialchars($jsonData['testimonials'][$index]['name']); ?></h3>
                          <span class="quote-subtext"><?php echo htmlspecialchars($jsonData['testimonials'][$index]['designation']); ?></span>                      </div>
               </div>
            </div><!-- Quote item end -->
         </div>     
          
      <?php
    } 
    ?>

   </div><!-- Container end -->
</section>
<html>
<?php
include 'pages/footer.php';
?>