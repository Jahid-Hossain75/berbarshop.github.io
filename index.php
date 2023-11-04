<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barber Shop - Home</title>
    <!-- favicon img -->
    <link rel="shortcut icon" href="./image/logo.png" type="image/x-icon">
    <?php
        include "includes/header.php";
    ?>
    <!-- css file -->
    <link rel="stylesheet" href="css file/main.css">
    <link rel="stylesheet" href="./css file/main-responcive.css">
</head>
<body>

    <!-- navigation -->
    <section class="nav_section" id="nav_section">
        <div class="">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./image/logo.png" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#services_section">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about_section">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#footer_section">Contact</a>
                            </li>
                        </ul>

                        <div class="labguage_btn">
                            <button class="btn active"><img src="./image/usa flag.png">ENG</button>
                            <button class="btn"><img src="./image/nl flag.png">NL</button>
                        </div>

                        <div class="navbtn">
                            <!-- <a href="#"><img src="./image/btn-img.png"></a> -->
                            <a href="#"><button class="btn">Book Appointment</button></a>
                        </div>
                    </div>
                    
                </div>
            </nav>
        </div>
    </section>
    <!-- ./navigation -->




    <!-- home section -->
    <section class="home_section">
        <div class="container">
            <div class="image">
                <img src="./image/logo.png">
            </div>
        </div>
    </section>
    <!-- ./ home section -->




    <!-- elementor section -->
    <section class="elementor_section">
        <div class="container">
            <div class="row">
                <div class="top_text">
                    <h2>Tailored haircuts and beardtrims in the citycentre of Dorpsstraat</h2>
                </div>
                <div class="elementor_img">
                    <img src="./image/All appliances are there/Appliances-1.png">
                    <img src="./image/All appliances are there/Appliances-2.png">
                    <img src="./image/All appliances are there/Appliances-3.png">
                    <img src="./image/All appliances are there/Appliances-4.png">
                    <img src="./image/All appliances are there/Appliances-5.png">
                    <img src="./image/All appliances are there/Appliances-6.png">
                    <img src="./image/All appliances are there/Appliances-7.png">
                </div>
            </div>
            <div class="elementor_top_img">
                <img src="./image/Border an Other Art/art-2-01.png" class="elementor_img_1">
            </div>
        </div>
    </section>
    <!-- ./ elementor section -->




    <!-- elementor section 2 -->
    <section class="elementor_section_2" id="about_section">
        <div class="contai">
            <div class="row">
                <!-- left elementor site -->
                <div class="left_elementor_site elementor_text">
                    <h2>Welcome at Barber  Shop Jan in Dorpsstraat</h2>
                    <p>Barber Shop Jan is the hair salon in Elst, where you always walk out with a smile. We are ready to serve you with haircuts or a new hairstyle. At Barber  Shop Jan we attach great importance to professionalism, affordability and relaxation.</p>
                </div>
                <!-- right elementor site -->
                <div class="right_elementor_site elementor_image">
                    <!-- image -->
                    <div class="right_elementor_site_image">
                        <img src="./image/Our Salon/1.jpg">
                    </div>
                    <!-- content -->
                    <div class="our_image_content">
                        <div class="row">
                            <div class="content_box">
                                <h2>458</h2>
                                <h3>Happy Customer</h3>
                            </div>
                            <div class="content_box">
                                <h2>18</h2>
                                <h3>Reviews</h3>
                            </div>
                            <div class="content_box">
                                <h2>30</h2>
                                <h3>Haircuts</h3>
                            </div>
                            <div class="content_box">
                                <h2>68</h2>
                                <h3>Hair/Beard Products</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ elementor section 2  -->




    <!-- services section -->
    <section class="services_section" id="services_section">
        <div class="container">
            <div class="row">
                <!-- head text -->
                <div class="head_box">
                    <h2>Services</h2>
                </div>
                <!-- services row -->
                <div class="services_row">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 services_box">
                            <div class="image">
                                <img src="./image/Service/Men’s haircut-2-01.png">
                            </div>
                            <h2>Men’s haircut</h2>
                            <p>(wash and style)</p>
                            <span>$18</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 services_box">
                            <div class="image">
                                <img src="./image/Service/Kids till 12years-01.png">
                            </div>
                            <h2>Kids till 12 years</h2>
                            <p>(wash and style)</p>
                            <span>$13</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 services_box">
                            <div class="image">
                                <img src="./image/Service/Men’s haircut-01.png">
                            </div>
                            <h2>Hair & beard combo</h2>
                            <p>(hair, beard, wash and style)</p>
                            <span>$25</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 services_box">
                            <div class="image">
                                <img src="./image/Service/Beard trim-01.png">
                            </div>
                            <h2>Beard trim</h2>
                            <p>(wash and style)</p>
                            <span>$10</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 services_box">
                            <div class="image">
                                <img src="./image/Service/beard shave-01.png">
                            </div>
                            <h2>Beard shave</h2>
                            <p>(hair, beard, wash and style)</p>
                            <span>$10</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 services_box">
                            <div class="image">
                                <img src="./image/Service/Threading, waxing-01.png">
                            </div>
                            <h2>Waxing</h2>
                            <p>(wash and style)</p>
                            <span>$3</span>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 services_box">
                            <div class="image">
                                <img src="./image/Service/Hair& beard combo-01.png">
                            </div>
                            <h2>Threading</h2>
                            <p>(wash and style)</p>
                            <span>$3</span>
                        </div>
                    </div>
                </div>

                <!-- see all but -->
                <div class="all_services_btn">
                    <a href="#"><button class="btn">Show All</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- services section -->




    <!-- gentlement section -->
    <section class="gentlement_section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>By Gentlemen For Gentlemen</h2>
                    <p>At our shop you can buy professional hair care and styling products, which are specially made for men.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ gentelment section -->

    

    <!-- book appointment -->
    <section class="book_appointment">
        <div class="container">
            <!-- image row -->
            <div class="row">
                <div class="book_image">
                    <img src="./image/Border an Other Art/art-2-01.png" class="elementor_img_1">
                </div>
            </div>
            <!-- top content row -->
            <div class="row secend_row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 book_top_box">
                    <span><i class="fa-solid fa-calendar-check"></i></span>
                    <p>Here below you can book an appointment</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-12 book_top_box">
                    <span><i class="fa-solid fa-house-chimney-window"></i></span>
                    <p>You can also come by if there is no available place, then we will ensure that you get helped.</p>
                </div>
            </div>

            <!-- book you appointment row -->
            <div class="row third_row">
                <div class="head_content">
                    <h2>Book you appointment</h2>
                </div>
                <div class="select_content">
                    <h2>Select a Service:</h2>
                </div>
                <!-- service box -->
                <div class="row all_service_box">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 third_row_services_box">
                        <img src="./image/Service/Men’s haircut-2-01.png">
                        <h2>Men's Haircut</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 third_row_services_box">
                        <img src="./image/Service/Kids till 12years-01.png">
                        <h2>Kids till 12 years</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 third_row_services_box">
                        <img src="./image/Service/Men’s haircut-01.png">
                        <h2>Hair & Beard Combo</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 third_row_services_box">
                        <img src="./image/Service/Beard trim-01.png">
                        <h2>Beard Trim</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 third_row_services_box">
                        <img src="./image/Service/beard shave-01.png">
                        <h2>Beard shave </h2>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 third_row_services_box">
                        <img src="./image/Service/Threading, waxing-01.png">
                        <h2>Waxing</h2>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 third_row_services_box">
                        <img src="./image/Service/Hair& beard combo-01.png">
                        <h2>Threading</h2>
                    </div>
                </div>
            </div>

            <!-- image row -->
            <div class="row">
                <div class="book_image book_image_2">
                    <img src="./image/Border an Other Art/art-2-01.png" class="elementor_img_1">
                </div>
            </div>
        </div>
    </section>
    <!-- ./ book appointment -->




    <!-- our salon -->
    <section class="our_salon">
        <div class="container">
            <div class="row">
                <div class="our_head_content">
                    <h2>Our Salon</h2>
                </div>
                <div class="row our_row">
                    <div class="grid-wrapper">
                        <div class="our_img_box">
                            <img src="./image/Our Salon/1.jpg">
                        </div>
                        <div class="our_img_box">
                            <img src="./image/Our Salon/2.jpg">
                        </div>
                        <div class="our_img_box">
                            <img src="./image/Our Salon/3.jpg">
                        </div>
                        <div class="our_img_box">
                            <img src="./image/Our Salon/4.jpg">
                        </div>
                        <div class="our_img_box">
                            <img src="./image/Our Salon/5.jpg">
                        </div>
                        <div class="our_img_box">
                            <img src="./image/Our Salon/1.jpg">
                        </div>
                        <div class="our_img_box">
                            <img src="./image/Our Salon/2.jpg">
                        </div>
                        <div class="our_img_box">
                            <img src="./image/Our Salon/3.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ our salon -->



    <!-- berbar about -->
    <!-- <section class="berbar_about_section">
        <div class="container">
            <div class="row"> -->
                <!-- left column -->
                <!-- <div class="left_column col-lg-7 col-md-6 col-sm-6 col-12">
                    <h2>Welcome at Barber Shop in America</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis velit ullam nobis neque sit odio eaque aut. Sit nostrum neque nam rem mollitia dolorum, modi voluptate fuga quisquam quos voluptatem ipsum error magnam ad at. Delectus inventore aliquam quos vitae assumenda, praesentium earum officia. Dolorum tempora nisi animi impedit placeat.</p>
                </div> -->

                <!-- right column -->
                <!-- <div class="right_column col-lg-5 col-md-6 col-sm-6 col-12">
                    <img src="./image/countdown_here.jpg">
                </div>
            </div>
        </div>
    </section> -->
    <!-- ./berbar about -->





    <!-- review section -->
    <section class="review_section">
        <div class="container">
            <div class="row">
                <!-- review head content -->
                <div class="review_head_content">
                    <h2>Reviews 4,9</h2>
                    <h3>MORE THAN 18 REVIEWS</h3>
                </div>

                <div class="two_column">
                    <!-- post review -->
                    <div class="post_review col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="post_review_box">
                            <div class="post_review_img">
                                <img src="./image/Our Salon/1.jpg">
                            </div>
                            <div class="post_review_content">
                                <h3>Berbar Shop</h3>
                                <div class="star_box">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <h4>350 Coustomer Review</h4>
                            </div>
                        </div>
                        <div class="post_review_form">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <input type="text" name="name" placeholder="Full Name">
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email" placeholder="E-mail Address">
                                </div>
                                <div class="mb-3">
                                    <select name="review_star" id="">
                                        <option value="5">5 Star</option>
                                        <option value="4">4 Star</option>
                                        <option value="3">3 Star</option>
                                        <!-- <option value="2">2 Star</option>
                                        <option value="1">1 Star</option> -->
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <textarea name="massage" placeholder="Massage.." id="" cols="30" rows="2"></textarea>
                                </div>
                                <button type="submit" name="submit" class="btn">Submit</button>
                            </form>
                        </div>
                    </div>

                    <!-- show review -->
                    <div class="show_review col-lg-6 col-md-12 col-sm-12 col-12">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="display: flex; align-items: center; justify-content: center;">
                            <button class="carousel-control-prev tesi_btn_1 btn_1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="margin: 0;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <div class="carousel-inner" style="width: 80%; margin: auto;">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="first_slide">
                                            <div class="review_s_top_content">
                                                <div class="review_s_top_content_img">
                                                    <img src="./image/review img/unnamed (1).png">
                                                </div>
                                                <div class="top_content_text">
                                                    <h4>Hendrik</h4>
                                                    <p>2023-11-03</p>
                                                </div>
                                            </div>
                                            <div class="review_text">
                                                <div class="star_box">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>Top kapper</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="first_slide">
                                            <div class="review_s_top_content">
                                                <div class="review_s_top_content_img">
                                                    <img src="./image/review img/unnamed (2).png">
                                                </div>
                                                <div class="top_content_text">
                                                    <h4>Bzns Bss</h4>
                                                    <p>2023-10-29</p>
                                                </div>
                                            </div>
                                            <div class="review_text">
                                                <div class="star_box">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>Top kapper</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="first_slide">
                                            <div class="review_s_top_content">
                                                <div class="review_s_top_content_img">
                                                    <img src="./image/review img/unnamed (5).png">
                                                </div>
                                                <div class="top_content_text">
                                                    <h4>Johan</h4>
                                                    <p>2023-11-05</p>
                                                </div>
                                            </div>
                                            <div class="review_text">
                                                <div class="star_box">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>Nice Kapper</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="first_slide">
                                            <div class="review_s_top_content">
                                                <div class="review_s_top_content_img">
                                                    <img src="./image/review img/unnamed (3).png">
                                                </div>
                                                <div class="top_content_text">
                                                    <h4>Niels</h4>
                                                    <p>2023-10-27</p>
                                                </div>
                                            </div>
                                            <div class="review_text">
                                                <div class="star_box">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>Nice Kapper</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="first_slide">
                                            <div class="review_s_top_content">
                                                <div class="review_s_top_content_img">
                                                    <img src="./image/review img/unnamed.png">
                                                </div>
                                                <div class="top_content_text">
                                                    <h4>Abel</h4>
                                                    <p>2023-10-22</p>
                                                </div>
                                            </div>
                                            <div class="review_text">
                                                <div class="star_box">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                </div>
                                                <p>Nice Kapper</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-next tesi_btn_1 btn_1" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="margin: 0;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./review section -->





    <!-- Opening Hour -->
    <section class="opening_hour">
        <div class="container">
            <div class="row">
                <!-- opening hour head content -->
                <div class="opening_head_content">
                    <h2>Opening Berbar Shop</h2>
                </div>

                <!-- box content -->
                <div class="two_contect_opening_hour">
                    <!-- opening hour content -->
                    <div class="col-lg-7 col-md-6 col-sm-6 opening_hour_content">
                        <div class="top_head_open">
                            <h2>Opening Hour:</h2>
                        </div>
                        <div class="hour_list">
                            <table class="opening-hrs">
                                <tbody>
                                    <tr>
                                        <th>
                                            <i class="fa-solid fa-star"></i>
                                            <strong>Maandag</strong>
                                        </th>
                                        <td>12:00 &#8211;18:00</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa-solid fa-star"></i>
                                            <strong>Dinsdag</strong>
                                        </th>
                                        <td>10:00 &#8211;18:00</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa-solid fa-star"></i>
                                            <strong>Woensdag</strong>
                                        </th>
                                        <td>10:00 &#8211;18:00</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa-solid fa-star"></i>
                                            <strong>Donderdag</strong>
                                        </th>
                                        <td>10:00 &#8211;19:00</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa-solid fa-star"></i>
                                            <strong>Vrijdag</strong>
                                        </th>
                                        <td>10:00 &#8211;19:00</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa-solid fa-star"></i>
                                            <strong>Zaterdag</strong>
                                        </th>
                                        <td>10:00 &#8211;17:00</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <i class="fa-solid fa-star"></i>
                                            <strong>Zondag</strong>
                                        </th>
                                        <td>Gesloten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- openign hour image -->
                    <div class="col-lg-5 col-md-6 col-sm-6 opening_image">
                        <img src="./image/countdown_here.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./Opening Hour -->





    <!-- recent work -->
    <section class="recent_work">
        <div class="container">
            <div class="row">
                <!-- recent work head content -->
                <div class="recent_work_head_content">
                    <h2>Recent Work</h2>
                </div>

                <!-- recent work alll videos -->
                <div class="recent_work_all">
                    <div class="col-lg-3 col-md-4 col-sl-6 col-12 recent_work_box">
                        <img src="./image/Our Salon/1.jpg" alt="image">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sl-6 col-12 recent_work_box">
                        <img src="./image/Our Salon/2.jpg" alt="image">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sl-6 col-12 recent_work_box">
                        <img src="./image/Our Salon/3.jpg" alt="image">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sl-6 col-12 recent_work_box">
                        <img src="./image/Our Salon/4.jpg" alt="image">
                    </div>
                    <div class="col-lg-3 col-md-4 col-sl-6 col-12 recent_work_box">
                        <img src="./image/Our Salon/5.jpg" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ./recent work -->




    <!-- footer -->
    <section class="footer_section" id="footer_section">
        <footer class="footer">
            <div class="container">
                <div class="row all_flex">
                    <div class="col-lg-4 footer_col_1">
                        <div class="footer_logo">
                            <img src="./image/logo.png" alt="image">
                        </div>
                        <p><i class="fa-solid fa-building"></i> kvk: 90159748</p>
                        <p>Alegemene voorwaarden</p>
                    </div>
                    <div class="col-lg-4 footer_col_2">
                        <div class="footer_head_text">
                            <h4>Contact Us</h4>
                        </div>
                        <div class="bottom_content">
                            <p><i class="fa-solid fa-phone"></i>+31636338523</p>
                            <p><i class="fa-solid fa-envelope"></i><a href="#">info@barberjan.nl</a></p>
                            <p><i class="fa-solid fa-globe"></i><a href="#">www.Barbershopjan.nl</a></p>
                            <p><i class="fa-solid fa-location-dot"></i><a href="#">Dorpsstraat 17, 6661EE Elst</a></p>
                        </div>
                        <div class="social_link">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 footer_col_3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2460.811695944143!2d5.8460222750506015!3d51.919146580542844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7a62b2a18f89d%3A0xdd26accbb402d53c!2sDorpsstraat%2017%2C%206661%20EE%20Elst%2C%20Netherlands!5e0!3m2!1sen!2sbd!4v1699020886327!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!-- ./footer -->



    <!-- footer copyright -->
    <section class="copyright_section">
        <div class="container">
            <div class="row">
                <p>&copy; Copyright 2023 Berbar Shop</p>
            </div>
        </div>
    </section>
    <!-- ./ footer copyright -->



    <!-- top icon -->
    <div class="top_icon">
        <a href="#nav_section"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
    <!-- ./ tio icon -->

    <!-- whatsapp icon -->
    <div class="whatsapp_icon">
        <a href="http://wa.me/+31636338523" target="_blank">
            <img src="./image/whatsapp icon img.png" alt="image">
        </a>
    </div>
    <!-- ./ tio icon -->

        
    <!-- footer script -->
    <?php
        include "includes/footer-script.php";
    ?>
</body>
</html>