<?php
include 'header.php';

?>
<?php
include '../config.php';
$id = '2';
$stmt = $conn->prepare("SELECT * FROM pages WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
$row = $result->fetch_assoc();
$jsonData = json_decode($row['slide_content'], true);

if ($jsonData === null) {
    die("Error decoding JSON data");
}
} else {
    die("No record found with id = $id");
}
?>

<?php
// Assuming you have already established a connection to the database
// $conn is your database connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = '2';
    // Collecting form data
    $banner_images = $_POST['banner_images'];
    $paragraphs = $_POST['paragraphs'];
    $faqs = $_POST['faqs'];
    $services = $_POST['services'];

    // Prepare JSON data
    $slide_content = json_encode([
        'banner_images' => $banner_images,
        'paragraphs' => $paragraphs,
        'services' => $services,
        'faqs' => $faqs
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    // Update query
    $query = "UPDATE `pages` SET `slide_content` = ? WHERE `id` = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('si', $slide_content, $id);

    if ($stmt->execute()) {
        echo "Update successful.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>




<html>
    <head>
        <style>
            #content{
                margin-top: 0%;
            }
            #content>form{
 /* border : 2px solid black; */
 padding: 0 12%;
 overflow-x: 10%;
            }
            #content>form >input{
 width: 100%;
 height: 2rem;
            }
            #content>form>textarea{
                width: 100%;
                min-height: 5rem;
                height: auto;
            }
            @media screen and (max-width: 768px){
                #content{
                margin-top: 30rem;
            }
            }
        </style>
    </head>
  <body>
  
 <div id='content'>
    <h1>Update Our Story Page from Here</h1>
 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id" value="2" required hidden><br>
        
   

     
    </form>


    <div class="container mt-4">  
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link active text-dark" id="banner-tab" data-toggle="tab" href="#banner" role="tab" aria-controls="banner" aria-selected="true">Banner Images</a>

    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" id="paragraph-tab" data-toggle="tab" href="#paragraph" role="tab" aria-controls="paragraph" aria-selected="false">Paragraph</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark" id="services-tab" data-toggle="tab" href="#services" role="tab" aria-controls="services" aria-selected="false">Service</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link text-dark" id="faqs-tab" data-toggle="tab" href="#faqs" role="tab" aria-controls="faqs" aria-selected="false">FAQs</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link text-dark" id="projects-tab" data-toggle="tab" href="#projects" role="tab" aria-controls="projects" aria-selected="false">Project Images</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link text-dark" id="faqs-tab" data-toggle="tab" href="#faqs" role="tab" aria-controls="faqs" aria-selected="false">Testimonials</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link text-dark" id="faqs-tab" data-toggle="tab" href="#faqs" role="tab" aria-controls="faqs" aria-selected="false">Client</a>
    </li>
  </ul>
  
  <div class="tab-content mt-2" id="myTabContent">
    <div class="tab-pane fade show active" id="banner" role="tabpanel" aria-labelledby="banner-tab">
    <h2>Banner Images</h2>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="bannerTab" role="tablist">
      <?php foreach ($jsonData['banner_images'] as $index => $banner) { ?>
        <li class="nav-item">
          <a class="nav-link text-dark <?php echo $index === 0 ? 'active' : ''; ?>" id="banner-tab-<?php echo $index; ?>" data-toggle="tab" href="#banner<?php echo $index; ?>" role="tab" aria-controls="banner<?php echo $index; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">Banner <?php echo $index + 1; ?></a>
        </li>
      <?php } ?>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content" id="bannerTabContent">
      <?php foreach ($jsonData['banner_images'] as $index => $banner) { ?>
        <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" id="banner<?php echo $index; ?>" role="tabpanel" aria-labelledby="banner-tab-<?php echo $index; ?>">
          <h3>Banner Image <?php echo $index + 1; ?></h3>
          <label for="banner_image_url<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?> URL:</label><br>
          <input type="text" id="banner_image_url<?php echo $index; ?>" name="banner_images[<?php echo $index; ?>][url]" value="<?php echo htmlspecialchars($banner['url']); ?>" required><br>
          
          <label for="banner_image_title<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?> Title:</label><br>
          <input type="text" id="banner_image_title<?php echo $index; ?>" name="banner_images[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($banner['title']); ?>" required><br>
          
          <label for="banner_image_content<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?> Content:</label><br>
          <textarea id="banner_image_content<?php echo $index; ?>" name="banner_images[<?php echo $index; ?>][content]" rows="4"><?php echo htmlspecialchars($banner['content']); ?></textarea><br>
          
          <label for="banner_image_tag<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?> Tags:</label><br>
          <input type="text" id="banner_image_tag<?php echo $index; ?>" name="banner_images[<?php echo $index; ?>][tag]" value="<?php echo htmlspecialchars($banner['tag']); ?>" required><br>
        </div>
      <?php } ?>
    </div>
    
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
  </form>
    </div>
    
       <!-- Paragraphs Tab -->
    <div class="tab-pane fade" class="tab-pane fade show active" id="paragraph" role="tabpanel" aria-labelledby="paragraph-tab">
        <h2>Paragraphs</h2>
        
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <!-- Nav tabs for Paragraphs -->
            <ul class="nav nav-tabs" id="paragraphTab" role="tablist">
                <?php foreach ($jsonData['paragraphs'] as $index => $paragraph) { ?>
                    <li class="nav-item">
                        <a class="nav-link text-dark <?php echo $index === 0 ? 'active' : ''; ?>" id="paragraph-tab-<?php echo $index; ?>" data-toggle="tab" href="#paragraph<?php echo $index; ?>" role="tab" aria-controls="paragraph<?php echo $index; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">Paragraph <?php echo $index + 1; ?></a>
                    </li>
                <?php } ?>
            </ul>

            <!-- Tab panes for Paragraphs -->
            <div class="tab-content" id="paragraphTabContent">
                <?php foreach ($jsonData['paragraphs'] as $index => $paragraph) { ?>
                    <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" id="paragraph<?php echo $index; ?>" role="tabpanel" aria-labelledby="paragraph-tab-<?php echo $index; ?>">
                        <h3>Paragraph <?php echo $index + 1; ?></h3>
                        <div class="form-group">
                            <label for="paragraph_title<?php echo $index; ?>">Title:</label>
                            <input type="text" class="form-control" id="paragraph_title<?php echo $index; ?>" name="paragraphs[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($paragraph['title']); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="paragraph_content<?php echo $index; ?>">Content:</label>
                            <textarea class="form-control" id="paragraph_content<?php echo $index; ?>" name="paragraphs[<?php echo $index; ?>][content]" rows="4" required><?php echo htmlspecialchars($paragraph['content']); ?></textarea>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <div class="tab-pane fade" id="services" role="tabpanel" aria-labelledby="services-tab">
    <h2>Services</h2>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <!-- Nav tabs for Services -->
        <ul class="nav nav-tabs" id="serviceTab" role="tablist">
            <?php foreach ($jsonData['services'] as $index => $service) { ?>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo $index === 0 ? 'active' : ''; ?>" id="service-tab-<?php echo $index; ?>" data-toggle="tab" href="#service<?php echo $index; ?>" role="tab" aria-controls="service<?php echo $index; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">Service <?php echo $index + 1; ?></a>
                </li>
            <?php } ?>
        </ul>

        <!-- Tab panes for Services -->
        <div class="tab-content" id="serviceTabContent">
            <?php foreach ($jsonData['services'] as $index => $service) { ?>
                <div class="tab-pane fade  <?php echo $index === 0 ? 'show active' : ''; ?>" id="service<?php echo $index; ?>" role="tabpanel" aria-labelledby="service-tab-<?php echo $index; ?>">
                    <h3>Service <?php echo $index + 1; ?></h3>
                    <div class="form-group">
                        <label for="services_title<?php echo $index; ?>">Title:</label>
                        <input type="text" class="form-control" id="services_title<?php echo $index; ?>" name="services[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($service['title']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="services_content<?php echo $index; ?>">Content:</label>
                        <textarea class="form-control" id="services_content<?php echo $index; ?>" name="services[<?php echo $index; ?>][content]" rows="4" required><?php echo htmlspecialchars($service['content']); ?></textarea>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<div class="tab-pane fade" id="faqs" role="tabpanel" aria-labelledby="faqs-tab">
    <h2>FAQs</h2>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <!-- Nav tabs for FAQs -->
        <ul class="nav flex-row nav-tabs" id="faqTab" role="tablist">
            <?php foreach ($jsonData['faqs'] as $index => $faq) { ?>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo $index === 0 ? 'active' : ''; ?>" id="faq-tab-<?php echo $index; ?>" data-toggle="tab" href="#faq<?php echo $index; ?>" role="tab" aria-controls="faq<?php echo $index; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">FAQ <?php echo $index + 1; ?></a>
                </li>
            <?php } ?>
        </ul>

        <!-- Tab panes for FAQs -->
        <div class="tab-content" id="faqTabContent">
            <?php foreach ($jsonData['faqs'] as $index => $faq) { ?>
                <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" id="faq<?php echo $index; ?>" role="tabpanel" aria-labelledby="faq-tab-<?php echo $index; ?>">
                    <h3>FAQ <?php echo $index + 1; ?></h3>
                    <div class="form-group">
                        <label for="faqs_title<?php echo $index; ?>">Title:</label>
                        <input type="text" class="form-control" id="faqs_title<?php echo $index; ?>" name="faqs[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($faq['title']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="faqs_content<?php echo $index; ?>">Content:</label>
                        <textarea class="form-control" id="faqs_content<?php echo $index; ?>" name="faqs[<?php echo $index; ?>][content]" rows="4" required><?php echo htmlspecialchars($faq['content']); ?></textarea>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<div class="tab-pane fade" id="testimonials" role="tabpanel" aria-labelledby="testimonials-tab">
    <h2>Testimonials</h2>
    
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <!-- Nav tabs for Testimonials -->
        <ul class="nav nav-tabs" id="testimonialTab" role="tablist">
            <?php foreach ($jsonData['testimonials'] as $index => $testimonial) { ?>
                <li class="nav-item">
                    <a class="nav-link text-dark <?php echo $index === 0 ? 'active' : ''; ?>" id="testimonial-tab-<?php echo $index; ?>" data-toggle="tab" href="#testimonial<?php echo $index; ?>" role="tab" aria-controls="testimonial<?php echo $index; ?>" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>">Testimonial <?php echo $index + 1; ?></a>
                </li>
            <?php } ?>
        </ul>

        <!-- Tab panes for Testimonials -->
        <div class="tab-content" id="testimonialTabContent">
            <?php foreach ($jsonData['testimonials'] as $index => $testimonial) { ?>
                <div class="tab-pane fade <?php echo $index === 0 ? 'show active' : ''; ?>" id="testimonial<?php echo $index; ?>" role="tabpanel" aria-labelledby="testimonial-tab-<?php echo $index; ?>">
                    <h3>Testimonial <?php echo $index + 1; ?></h3>
                    <div class="form-group">
                        <label for="testimonial_url<?php echo $index; ?>">URL:</label>
                        <input type="text" class="form-control" id="testimonial_url<?php echo $index; ?>" name="testimonials[<?php echo $index; ?>][url]" value="<?php echo htmlspecialchars($testimonial['url']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="testimonial_content<?php echo $index; ?>">Content</label>
                        <textarea class="form-control" id="testimonial_content<?php echo $index; ?>" name="testimonials[<?php echo $index; ?>][content]" rows="4" required><?php echo htmlspecialchars($testimonial['content']); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="testimonial_name<?php echo $index; ?>">Name</label>
                        <textarea class="form-control" id="testimonial_name<?php echo $index; ?>" name="testimonials[<?php echo $index; ?>][name]" rows="4" required><?php echo htmlspecialchars($testimonial['name']); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="testimonial_designation<?php echo $index; ?>">Designation</label>
                        <textarea class="form-control" id="testimonial_designation<?php echo $index; ?>" name="testimonials[<?php echo $index; ?>][designation]" rows="4" required><?php echo htmlspecialchars($testimonial['designation']); ?></textarea>
                    </div>
                </div>
            <?php } ?>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

  </div>
</div>

    
 </div>



  </body>
</html>

<?php
include 'sidebar.php';
?>
