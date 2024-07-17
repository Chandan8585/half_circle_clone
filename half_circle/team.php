<?php
include 'pages/header.php';
include 'admin/config.php';
$id = 9;
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
<section id="main-container" class="main-container pb-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h3 class="section-sub-title">Meet Our Team</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row justify-content-center">
      <div class="col-lg-3 col-sm-6 mb-5">
        <div class="ts-team-wrapper">
          <div class="team-img-wrapper">
            <img loading="lazy" src="<?php echo htmlspecialchars($jsonData['team_images'][0]['url']); ?>" class="img-fluid" alt="team-img"></div>
          <div class="ts-team-content-classic">
            <h3 class="ts-name"><?php echo htmlspecialchars($jsonData['team_images'][0]['name']); ?></h3>
            <p class="ts-designation"><?php echo htmlspecialchars($jsonData['team_images'][0]['designation']); ?></p>
            <p class="ts-description"><?php echo htmlspecialchars($jsonData['team_images'][0]['previous']); ?></p>
            <div class="team-social-icons">
              <a target="_blank" href="<?php echo htmlspecialchars($jsonData['team_images'][0]['facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
              <a target="_blank" href="<?php echo htmlspecialchars($jsonData['team_images'][0]['twitter']); ?>"><i class="fab fa-twitter"></i></a>
              <a target="_blank" href="<?php echo htmlspecialchars($jsonData['team_images'][0]['linkedIn']); ?>"><i class="fab fa-linkedin"></i></a>            </div>
            <!--/ social-icons-->
          </div>
        </div>
        <!--/ Team wrapper 1 end -->
      </div><!-- Col end -->
    </div><!-- Content row 1 end -->

    <div class="row">
    <?php
  foreach (array_slice($jsonData['team_images'], 1) as $index => $team) {
?>
  <div class="col-lg-3 col-sm-6 mb-5">
    <div class="ts-team-wrapper">
      <div class="team-img-wrapper">
        <img loading="lazy" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcREoRGyXmHy_6aIgXYqWHdOT3KjfmnuSyxypw&s" class="img-fluid" alt="team-img">
      </div>
      <div class="ts-team-content-classic">
        <h3 class="ts-name"><?php echo htmlspecialchars($team['name']); ?></h3>
        <p class="ts-designation"><?php echo htmlspecialchars($team['designation']); ?></p>
        <p class="ts-description"><?php echo htmlspecialchars($team['previous']); ?></p>
        <div class="team-social-icons">
          <a target="_blank" href="<?php echo htmlspecialchars($team['facebook']); ?>"><i class="fab fa-facebook-f"></i></a>
          <a target="_blank" href="<?php echo htmlspecialchars($team['twitter']); ?>"><i class="fab fa-twitter"></i></a>
          <a target="_blank" href="<?php echo htmlspecialchars($team['linkedIn']); ?>"><i class="fab fa-linkedin"></i></a>
        </div>
        <!--/ social-icons-->
      </div>
    </div>
    <!--/ Team wrapper 1 end -->
  </div>
<?php
  }
?>

    
    </div><!-- Content row end -->
  </div><!-- Container end -->
</section><!-- Main container end -->

<html>
<?php
include 'pages/footer.php';
?>