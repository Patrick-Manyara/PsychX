<?php
$page = 'home';
include_once 'header.php';
$therapists = get_all_therapists('activated', 3);
$categories = get_all('category');
$locations  = get_locations();
$row = array();

$vouchers = select_rows("SELECT * FROM user WHERE user_id = '$_SESSION[user_id]' ");
$missingDetails = false;
foreach ($vouchers as $voucher) {
    if (empty($voucher['user_image']) || empty($voucher['user_passport']) || empty($voucher['user_age']) || empty($voucher['user_address']) || empty($voucher['user_name'])) {
        $missingDetails = true;
        break;
    }
}
?>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Missing Details</h4>
      </div>
      <div class="modal-body">
        Kindly give all your details in order to be better matched with a therapist.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="okButton">OK</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    <?php if ($missingDetails) { ?>
        $('#myModal').modal('show');
    <?php } ?>

    $('#okButton').click(function() {
        window.location.href = "https://localhost/psychx/client/edit_profile";
    });
});
</script>



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
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="content-block">
                                            <h1><span id="mySpan">Comprehensive </span> <br style="display: block;"> Mental Wellness Services.</h1>
                                            <p>
                                                Making mental health a way of life by providing accessible ,cost effective and comprehensive mental wellness services.
                                            </p>
                                            <a class="btn btn-primary" href="find">
                                                Find A Therapist
                                            </a>
                                            <a class="btn btn-info pulse" href="https://wa.me/+254720401194">
                                                Reach Out <i class="fa-brands fa-whatsapp"></i>
                                            </a>

                                        </div>
                                        <!-- /.content-block -->
                                    </div>
                                    <!-- /.col-lg-6 -->
                                    <!-- Start Appoinment Form -->
                                    <div class="col-md-6 col-lg-6 col-sm-6 appoinment">
                                        <?php include_once 'suggestions.php'; ?>
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
<div class="about-area default-padding" id="about">
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
<div class="department-tabs default-padding" >
    <div class="container">
        <div class="row">
            <div class="col-md-3 tab-navs">
                <div class="heading" id="services">
                    <h4>Counseling Services</h4>
                </div>
                <!-- Tab Nav -->
                <ul class="nav nav-pills" >
                    <li class="active" id="loss">
                        <a data-toggle="tab" href="#tab4" aria-expanded="false">
                            Loss and Grief
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab5" aria-expanded="false">
                            Anxiety Management

                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab6" aria-expanded="false">
                            Therapy for Depression
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab7" aria-expanded="false">
                            Therapy for PTSD
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab8" aria-expanded="false">
                            Marriage, Love and Relationships
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#tab9" aria-expanded="false">
                            Alcohol, Drug & Addiction
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
                        <div id="tab4" class="tab-pane fade active in">
                            <!-- Start Department Info -->
                            <div class="col-md-12">
                                <div class="opening-info">
                                    <h3>Loss and Grief</h3>
                                    <p class="Symptoms">
                                        <b>
                                            Emotional Symptoms
                                        </b>
                                    </p>
                                    <li>
                                        Bitterness
                                    </li>
                                    <li>
                                        Detachment
                                    </li>
                                    <li>
                                        Inability to show or experience joy
                                    </li>
                                    <li>
                                        Increased irritability
                                    </li>
                                    <li>
                                        Numbness
                                    </li>
                                    <li>
                                        Preoccupation with loss
                                    </li>
                                    <p class="Symptoms" style="margin-top: 10px;">
                                        <b>Physical Symptoms

                                        </b>
                                    </p>
                                    <li>
                                        Chest pain
                                    </li>
                                    <li>
                                        Digestive problems
                                    </li>
                                    <li>
                                        Fatigue
                                    </li>
                                    <li>
                                        Headaches
                                    </li>
                                    <li>
                                        Sore muscles
                                    </li>
                                </div>
                            </div>
                            <!-- End Department Info -->
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab5" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-12">
                                <div class="opening-info">
                                    <h3>Anxiety Management</h3>
                                    <p class="Symptoms">
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
                            <!-- End Department Info -->
                        </div>
                        <!-- End Single Item -->


                        <!-- Single Item -->
                        <div id="tab6" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-12">
                                <div class="opening-info">
                                    <h3>Therapy For Depression</h3>
                                    <p class="Symptoms">
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
                            <!-- End Department Info -->
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div id="tab7" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-12">
                                <div class="opening-info">
                                    <h3>Therapy for PTSD</h3>
                                    <p class="Symptoms">
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
                        <div id="tab8" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-12">
                                <div class="opening-info">
                                    <h3>Marriage, Love and Relationships</h3>
                                    <p class="Symptoms">
                                        <b>
                                            Signs your marriage/relationship is in trouble
                                        </b>
                                    </p>
                                    <li>
                                        There are more criticisms than compliments
                                    </li>
                                    <li>
                                        There is avoidance of spending time together
                                    </li>
                                    <li>
                                        Reduction in interest in intimacy
                                    </li>
                                    <li>
                                        Failure in communication
                                    </li>
                                    <li>
                                        Constant arguments
                                    </li>
                                    <li>
                                        There is lack of trust
                                    </li>
                                </div>
                            </div>
                            <!-- End Department Info -->
                        </div>
                        <!-- End Single Item -->


                        <!-- Single Item -->
                        <div id="tab9" class="tab-pane fade">
                            <!-- Start Department Info -->
                            <div class="col-md-12">
                                <div class="opening-info">
                                    <h3>Alcohol, Drug & Addiction</h3>
                                    <p class="Symptoms">
                                        <b>
                                            Signs and Symptoms
                                        </b>
                                    </p>
                                    <li>
                                        Taking alcohol or substances in large amounts for long periods than one usually takes
                                    </li>
                                    <li>
                                        Desire to cut down the use of the substances with no success
                                    </li>
                                    <li>
                                        There is continued use of the substance despite being aware it could lead to adverse effects
                                    </li>
                                    <li>
                                        Using the substance, again and again
                                    </li>
                                    <li>
                                        Experiencing serious withdrawal effects when one attempts to stop using drugs eg hallucinations, nightmares, seizures, delusions, tremors
                                    </li>
                                </div>
                            </div>
                            <!-- End Department Info -->
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

<!-- Start Doctors 
    ============================================= -->
<?php
if (!empty($therapists)) { ?>


    <div class="doctor-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="site-heading text-center">
                        <h2>Some of Our <span>Specialists</span></h2>
                        <p>
                            Meet some of the incredible therapists willing to help you.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="doctor-items text-center">
                    <?php
                    foreach ($therapists as $therapist) {
                        $category = get_by_id('category', $therapist['category_id'])['category_name'];
                    ?>

                        <!-- Single Item -->
                        <div class="col-md-4 col-sm-6 equal-height">
                            <div class="item">
                                <div class="thumb">
                                    <img src="<?= file_url . $therapist['therapist_image'] ?>" class="HomeImg" alt="Thumb">
                                    <div class="overlay">
                                        <a href="#"><i class="fas fa-plus"></i></a>
                                    </div>
                                    <div class="social">
                                        <p>
                                            <?= limit_text($therapist['therapist_bio']) ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="info">
                                    <h4><?= $therapist['therapist_name'] ?></h4>
                                    <h5><?= $category ?></h5>
                                    <div class="appoinment-btn">
                                        <a href="rebook?tid=<?= encrypt($therapist['therapist_id']) ?>">Make appoinment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->
                    <?php
                    }
                    ?>

                    <a href="find" class="btn btn-primary">
                        See All
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php
}
?>
<!-- End Doctors -->

<!-- Start Fun Factor
    ============================================= -->
<div class="fun-fact-area default-padding shadow light text-center bg-fixed text-light" style="background-image: url(assets/img/banner/banner2.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-recovered"></i>
                    <div class="timer" data-to="<?= get_by_id('statistic', 'ZbTMsF5YUwt')['statistic_number'] ?>" data-speed="5000"></div>
                    <span class="medium">Satisfied Clients</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-doctor"></i>
                    <div class="timer" data-to="<?= get_by_id('statistic', 'sgb4ri2FOvH')['statistic_number'] ?>" data-speed="5000"></div>
                    <span class="medium">Therapists</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-department"></i>
                    <div class="timer" data-to="<?= get_by_id('statistic', 'HZNfm8bvRtM')['statistic_number'] ?>" data-speed="5000"></div>
                    <span class="medium">Daily Sessions</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 item">
                <div class="fun-fact">
                    <i class="flaticon-nurse"></i>
                    <div class="timer" data-to="<?= get_by_id('statistic', 'fv6BxabSsQ0')['statistic_number'] ?>" data-speed="5000"></div>
                    <span class="medium">Funding Received</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Fun Factor -->

<div>
    <div class="container">
        <div class="row">
            <!-- Start Faq -->
            <div class="col-md-12 faq-area">
            <div class="site-heading text-center">
                    <h2 style="margin-top: 2em;">Frequently Asked <span>Questions</span></h2>
                </div>
                <div class="acd-items acd-arrow">
                    <div class="panel-group symb" id="accordion">

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac1">
                                        Can I attend a session physically?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac1" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <p>Yes, we have a physical location along ngong road at Pine Tree Plaza</p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac2">
                                        How do I book a session?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Visit our website, Find a therapist, create an account to book a session and
                                        choose the most suitable therapist and your preferred time and Session Mode.
                                        You can also call us on: +254 720 401194 to book a session.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac3">
                                        Can I attend a session virtually?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Yes, we offer our services virtually,Physically and Anonymously</p>

                                </div>
                            </div>
                        </div>
                        <!-- End Single Item -->

                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac4">
                                        Can I switch a therapist?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Yes, you can switch a therapist to any other preferred therapist anytime.

                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                        <!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac5">
                                        Do you have a 24/7 Number to call?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Yes, you can always call PsychX on +254 720 401194 anytime and you will get
                                        someone to assist you</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item --><!-- Single Item -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#ac6">
                                        What services do you offer?
                                    </a>
                                </h4>
                            </div>
                            <div id="ac6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>We offer Mental wellness and wellbeing services to; individuals, Corporates ,
                                        Learning and religious institutions.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Item -->
                    </div>
                </div>
            </div>
            <!-- End Faq -->
        </div>
    </div>
</div>

<!-- Start Testimonials 
    ============================================= -->
<div class="testimonials-area carousel-shadow bg-gray default-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>User <span>Testimonials</span></h2>
                    <p>
                        Don't just take our word for it - hear from our clients about their positive experiences with PsychX's therapist. </p>
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
                                I was struggling with anxiety and depression, but thanks to PsychX and their wonderful therapist, I have found a new sense of calm and happiness. PsychX's therapist helped me work through my anxiety and depression, and I'm now feeling more balanced and happy than ever before.
                            </p>
                        </div>
                        <div class="provider">

                            <div class="info">
                                <h4>John Karanja</h4>
                                <!-- <h5>Patient of <span>anxiety and depression</span></h5> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                I was hesitant to try therapy, but PsychX made me feel comfortable and supported. Their therapist helped me work through my issues and I feel like a new person. I highly recommend PsychX to anyone seeking compassionate and effective therapy. Their therapist truly cares about their clients and goes above and beyond to help them achieve their goals. </p>
                        </div>
                        <div class="provider">

                            <div class="info">
                                <h4>Mary Koech</h4>
                                <!-- <h5>Therapy <span>patient</span></h5> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                After years of struggling with trauma, I found the healing I needed with PsychX. Their therapist was compassionate and knowledgeable, and helped me find the strength to move forward. PsychX's therapist helped me heal from my trauma and regain my confidence. I'm now able to approach life with a positive mindset and a renewed sense of purpose. </p>
                        </div>
                        <div class="provider">

                            <div class="info">
                                <h4>Emmanuel Wafula</h4>
                                <!-- <h5>patient of <span>PTSD</span></h5> -->
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <div class="item">
                        <div class="content">
                            <p>
                                I cannot thank PsychX enough for their amazing therapist. They have helped me improve my relationships, reduce my stress, and find a renewed sense of purpose. Thanks to PsychX, I finally found the support I needed to address my mental health struggles. Their therapist was empathetic, patient, and knowledgeable.
                        </div>
                        <div class="provider">

                            <div class="info">
                                <h4>Sarah Awendo</h4>
                                <!-- <h5>patient of <span>depression</span></h5> -->
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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/6399e556b0d6371309d46a68/1gk8ifnqj';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->


<?php
include_once 'footer.php';

?>