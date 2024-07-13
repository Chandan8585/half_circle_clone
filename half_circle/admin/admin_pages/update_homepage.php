<?php include "header.php"; ?>
<?php include "subscriber/includes/test.php"; ?>

<!-- Navigation -->
<?php include "../subscriber/includes/navigation.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './includes/db.php';

    // Prepare SQL statement for inserting
    $sql = "INSERT INTO `homepage` (
                `id`, `banner_image1`, `banner_image2`, `banner_image3`, 
                `paragraph_title1`, `paragraph_content1`, 
                `paragraph_title2`, `paragraph_content2`, 
                `paragraph_title3`, `paragraph_content3`, 
                `faq_title1`, `faq_content1`, 
                `faq_title2`, `faq_content2`, 
                `faq_title3`, `faq_content3`, 
                `faq_title4`, `faq_content4`, 
                `service1`, `service2`, `service3`, 
                `service4`, `service5`, `service6`, 
                `service_title1`, `service_title2`, `service_title3`, 
                `service_title4`, `service_title5`, `service_title6`
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare and bind parameters
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssssssssssssssssssssss", 
                        $_POST['id'],
                        $_POST['banner_image1'],
                        $_POST['banner_image2'],
                        $_POST['banner_image3'],
                        $_POST['paragraph_title1'],
                        $_POST['paragraph_content1'],
                        $_POST['paragraph_title2'],
                        $_POST['paragraph_content2'],
                        $_POST['paragraph_title3'],
                        $_POST['paragraph_content3'],
                        $_POST['faq_title1'],
                        $_POST['faq_content1'],
                        $_POST['faq_title2'],
                        $_POST['faq_content2'],
                        $_POST['faq_title3'],
                        $_POST['faq_content3'],
                        $_POST['faq_title4'],
                        $_POST['faq_content4'],
                        $_POST['service1'],
                        $_POST['service2'],
                        $_POST['service3'],
                        $_POST['service4'],
                        $_POST['service5'],
                        $_POST['service6'],
                        $_POST['service_title1'],
                        $_POST['service_title2'],
                        $_POST['service_title3'],
                        $_POST['service_title4'],
                        $_POST['service_title5'],
                        $_POST['service_title6']);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Homepage Entry</title>
</head>
<body>
    <h2>Insert Homepage Entry</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="id">ID:</label><br>
        <input type="text" id="id" name="id" required><br><br>
        
        <label for="banner_image1">Banner Image 1:</label><br>
        <input type="text" id="banner_image1" name="banner_image1" required><br><br>
        
        <label for="banner_image2">Banner Image 2:</label><br>
        <input type="text" id="banner_image2" name="banner_image2" required><br><br>
        
        <label for="banner_image3">Banner Image 3:</label><br>
        <input type="text" id="banner_image3" name="banner_image3" required><br><br>
        
        <label for="paragraph_title1">Paragraph Title 1:</label><br>
        <input type="text" id="paragraph_title1" name="paragraph_title1" required><br><br>
        
        <label for="paragraph_content1">Paragraph Content 1:</label><br>
        <textarea id="paragraph_content1" name="paragraph_content1" rows="4" required></textarea><br><br>
        
        <label for="paragraph_title2">Paragraph Title 2:</label><br>
        <input type="text" id="paragraph_title2" name="paragraph_title2" required><br><br>
        
        <label for="paragraph_content2">Paragraph Content 2:</label><br>
        <textarea id="paragraph_content2" name="paragraph_content2" rows="4" required></textarea><br><br>
        
        <label for="paragraph_title3">Paragraph Title 3:</label><br>
        <input type="text" id="paragraph_title3" name="paragraph_title3" required><br><br>
        
        <label for="paragraph_content3">Paragraph Content 3:</label><br>
        <textarea id="paragraph_content3" name="paragraph_content3" rows="4" required></textarea><br><br>
        
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
        
        <label for="service1">Service 1:</label><br>
        <textarea id="service1" name="service1" rows="2" required></textarea><br><br>
        
        <label for="service2">Service 2:</label><br>
        <textarea id="service2" name="service2" rows="2" required></textarea><br><br>
        
        <label for="service3">Service 3:</label><br>
        <textarea id="service3" name="service3" rows="2" required></textarea><br><br>
        
        <label for="service4">Service 4:</label><br>
        <textarea id="service4" name="service4" rows="2" required></textarea><br><br>
        
        <label for="service5">Service 5:</label><br>
        <textarea id="service5" name="service5" rows="2" required></textarea><br><br>
        
        <label for="service6">Service 6:</label><br>
        <textarea id="service6" name="service6" rows="2" required></textarea><br><br>
        
        <label for="service_title1">Service Title 1:</label><br>
        <input type="text" id="service_title1" name="service_title1" required><br><br>
        
        <label for="service_title2">Service Title 2:</label><br>
        <input type="text" id="service_title2" name="service_title2" required><br><br>
        
        <label for="service_title3">Service Title 3:</label><br>
        <input type="text" id="service_title3" name="service_title3" required><br><br>
        
        <label for="service_title4">Service Title 4:</label><br>
        <input type="text" id="service_title4" name="service_title4" required><br><br>
        
        <label for="service_title5">Service Title 5:</label><br>
        <input type="text" id="service_title5" name="service_title5" required><br><br>
        
        <label for="service_title6">Service Title 6:</label><br>
        <input type="text" id="service_title6" name="service_title6" required><br><br>
        
        <input type="submit" value="Insert">
    </form>
</body>
</html>
