<?php
include_once 'header.php';
// cout($_POST);
$post_time = $_POST['time'];
$time_array = explode('-', $post_time);
$start_time = trim($time_array[0]); // Trim to remove any leading/trailing whitespace
$end_time = trim($time_array[1]); // Trim to remove any leading/trailing whitespace

?>
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-fixed text-light" style="background-image: url(assets/img/banner/banner5.jpeg);">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Our Services</h1>
            </div>
            <div class="col-md-6 text-right">
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><a href="#">Pages</a></li>
                    <li class="active">Services</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Services
    ============================================= -->
<div class="solid-services-area default-padding bottom-less bg-gray">
    <div class="container">
        <div class="row">
            <div class="services-items">

                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <i class="flaticon-pharmacy"></i>
                        <h4>Individual: <span class="MoneySpan"> Ksh. 3,000 </span></h4>
                        <ul>
                            <li>
                                Personal Development
                            </li>
                            <li>
                                General Counselling
                            </li>
                            <li>
                                Therapy for Depression
                            </li>
                            <li>
                                Anxiety Management
                            </li>
                            <li>
                                Post Traumatic Stress
                                Management
                            </li>
                            <li>
                                Relationships , Family and
                                Marriage Counselling
                            </li>
                            <li>
                                Loss and Grief Counselling
                            </li>
                            <li>
                                Alcohol, Drug and Addiction
                                Recovery
                            </li>
                            <li>
                                HTS Counselling

                            </li>
                            <li>
                                Personalised and Group Therapy/
                                Counselling
                            </li>
                        </ul>
                        <form method="POST" action="<?= model_url ?>book">
                            <input hidden name="subscription_package" value="individual" />
                            <input hidden name="subscription_amount" value="3000.00" />
                            <input hidden name="therapist_id" value="<?= $_POST['therapist_id'] ?>" />
                            <input hidden name="session_date" value="<?= $_POST['date'] ?>" />
                            <input hidden name="session_start_time" value="<?= $start_time ?>" />
                            <input hidden name="session_end_time" value="<?= $end_time ?>" />
                            <button type="submit" class="btn btn-theme effect btn-md" style="margin-top:10px">
                                Book
                            </button>
                        </form>
                    </div>
                </div>
                <!-- End Single Item -->

                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <i class="flaticon-pharmacy"></i>
                        <h4>Student: <span class="MoneySpan"> Ksh. 1,500 </span></h4>
                        <ul>
                            <li>
                                Personal Development
                            </li>
                            <li>
                                General Counselling
                            </li>
                            <li>
                                Therapy for Depression
                            </li>
                            <li>
                                Anxiety Management
                            </li>
                            <li>
                                Post Traumatic Stress
                                Management
                            </li>
                            <li>
                                Relationships , Family and
                                Marriage Counselling
                            </li>
                            <li>
                                Loss and Grief Counselling
                            </li>
                            <li>
                                Alcohol, Drug and Addiction
                                Recovery
                            </li>
                            <li>
                                HTS Counselling

                            </li>
                            <li>
                                Personalised and Group Therapy/
                                Counselling
                            </li>
                        </ul>
                        <form method="POST" action="<?= model_url ?>book">
                            <input hidden name="subscription_package" value="student" />
                            <input hidden name="subscription_amount" value="1500.00" />
                            <input hidden name="therapist_id" value="<?= $_POST['therapist_id'] ?>" />
                            <input hidden name="session_date" value="<?= $_POST['date'] ?>" />
                            <input hidden name="session_start_time" value="<?= $start_time ?>" />
                            <input hidden name="session_end_time" value="<?= $end_time ?>" />
                            <button type="submit" class="btn btn-theme effect btn-md" style="margin-top:10px">
                                Book
                            </button>
                        </form>
                    </div>
                </div>
                <!-- End Single Item -->


                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <i class="flaticon-pharmacy"></i>
                        <h4>Couple: <span class="MoneySpan"> Ksh. 4,000 </span></h4>
                        <ul>
                            <li>
                                Personal Development
                            </li>
                            <li>
                                General Counselling
                            </li>
                            <li>
                                Therapy for Depression
                            </li>
                            <li>
                                Anxiety Management
                            </li>
                            <li>
                                Post Traumatic Stress
                                Management
                            </li>
                            <li>
                                Relationships , Family and
                                Marriage Counselling
                            </li>
                            <li>
                                Loss and Grief Counselling
                            </li>
                            <li>
                                Alcohol, Drug and Addiction
                                Recovery
                            </li>
                            <li>
                                HTS Counselling

                            </li>
                            <li>
                                Personalised and Group Therapy/
                                Counselling
                            </li>
                        </ul>
                        <form method="POST" action="<?= model_url ?>book">
                            <input hidden name="subscription_package" value="couple" />
                            <input hidden name="subscription_amount" value="4000.00" />
                            <input hidden name="therapist_id" value="<?= $_POST['therapist_id'] ?>" />
                            <input hidden name="session_date" value="<?= $_POST['date'] ?>" />
                            <input hidden name="session_start_time" value="<?= $start_time ?>" />
                            <input hidden name="session_end_time" value="<?= $end_time ?>" />
                            <button type="submit" class="btn btn-theme effect btn-md" style="margin-top:10px">
                                Book
                            </button>
                        </form>
                    </div>
                </div>
                <!-- End Single Item -->


                <!-- Single Item -->
                <div class="col-md-3 col-sm-6 equal-height">
                    <div class="item">
                        <i class="flaticon-pharmacy"></i>
                        <h4>Group of 10: <span class="MoneySpan"> Ksh. 5,000 </span></h4>
                        <ul>
                            <li>
                                Personal Development
                            </li>
                            <li>
                                General Counselling
                            </li>
                            <li>
                                Therapy for Depression
                            </li>
                            <li>
                                Anxiety Management
                            </li>
                            <li>
                                Post Traumatic Stress
                                Management
                            </li>
                            <li>
                                Relationships , Family and
                                Marriage Counselling
                            </li>
                            <li>
                                Loss and Grief Counselling
                            </li>
                            <li>
                                Alcohol, Drug and Addiction
                                Recovery
                            </li>
                            <li>
                                HTS Counselling

                            </li>
                            <li>
                                Personalised and Group Therapy/
                                Counselling
                            </li>

                        </ul>
                        <form method="POST" action="<?= model_url ?>book">
                            <input hidden name="subscription_package" value="group" />
                            <input hidden name="subscription_amount" value="5000.00" />
                            <input hidden name="therapist_id" value="<?= $_POST['therapist_id'] ?>" />
                            <input hidden name="session_date" value="<?= $_POST['date'] ?>" />
                            <input hidden name="session_start_time" value="<?= $start_time ?>" />
                            <input hidden name="session_end_time" value="<?= $end_time ?>" />
                            <button type="submit" class="btn btn-theme effect btn-md" style="margin-top:10px">
                                Book
                            </button>
                        </form>
                    </div>
                </div>
                <!-- End Single Item -->


            </div>
        </div>
    </div>
</div>
<!-- End Services -->

<style>
    .MoneySpan {
        font-size: 0.8em;
    }
</style>

<?php
include_once 'footer.php';

?>