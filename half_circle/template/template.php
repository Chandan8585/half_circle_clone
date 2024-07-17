
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
    <div class="row">

      <div class="col-lg-8 mb-5 mb-lg-0">

        <div class="post-content post-single">
		   <h2 class="column-title mrt-0">Jingle Creation Services For Brand</h2>

          <div class="row">
            <div class="col-md-12">
              <p>We, at Half Circles Media Pvt. Ltd., offer Jingle production services. We help you reach your audience through our Jingles production services on a large scale. We help you create memorable Jingles as your signature music so that your audience remembers you by it. We create Jingles for radio stations, any product or brand, TV commercial, events, non advertising use, personal use or for any other purpose.</p>
              <p>Do You Remember, Jingles like “Har ek friend zaroori hota hai” (from Airtel) “Aya naya ujala”(from Ujala Supreme liquid ) used from simple words  years ago ? But now if we think of this sentence our mind automatically thinks of a short song or music. These melodies remind us of a particular brand. Why? People’s minds adapted this melody because of the continuous repetition and attractiveness of the Jingle. Jingles play an important role in branding of a company or a product on a large scale. These Jingles can be used for radio advertisements, television commercials etc. </p>
            </div><!-- col end -->
          </div><!-- 1st row end-->

          <div class="gap-40"></div>

          <div id="page-slider" class="page-slider">
            <div class="item">
              <img loading="lazy" class="img-fluid" src="images/projects/jingle1.jpg" alt="project-slider-image" />
            </div>

            <div class="item">
              <img loading="lazy" class="img-fluid" src="images/projects/jingle2.jpg" alt="project-slider-image" />
            </div>
          </div><!-- Page slider end -->

          <div class="gap-40"></div>


          <div class="post-body">
            <div class="entry-header">
           
       
            </div><!-- header end -->

            <div class="entry-content">
              <p>Our team of Jingle production services have expertise in creating Jingles. They are experienced in creating jingles which get stuck in people’s mind and constantly remind them of your brand or product. We, at Half Circles Media Pvt. Ltd., provide you with catchy Jingles aligning with your goals. That’ll definitely stick in people’s mind. Jingles created by our Jingle production service team will convey your message to the audience in a very catchy, persuasive manner with originality and freshness.</p>

              <p>We blend your requirements and the things your potential audience likes. We help you distinguish your brand with other competitors. We, at Half Circles Media Pvt. Ltd., help you create a personalized melody, fresh and original lyrics with your brand message to attract more clients for you. We take care of everything from research to the final musical product, to make the Jingle appropriate for your audience.  </p>

        
              <blockquote>
                <p>At Half Circles Media Pvt. Ltd., we’ve the best sound editors and Voice Over artists in our jingle production team. They use your brand’s slogan, tagline or mission to create a trending Jingle. Our Jingle production service team puts the best lyrics, sound, dialogues to give you the best trendy Jingle. </p>

              </blockquote>
			  
		
			    <div class="gap-40"></div>

              <p>Half Circles’ Jingle production service team does everything from research, motive, background sounds, lyrics, noises, dialogues, voice over to editing. Our Jingle service team writes lyrics specifically for your brand. It’ll stand out in comparison with your competitors They can mix any old Jingle of your brand with a modern twist or create a new one for your brand or product. They make the background sound from instruments, beatboxing, voiceovers, sound samples according to your Jingle needs. Our jingle production service team is familiar with all audio editing software. They use the best audio editing software to give you the best result. It is very easy to contact us online to our offives in Lucknow and Noida , we serves in entire india Your satisfaction with the requested Jingle is our priority.</p>
            </div>
    
					        

          </div><!-- post-body end -->
        </div><!-- post content end -->
      

          <div class="call-to-action classic">
            <div class="row align-items-center">
              <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">Interested In this service ?</h3>
                </div>
              </div><!-- Col end -->
              <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-primary" href="quote.php">Get a Quote</a>
                </div>
              </div><!-- col end -->
            </div><!-- row end -->
          </div><!-- Action end -->
         <!-- Author box end -->

        <!-- Post comment start -->
        <!-- Post comment end -->
        <!-- Comments form end -->
      </div>
      <!-- Content Col end -->

      <div class="col-lg-4">

        <div class="sidebar sidebar-right">
          

          <div class="widget">
            <h3 class="widget-title">Our Top Promotional Services for Business</h3>
            <ul class="nav service-menu">
              <li><a href="Jingles-creation.html">Jingles creation</a></li>
                            <li><a href="Ads-Video-Creation-TVC.html">Ads Video Creation (TVC)</a></li>
							<li><a href="Print-Ad-Creation.html">Print Ad Creation</a></li>
							<li><a href="Radio-Ad-Creation.html">Radio Ad Creation</a></li>
							<li><a href="RJ-Promotion.html">RJ Promotion</a></li>
            </ul>
          </div><!-- Categories end -->

          <!-- Archives end -->

          <h3 class="widget-title">Top Services </h3>

             <ul class="list-unstyled">
              
              <li><a href="Digital-Marketing.html">Digital Marketing</a></li>
              <li><a href="SEO.html">SEO</a></li>
     
			  <li><a href="SMO.html">Social Media Management</a></li>
              <li><a href="Content-Creation.html">Content Creation</a></li>
              <li><a href="Political-Services.html">Political Service</a></li>
              <li><a href="Surveys.html">Survey</a></li>
              <li><a href="SEM-PPC.html">PPC</a></li>
            </ul><!-- Tags end -->


        </div><!-- Sidebar end -->
      </div><!-- Sidebar Col end -->

    </div><!-- Main row end -->

  </div><!-- Conatiner end -->
</section><!-- Main container end -->


</html>
<?php
include 'footer.php';
?>