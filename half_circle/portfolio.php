<?php
include 'pages/header.php';
include 'admin/config.php';
$id = 8;
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
      foreach ($jsonData['project_images'] as $index => $project) {
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
      foreach ($jsonData['project_images'] as $index => $project) {
        ?>
        <div class="col-lg-4 col-sm-6 shuffle-item" data-groups='["<?php echo htmlspecialchars($jsonData['project_images'][$index]['id']); ?>"]'>
          <div class="project-img-container">
            <a class="gallery-popup" href="images/projects/project1.png" aria-label="project-img">
              <img class="img-fluid" src="<?php echo htmlspecialchars($jsonData['project_images'][$index]['url']); ?>" alt="project-img">
              <span class="gallery-icon"><i class="fa fa-plus"></i></span>
            </a>
            <div class="project-item-info">
              <div class="project-item-info-content">
                <h3 class="project-item-title">
                  <a href="#"><?php echo htmlspecialchars($jsonData['project_images'][$index]['tag']); ?></a>
                </h3>
                <p class="project-cat"><?php echo htmlspecialchars($jsonData['project_images'][$index]['title']); ?></p>
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

<html>
<?php
include 'pages/footer.php';
?>