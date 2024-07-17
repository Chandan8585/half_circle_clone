<?php
include 'pages/header.php';
include 'admin/config.php';
$id = 6;
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
                    <ol class="breadcrumb justify-content-center bg-transparent">
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
        <h2 class="section-title">Reaching our Offices</h2>
        <h3 class="section-sub-title">Find Our Locations</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
            <i class="<?php echo htmlspecialchars($jsonData['icon_box'][0]['icon'])?> mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4><?php echo htmlspecialchars($jsonData['icon_box'][0]['title'])?></h4>
            <p><?php echo htmlspecialchars($jsonData['icon_box'][0]['content'])?></p>
          </div>
        </div>
      </div><!-- Col 1 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
          <i class="<?php echo htmlspecialchars($jsonData['icon_box'][1]['icon'])?> mr-0"></i>
          </span>
          <div class="ts-service-box-content">
          <h4><?php echo htmlspecialchars($jsonData['icon_box'][0]['title'])?></h4>
          <p><?php echo htmlspecialchars($jsonData['icon_box'][0]['content'])?></p>
          </div>
        </div>
      </div><!-- Col 2 end -->

      <div class="col-md-4">
        <div class="ts-service-box-bg text-center h-100">
          <span class="ts-service-icon icon-round">
          <i class="<?php echo htmlspecialchars($jsonData['icon_box'][2]['icon'])?> mr-0"></i>
          </span>
          <div class="ts-service-box-content">
            <h4><?php echo htmlspecialchars($jsonData['icon_box'][2]['title'])?></p>
            <p><?php echo htmlspecialchars($jsonData['icon_box'][2]['title'])?></p>
          </div>
        </div>
      </div><!-- Col 3 end -->

    </div><!-- 1st row end -->

    <div class="gap-60"></div>

    <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3559.7373981909554!2d81.0025247926908!3d26.848303471319134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be39319119a41%3A0x7d5abe980b56eb0a!2sHalf%20Circles%20Media%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1637052005237!5m2!1sen!2sin" width="1110" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="gap-40"></div>
	
    <p><?php echo htmlspecialchars($jsonData['map_link'][0]['content'])?></p>
    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">Write Us</h3>
      
       <form method="post" name="contctfrm" id="contctfrm" onSubmit="return validate( );" action="">
          <div></div>
          <div class="row">
		  
		  
		  
            <div class="col-md-4">
              <div class="form-group">
                <label>Name</label>
                <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required>
              </div>
            </div>
			
			
            <div class="col-md-4">
              <div class="form-group">
                <label>Email</label>
                <input class="form-control form-control-email" name="email" id="email" placeholder="" type="email" required>
              </div>
            </div>
			
			
            <div class="col-md-4">
              <div class="form-group">
                <label>City</label>
                <input class="form-control form-control-subject" name="city" id="city" placeholder="" required>
              </div>
            </div>
			
			
			<div class="col-md-4">
              <div class="form-group">
                <label>Mobile</label>
                <input class="form-control form-control-subject" name="phone" id="phone" placeholder="" required>
              </div>
            </div>
			
			
			
			
			
          </div>
          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control form-control-message" name="query" id="query" placeholder="" rows="10"
              required> </textarea>
          </div>
		  
          <div class="text-right"><br>
            <input class="btn btn-primary solid blank" name="Submit" type="submit"  id="Submit" value="Submit" />
          </div>
        </form>
      </div>

    </div>]
  </div>
</section>

<html>
<?php
include 'pages/footer.php';
?>