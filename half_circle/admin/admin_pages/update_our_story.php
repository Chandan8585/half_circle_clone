<?php
include 'header.php';

?>
<?php
include '../config.php';
$id = '5';
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
    $carousel = $_POST['carousel'];
    $faqs = $_POST['faqs'];

    // Prepare JSON data
    $slide_content = json_encode([
        'banner_images' => $banner_images,
        'paragraphs' => $paragraphs,
        'carousels' => $carousels,
        'faqs' => $faqs
    ]);

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
                        <div class="form-group">
                            <label for="paragraph_quote<?php echo $index; ?>">Quote</label>
                            <textarea class="form-control" id="paragraph_quote<?php echo $index; ?>" name="paragraphs[<?php echo $index; ?>][quote]" rows="4" required><?php echo htmlspecialchars($paragraph['quote']); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="paragraph_content2<?php echo $index; ?>">Content 2:</label>
                            <textarea class="form-control" id="paragraph_content2<?php echo $index; ?>" name="paragraphs[<?php echo $index; ?>][content2]" rows="4" required><?php echo htmlspecialchars($paragraph['content2']); ?></textarea>
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
</div>

    
 </div>



  </body>
</html>

<?php
include 'sidebar.php';
?>
