<?php
include 'admin/config.php';
$id = 3;
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
<?php
include 'pages/header.php';
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
                 
                      <li class="breadcrumb-item active" aria-current="page">Our Ventures</li>
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
        <div class="col-lg-6">
          <h3 class="column-title"><?php echo htmlspecialchars($jsonData['paragraphs'][0]['title'])?></h3>
          <p><?php echo htmlspecialchars($jsonData['paragraphs'][0]['content'])?></p>
          <blockquote><p>“<?php echo htmlspecialchars($jsonData['paragraphs'][0]['quote'])?>”</p></blockquote>

<p><?php echo htmlspecialchars($jsonData['paragraphs'][0]['content2'])?></p>
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][0]['url1'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][0]['atext1'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][0]['url2'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][0]['atext2'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][0]['url3'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][0]['atext3'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title"><?php echo htmlspecialchars($jsonData['paragraphs'][1]['title'])?></h3>
          <p><?php echo htmlspecialchars($jsonData['paragraphs'][1]['content'])?></p>
          <blockquote><p>“<?php echo htmlspecialchars($jsonData['paragraphs'][1]['quote'])?>”</p></blockquote>
          <p><?php echo htmlspecialchars($jsonData['paragraphs'][1]['content2'])?></p>

        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

           <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][1]['url1'])?>)">
               <a href="<?php echo htmlspecialchars($jsonData['carousel'][1]['alink'])?>" target="_blank">    <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][1]['atext1'])?></h2>
                      </div>    
                    </div>
                </div>
              </a>


              </div><!-- Item 1 end -->
              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][1]['url2'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][1]['atext2'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][1]['url3'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][1]['atext3'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->


<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <h3 class="column-title"><?php echo htmlspecialchars($jsonData['paragraphs'][2]['title'])?></h3>
          <p><?php echo htmlspecialchars($jsonData['paragraphs'][2]['content'])?></p>
          <blockquote><p>“<?php echo htmlspecialchars($jsonData['paragraphs'][2]['quote'])?>”</p></blockquote>
		  <p><?php echo htmlspecialchars($jsonData['paragraphs'][2]['content2'])?>

<!-- Website: <a href="https://www.modifyfoundation.com" target="_blank"><strong>www.modifyfoundation.com</strong></a> -->
</p>
          
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          
          <div id="page-slider" class="page-slider small-bg">

              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][2]['url1'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][2]['atext1'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][2]['url2'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][2]['atext2'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->

              <div class="item" style="background-image:url(<?php echo htmlspecialchars($jsonData['carousel'][2]['url3'])?>)">
                <div class="container">
                    <div class="box-slider-content">
                      <div class="box-slider-text">
                          <h2 class="box-slide-title"><?php echo htmlspecialchars($jsonData['carousel'][2]['atext3'])?></h2>
                      </div>    
                    </div>
                </div>
              </div><!-- Item 1 end -->
          </div><!-- Page slider end-->          
        

        </div><!-- Col end -->
    </div><!-- Content row end -->

  </div><!-- Container end -->
</section><!-- Main container end -->

<html>
<?php
include 'pages/footer.php';

?>