<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fafafa;
        }

        .wrapper {
            display: flex;
            width: 100%;
        }

        #sidebar {
            min-width: 250px;
            max-width: 250px;
            background: #0E684D;
            color: #fff;
            transition: all 0.3s;
        }

        #sidebar .custom-menu {
            padding: 10px;
            text-align: center;
        }

        #sidebar .custom-menu button {
            background: #6d7fcc;
            border: none;
            color: #fff;
            font-size: 20px;
        }

        #sidebar .img {
            background-size: cover;
            background-position: center;
            width: 100px;
            height: 100px;
            margin: 0 auto;
            border-radius: 50%;
        }

        #sidebar .user-logo {
            margin-bottom: 20px;
        }

        #sidebar h3 {
            color: #fff;
            margin-top: 15px;
        }

        #sidebar ul.components {
            padding: 20px 0;
        }

        #sidebar ul p {
            color: #fff;
            padding: 10px;
        }

        #sidebar ul li a {
            padding: 10px;
            font-size: 1.1em;
            display: block;
            color: #fff;
        }

        #sidebar ul li a:hover {
            background: black;
            color: #fff;
        }

        #sidebar ul li.active > a {
            background: black;
        }

        .header_nav {
            background: #0E684D;
        }

        a {
            color: white !important;
        }

        #sidebarCollapse {
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1000;
        }

        #content {
            width: 100%;
            padding: 20px;
            min-height: 100vh;
            transition: all 0.3s;
        }

        #sidebar.active {
            margin-left: -250px;
        }

        @media (max-width: 768px) {
            #sidebar {
                min-width: 100%;
                max-width: 100%;
                position: absolute;
            }

            #sidebar.active {
                margin-left: -100%;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light  mx-lg-0 header_nav">
        <a class="navbar-brand mx-5" href="#">
            <!-- Navbar -->
            <img src="../../images/mindBridge_logo.jpg" alt="logo" width="100" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse mx-5" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-1 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Home</a>
                </li>
            </ul>
        
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="../../images/campaign.png" width="30" height="30" class="rounded-circle" alt="User Profile">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right bg-dark" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <div class="wrapper">
        <nav id="sidebar">
         
        
            <ul class="list-unstyled components mb-5">
                <li class="active">
                    <a href="dashboard.php"><span class="fa fa-home mr-3"></span> Dashboard</a>
                </li>
                <li>
                    <a href="update_homepage.php"><span class="fa fa-edit mr-3"></span> Edit Homepage</a>
                </li>
                <li>
                    <a href="edithomepage.php"><span class="fa fa-eye mr-3"></span> View All pages</a>
                </li>
                <li>
                    <a href="#pagesSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-edit mr-3"></span> Edit Pages</a>
                    <ul class="collapse list-unstyled" id="pagesSubmenu">
                        <li>
                            <a href="update_testimonial.php">Edit Testimonial Page</a>
                        </li>
                        <li>
                            <a href="update_team.php">Edit Team Page</a>
                        </li>
                        <li>
                            <a href="update_our_story.php">Edit Our Story Page</a>
                        </li>
                        <li>
                            <a href="update_portfolio.php">Edit Portfolio Page</a>
                        </li>
                        <li>
                            <a href="update_contact.php">Edit Contact Us Page</a>
                        </li>
                        <li>
                            <a href="update_venture.php">Edit Ventures Page</a>
                        </li>
                        <li>
                            <a href="update_journalism.php">Edit Journalism Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="fa fa-trophy mr-3"></span> Top Review</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-cog mr-3"></span> Settings</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-support mr-3"></span> Support</a>
                </li>
                <li>
                    <a href="#"><span class="fa fa-sign-out-alt mr-3"></span> Sign Out</a>
                </li>
            </ul>
        </nav>

        <!-- <div id="content">
            <h2>Main Content</h2>
            <p>This is the main content area. Your content will be displayed here.</p>
        </div> -->
   
