<?php
include_once 'header.php';

?>
<!-- Start Banner 
    ============================================= -->
<div class="banner-area responsive-auto-height text-small">
    <div class="item shadow dark text-light bg-fixed" style="background-image: url(assets/img/banner/banner1.jpeg);">
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="row">
                        <div class="content double-items">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-8">
                                        <div class="content-block">
                                            <h1><span id="mySpan">Comprehensive </span> <br style="display: block;"> Mental Wellness Services.</h1>
                                            <p>
                                                Making mental health a way of life by providing accessible,cost effective and comprehensivemental wellness services.
                                            </p>
                                            <a class="btn btn-primary">
                                                Find A Therapist
                                            </a>

                                        </div>
                                        <!-- /.content-block -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <!-- Start Appoinment Form -->
                                    <div class="col-md-5 col-lg-4 col-sm-6 appoinment">
                                        <div class="appoinment-box">
                                            <div class="heading">
                                                <h2>Make an Appointment</h2>
                                            </div>
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select>
                                                                <option value="1">Male</option>
                                                                <option value="2">Female</option>
                                                                <option value="3">Child</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <select>
                                                                <option value="1">Department</option>
                                                                <option value="2">Medecine</option>
                                                                <option value="4">Dental Care</option>
                                                                <option value="5">Traumatology</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <button type="submit" name="submit" id="submit">
                                                            Submit Query <i class="fa fa-paper-plane"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Appoinment Form -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.container -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Start About
    ============================================= -->
<div class="about-area default-padding">
    <div class="container">
        <div class="row">
            <div class="about-items">
                <div class="col-md-6 info">
                    <h4>
                        About Us
                    </h4>
                    <p>
                        The peak of Covid 19 was a time of reckoning for many people across the globe. We all went through different encounters and this changed our lives either positively or negatively.
                        During this time, mental health conditions were on the surge and the numbers continue to rise by the day. PsychX is a brain child of individuals who had an encounter with mental health either directly or indirectly.
                    </p>

                </div>
                <div class="col-md-6 tabs-items">
                    <!-- Tab Nav -->
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                <i class="fas fa-notes-medical"></i> Mission
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                <i class="fas fa-notes-medical"></i> Vision
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                <i class="fas fa-map-marker-alt"></i> Location
                            </a>
                        </li>
                    </ul>
                    <!-- End Tab Nav -->
                    <!-- Start Tab Content -->
                    <div class="tab-content tab-content-info">
                        <!-- Single Item -->
                        <div id="tab1" class="tab-pane fade active in">
                            <div class="info title">
                                <h3>Our Mission</h3>
                                <p>
                                    Making mental health a way of life by providing accessible, cost effective and comprehensive mental wellness services
                                </p>

                                <!-- <a class="btn btn-theme border btn-md" href="#">Make Appoinment</a> -->
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab2" class="tab-pane fade">
                            <div class="info title">
                                <h3>Our Vision</h3>
                                <p>
                                    To be the leading provider of mental health services globally.
                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab3" class="tab-pane fade">
                            <div class="info title">
                                <h3>Our Location</h3>
                                <p>
                                    Our offices are
                                    at Pinetree Plaza 8th Floor, Kaburu Drive off Ngong Road, Nairobi. However, to accommodate all our clients, we also offer online services.

                                </p>
                            </div>
                        </div>
                        <!-- End Single Item -->

                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->


<!-- Start Departments
    ============================================= -->
<div class="department-tabs default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-3 tab-navs">
                <div class="heading">
                    <h4>Counseling Services</h4>
                </div>
                <!-- Tab Nav -->
                <ul class="nav nav-pills">
                    <li class="active">
                        <a data-toggle="tab" href="#tab1" aria-expanded="true">
                            Therapy for PTSD
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab2" aria-expanded="false">
                            Anxiety Management
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab3" aria-expanded="false">
                            Therapy for Depression
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab4" aria-expanded="false">
                            Loss and Grief
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab5" aria-expanded="false">
                            Marriage, Love and Relationships
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab6" aria-expanded="false">
                            Alcohol, Drugs and Addictions
                        </a>
                    </li>
                </ul>
                <!-- End Tab Nav -->
            </div>
            <div class="col-md-9 tab-contents">
                <div class="row">
                    <!-- Start Tab Content -->
                    <div class="tab-content tab-content-info">
                        <!-- Single Item -->
                        <div id="tab1" class="tab-pane fade active in">

                            <!-- Start Department Info -->
                            <div class="col-md-12">
                                <div class="info title">

                                    <h3> Therapy for PTSD</h3>
                                    <p>
                                        <b>
                                            Signs and Symptoms
                                        </b>
                                    </p>
                                    <li>
                                        Upsetting or unwanted symptoms e.g., nightmares, flashbacks, physical reactivity, or emotional distress.
                                    </li>
                                    <li>
                                        Tendencies of avoidance to avoid the trauma-associated thoughts or external reminders.
                                    </li>
                                    <li>
                                        Altered mood and cognition, which presents as negative thoughts and mood
                                    </li>
                                    <li>
                                        Inability to recall the events associated with the trauma.
                                    </li>
                                </div>
                            </div>
                            <!-- End Department Info -->



                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab2" class="tab-pane fade">
                            <div class="col-md-12">
                                <div class="info title">

                                    <h3> Anxiety Management</h3>
                                    <p>
                                        <b>
                                            Signs and Symptoms
                                        </b>
                                    </p>
                                    <li>
                                        Significant fear, which occurs very often and finds it difficult to control.
                                    </li>
                                    <li>
                                        Individuals with this disorder also live with the expectation that there is a possibility of something bad happening to them.
                                    </li>
                                    <li>
                                        There is also a presentation of restlessness
                                    </li>
                                    <li>
                                        Irritability
                                    </li>
                                    <li>
                                        Challenges with sleep
                                    </li>
                                    <li>
                                        Feeling tired all the time
                                    </li>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab3" class="tab-pane fade">
                            <div class="col-md-12">
                                <div class="info title">

                                    <h3> Therapy for Depression</h3>
                                    <p>
                                        <b>
                                            Signs and Symptoms
                                        </b>
                                    </p>
                                    <li>
                                        A depressed mood for most parts of the day or at times throughout the day.
                                    </li>
                                    <li>
                                        Reduced interest in pleasure or all activities
                                    </li>
                                    <li>
                                        Significant loss of weight and feelings of restless.
                                    </li>
                                    <li>
                                        The client may also feel worthless and reduced ability to think or make independent decisions.
                                    </li>
                                    <li>
                                        One may end up encountering feelings of death or committing suicide
                                    </li>
                                    <li>
                                        There is a slowing down of the thoughts and a reduced physical movement
                                    </li>
                                    <li>
                                        One would feel restless from time to time
                                    </li>
                                    <li>
                                        There is fatigue
                                    </li>
                                    <li>
                                        Worthlessness or inappropriately guilty.
                                    </li>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab4" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-6">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/1500x700.png" alt="Thumb">
                                    </div>
                                    <h3>Children Chare</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall
                                        walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men over day.
                                    </p>
                                </div>
                            </div>
                            <!-- End Department Info -->

                            <!-- Start Opening Hours -->
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday
                                            <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday
                                            <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday
                                            <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday
                                            <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday
                                            <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday
                                            <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday
                                            <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Opening Hours -->
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab5" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-6">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/1500x700.png" alt="Thumb">
                                    </div>
                                    <h3>Nuclear magnetic</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall
                                        walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men over day.
                                    </p>
                                </div>
                            </div>
                            <!-- End Department Info -->

                            <!-- Start Opening Hours -->
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday
                                            <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday
                                            <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday
                                            <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday
                                            <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday
                                            <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday
                                            <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday
                                            <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Opening Hours -->
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab6" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-6">
                                <div class="info title">
                                    <div class="thumb">
                                        <img src="assets/img/1500x700.png" alt="Thumb">
                                    </div>
                                    <h3>Traumatology</h3>
                                    <p>
                                        Calling nothing end fertile for venture way boy. Esteem spirit temper too say adieus who direct esteem. It esteems luckily mr or picture placing drawing no. Apartments frequently or motionless on reasonable projecting expression. Way mrs end gave tall
                                        walk fact bed.
                                    </p>
                                    <p>
                                        Placing assured be if removed it besides on. Far shed each high read are men over day.
                                    </p>
                                </div>
                            </div>
                            <!-- End Department Info -->

                            <!-- Start Opening Hours -->
                            <div class="col-md-6 opening-hours">
                                <div class="opening-info">
                                    <h4>Opening Hours</h4>
                                    <ul>
                                        <li>Sunday
                                            <div class="pull-right"> 6.00 am - 10.00 pm </div>
                                        </li>
                                        <li>Monday
                                            <div class="pull-right"> 8.00 am - 4.00 pm </div>
                                        </li>
                                        <li>Tuesday
                                            <div class="pull-right"> 9.00 am - 6.00 pm </div>
                                        </li>
                                        <li>Wednesday
                                            <div class="pull-right"> 10.00 am - 7.00 pm </div>
                                        </li>
                                        <li>Thursday
                                            <div class="pull-right"> 11.00 am - 9.00 pm </div>
                                        </li>
                                        <li>Friday
                                            <div class="pull-right"> 12.00 am - 12.00 pm </div>
                                        </li>
                                        <li>Saturday
                                            <div class="pull-right closed"> Closed </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Opening Hours -->
                        </div>
                        <!-- End Single Item -->

                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Departments -->



<!-- Start Services
    ============================================= -->
<div class="services-area inc-icon less-info bg-gray default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="services-items text-center">
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-doctor-1"></i>
                            <h4>Advanced Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-medicine"></i>
                            <h4>Respite Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-checkup"></i>
                            <h4>Daily Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <a href="#">
                            <i class="flaticon-neurology"></i>
                            <h4>Neuorology Care</h4>
                        </a>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Services -->

<!-- Start Why Chose Us 
    ============================================= -->
<div class="chose-us-area item-half">
    <div class="container-full">
        <div class="row">
            <div class="col-md-6 thumb bg-cover" style="background-image: url(assets/img/2440x1578.png);"></div>
            <div class="col-md-6 info">
                <div class="heading">
                    <h2>About us</h2>
                    <p>
                        Offering confined entrance no. Nay rapturous him see something residence. Highly talked do so vulgar. Her use behaved spirits and natural attempt say feeling. Exquisite mr incommode immediate he something ourselves it of. Law conduct yet chiefly beloved
                        examine village proceed
                    </p>
                </div>
                <ul>
                    <li>
                        <div class="info">
                            <h4>Qualified facilities</h4>
                            <p>
                                Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="info">
                            <h4>Top Level Doctors</h4>
                            <p>
                                Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="info">
                            <h4>Dedicated patient care</h4>
                            <p>
                                Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="info">
                            <h4>24/7 Emergency</h4>
                            <p>
                                Consider may dwelling old him her surprise finished families graceful. Gave led past poor met fine was new.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Why Chose Us -->

<!-- Start Doctors Tips 
    ============================================= -->
<div class="doctor-tips-area default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Health <span>Tips</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="health-tips-items tips-carousel owl-carousel owl-theme">
                <!-- Single Item -->
                <div class="single-item">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="assets/img/800x800.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <div class="doctor">
                                <h4>Dr. Jessica Ronal</h4>
                                <h5>MPH, Medicine, Surgery</h5>
                            </div>
                            <h3>How to live a healthy lifestyle?</h3>
                            <p>
                                Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed
                                no overcame possible it on.
                            </p>
                            <h4>Follow the instructions</h4>
                            <ul>
                                <li>Dont just worry about the things you cannot help.</li>
                                <li>Eat Healthy, work better, do gardening.</li>
                                <li>Some relationships can kill you. Avoid them at the most.</li>
                                <li>Focus on the good things that you like</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="assets/img/800x800.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <div class="doctor">
                                <h4>Dr. Jessica Ronal</h4>
                                <h5>MPH, Medicine, Surgery</h5>
                            </div>
                            <h3>How to live a healthy lifestyle?</h3>
                            <p>
                                Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed
                                no overcame possible it on.
                            </p>
                            <h4>Follow the instructions</h4>
                            <ul>
                                <li>Dont just worry about the things you cannot help.</li>
                                <li>Eat Healthy, work better, do gardening.</li>
                                <li>Some relationships can kill you. Avoid them at the most.</li>
                                <li>Focus on the good things that you like</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="single-item">
                    <div class="col-md-5">
                        <div class="thumb">
                            <img src="assets/img/800x800.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="info">
                            <div class="doctor">
                                <h4>Dr. Jessica Ronal</h4>
                                <h5>MPH, Medicine, Surgery</h5>
                            </div>
                            <h3>How to live a healthy lifestyle?</h3>
                            <p>
                                Frequently partiality possession resolution at or appearance unaffected he me. Engaged its was evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began of cause an scale. Subjects he prospect elegance followed
                                no overcame possible it on.
                            </p>
                            <h4>Follow the instructions</h4>
                            <ul>
                                <li>Dont just worry about the things you cannot help.</li>
                                <li>Eat Healthy, work better, do gardening.</li>
                                <li>Some relationships can kill you. Avoid them at the most.</li>
                                <li>Focus on the good things that you like</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Doctors Tips -->



<!-- Start Doctors 
    ============================================= -->
<div class="doctor-area bg-gray default-padding bottom-less">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Meet Our <span>Specialists</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="doctor-items text-center">
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/800x600.png" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Jessica Jones</h4>
                            <h5>Cardiologist</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/800x600.png" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Ahel Natasha</h4>
                            <h5>Dental surgeon</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/800x600.png" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Gabriela Beckett</h4>
                            <h5>Cosmetic Surgeon</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/800x600.png" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Jessica Jones</h4>
                            <h5>Cardiologist</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/800x600.png" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Ahel Natasha</h4>
                            <h5>Dental surgeon</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height">
                    <div class="item">
                        <div class="thumb">
                            <img src="assets/img/800x600.png" alt="Thumb">
                            <div class="overlay">
                                <a href="#"><i class="fas fa-plus"></i></a>
                            </div>
                            <div class="social">
                                <ul>
                                    <li class="facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="info">
                            <h4>Gabriela Beckett</h4>
                            <h5>Cosmetic Surgeon</h5>
                            <div class="appoinment-btn">
                                <a href="#">Make appoinment</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
</div>
<!-- End Doctors -->

<!-- Start Fun Factor
    ============================================= -->
<div class="fun-fact-area default-padding shadow light text-center bg-fixed text-light" style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-recovered"></i>
                    <div class="timer" data-to="230" data-speed="5000"></div>
                    <span class="medium">Satisfied Patients</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-doctor"></i>
                    <div class="timer" data-to="89" data-speed="5000"></div>
                    <span class="medium">Regular Doctors</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-department"></i>
                    <div class="timer" data-to="50" data-speed="5000"></div>
                    <span class="medium">Departments</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-nurse"></i>
                    <div class="timer" data-to="2348" data-speed="5000"></div>
                    <span class="medium">Servant</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Factor -->

<!-- Start Testimonials 
    ============================================= -->
<div class="testimonials-area carousel-shadow bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Patient <span>Testimonials</span></h2>
                    <p>
                        While mirth large of on front. Ye he greater related adapted proceed entered an. Through it examine express promise no. Past add size game cold girl off how old
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-items testimonial-carousel owl-carousel owl-theme">
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or.
                            </p>
                        </div>
                        <div class="provider">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Angle Natasha</h4>
                                <h5>patient of <span>surgery</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or.
                            </p>
                        </div>
                        <div class="provider">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>John Abraham</h4>
                                <h5>Dental <span>patients</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                Departure so attention pronounce satisfied daughters am. But shy tedious pressed studied opinion entered windows off. Advantage dependent suspicion convinced provision him yet. Mr immediate remaining conveying allowance do or.
                            </p>
                        </div>
                        <div class="provider">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Thumb">
                            </div>
                            <div class="info">
                                <h4>Kriti Sairi</h4>
                                <h5>patient of <span>surgery</span></h5>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Testimonials -->


<?php
include_once 'footer.php';

?>