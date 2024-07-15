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
  <!-- action=" echo htmlspecialchars($_SERVER["PHP_SELF"]); " -->
 <div id='content'>
    <h1>Update Our Story Page from Here</h1>
 <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <!-- <label for="id">ID:</label><br> -->
        <!-- <input type="text" id="id" name="id" value="2" required hidden><br> -->
        
        <h2>Banner Images</h2>
        <?php 
        foreach($jsonData['banner_images'] as $index => $banner){ ?>
            <h3>Banner Image <?php echo $index+1; ?></h3>
            <label for="banner_image_url<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?>URL:</label><br>
            <input type="text" id="banner_image_url<?php echo $index; ?>" name="banner_images[<?php echo $index; ?>][url]" value="<?php echo htmlspecialchars($banner['url']); ?>" required><br>
            
            <label for="banner_image_title<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?>Title:</label><br>
            <input type="text" id="banner_image_title<?php echo $index; ?>" name="banner_images[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($banner['title']); ?>" required><br>
            
            <label for="banner_image_content<<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?>Content:</label><br>
            <textarea id="banner_image_content<?php echo $index ; ?>" name="banner_image[<?php echo $index; ?>][content]" rows="4" value="<?php echo htmlspecialchars($banner['content']); ?>"></textarea><br>
            
            <label for="banner_image_tag<?php echo $index; ?>">Banner Image <?php echo $index + 1; ?>Tags (comma-separated):</label><br>
            <input type="text" id="banner_image_tag<?php echo $index; ?>" name="banner_image[<?php echo $index; ?>][tag]" value="<?php echo htmlspecialchars( $banner['tag']); ?>" required><br>
        <?php
        }
        ?>
    
      <?php
      foreach($jsonData['paragraphs'] as $index => $paragraph){?>
        <div class="form-group">
        <label for="paragraph_title<?php echo $index; ?>">Paragraph Title <?php echo $index+1; ?></label>
        <input type="text" class="form-control" id="paragraph_title<?php echo $index; ?>" name="paragraphs[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($paragraph['title']); ?>" required>
        </div>
        <div class="form-group">
        <label for="paragraph_content<?php echo $index; ?>">Paragraph Content <?php echo $index+1; ?>:</label><br> 
        <textarea class="form-control" type="text" id="paragraph_content<?php echo $index; ?>" name="paragraphs[<?php echo $index; ?>][content]" value="<?php echo htmlspecialchars($paragraph['content']); ?>" rows="4" required></textarea><br><br>
             </div>
    <?php } ?>
  
      <?php
      foreach($jsonData['faqs'] as $index => $faqs){?>
   <div class="form-group">
        <label for="faqs_title<?php echo $index; ?>">Faqs Title <?php echo $index+1; ?></label>
        <input type="text" class="form-control" id="faqs_title<?php echo $index; ?>" name="faqs[<?php echo $index; ?>][title]" value="<?php echo htmlspecialchars($faqs['title']); ?>" required>
        </div>
        <div class="form-group">
        <label for="faqs_content<?php echo $index; ?>">Faqs Content <?php echo $index+1; ?>:</label><br> 
        <textarea class="form-control" type="text" id="paragraph_content<?php echo $index; ?>" name="paragraphs[<?php echo $index; ?>][content]" value="<?php echo htmlspecialchars($paragraph['content']); ?>" rows="4" required></textarea><br><br>
             </div>
      <?php}?>

        <label for="faq_title1">FAQ Title 1:</label><br>
        <input type="text" id="faq_title1" name="faq_title1" required><br><br>
        
        <label for="faq_content1">FAQ Content 1:</label><br>
        <textarea id="faq_content1" name="faq_content1" rows="4" required></textarea><br><br>
        
        <label for="faq_title2">FAQ Title 2:</label><br>
        <input type="text" id="faq_title2" name="faq_title2" required><br><br>
        
        <label for="faq_content2">FAQ Content 2:</label><br>
        <textarea id="faq_content2" name="faq_content2" rows="4" required></textarea><br><br>
        
        <label for="faq_title3">FAQ Title 3:</label><br>
        <input type="text" id="faq_title3" name="faq_title3" required><br><br>
        
        <label for="faq_content3">FAQ Content 3:</label><br>
        <textarea id="faq_content3" name="faq_content3" rows="4" required></textarea><br><br>
        
        <label for="faq_title4">FAQ Title 4:</label><br>
        <input type="text" id="faq_title4" name="faq_title4" required><br><br>
        
        <label for="faq_content4">FAQ Content 4:</label><br>
        <textarea id="faq_content4" name="faq_content4" rows="4" required></textarea><br><br>

        <label for="service_title1">Service Title 1:</label><br>
        <input type="text" id="service_title1" name="service_title1" required><br><br>
        
        <label for="service1">Service 1:</label><br>
        <textarea id="service1" name="service1" rows="2" required></textarea><br><br>
       
        <label for="service_title2">Service Title 2:</label><br>
        <input type="text" id="service_title2" name="service_title2" required><br><br>
        
        <label for="service2">Service 2:</label><br>
        <textarea id="service2" name="service2" rows="2" required></textarea><br><br>
        
        <label for="service_title3">Service Title 3:</label><br>
        <input type="text" id="service_title3" name="service_title3" required><br><br>
        
        <label for="service3">Service 3:</label><br>
        <textarea id="service3" name="service3" rows="2" required></textarea><br><br>       

        <label for="service_title4">Service Title 4:</label><br>
        <input type="text" id="service_title4" name="service_title4" required><br><br>
        
        <label for="service4">Service 4:</label><br>
        <textarea id="service4" name="service4" rows="2" required></textarea><br><br>
        
        <label for="service_title5">Service Title 5:</label><br>
        <input type="text" id="service_title5" name="service_title5" required><br><br>
          
        <label for="service5">Service 5:</label><br>
        <textarea id="service5" name="service5" rows="2" required></textarea><br><br>
        
        <label for="service_title6">Service Title 6:</label><br>
        <input type="text" id="service_title6" name="service_title6" required><br><br>
        
        <label for="service6">Service 6:</label><br>
        <textarea id="service6" name="service6" rows="2" required></textarea><br><br>
        
        <button type="submit" >Submit</button>
    </form>
 </div>
  </body>
</html>

<?php
include 'sidebar.php';
?>