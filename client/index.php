<?php
$page        = 'dashboard';
$header_name = 'Home';

require_once '../path.php';
require_once 'header.php';

$current_year   = date("Y");

$session_today  = get_session_today($_SESSION['user_id']);
$past_sessions  = get_past_sessions($_SESSION['user_id']);
$next_sessions  = get_upcoming_sessions($_SESSION['user_id']);
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Welcome <?= $_SESSION['user_name'] ?>! 🎉</h5>
                            <p class="mb-4">
                                <?php
                                if (!empty($session_today)) { ?>
                                    You have a session today with <span class="fw-bold"><?= $session_today['therapist_name'] ?></span> at
                                    <span class="fw-bold"><?= $session_today['session_start_time'] ?></span> .
                                    Kindly check your schedule below.
                                <?php
                                } else {  ?>
                                    You do not have a session today. Check your activity log below for more details.
                                <?php
                                }
                                ?>

                            </p>

                            <a href="javascript:;" class="btn btn-sm btn-label-primary">View Badges</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="<?= admin_url ?>assets/img/illustrations/man-with-laptop-light.png" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">


        <?php
        if (!empty($past_sessions)) { ?>

            <!-- Activity Timeline -->
            <div class="col-md-12 col-lg-12 order-4 order-lg-3" style="margin-bottom:2em;">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Past Sessions</h5>

                    </div>
                    <div class="card-body">
                        <!-- Activity Timeline -->
                        <ul class="timeline">
                            <?php
                            foreach ($past_sessions as $past) { ?>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">Session <?= $past['session_code'] ?> </h6>
                                            <small class="text-muted">on <?= get_ordinal_month_year($past['session_date']) ?></small>
                                        </div>
                                        <p class="mb-2">With: <?= $past['therapist_name'] ?></p>
                                        <p class="mb-2">Mode: <?= ucwords($past['session_mode']) ?></p>
                                        <p class="mb-2">From: <?= $past['session_start_time'] ?> . To: <?= $past['session_end_time'] ?></p>
                                        <a href="../rebook?tid=<?= encrypt($past['therapist_id']) ?>" class="btn rounded-pill btn-outline-primary">
                                            <span class="tf-icons bx bx-pie-chart-alt me-1"></span>Book Session With Same Therapist
                                        </a>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="timeline-end-indicator">
                                <i class="bx bx-check-circle"></i>
                            </li>
                        </ul>
                        <!-- /Activity Timeline -->
                    </div>
                </div>
            </div>
            <!--/ Activity Timeline -->

        <?php
        }

        if (!empty($next_sessions)) { ?>

            <!-- Activity Timeline -->
            <div class="col-md-12 col-lg-12 order-4 order-lg-3">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0 me-2">Upcoming Sessions</h5>

                    </div>
                    <div class="card-body">
                        <!-- Activity Timeline -->
                        <ul class="timeline">
                            <?php
                            foreach ($next_sessions as $next) { ?>
                                <li class="timeline-item timeline-item-transparent">
                                    <span class="timeline-point timeline-point-primary"></span>
                                    <div class="timeline-event">
                                        <div class="timeline-header mb-1">
                                            <h6 class="mb-0">Session <?= $next['session_code'] ?> </h6>
                                            <small class="text-muted">on <?= get_ordinal_month_year($next['session_date']) ?></small>
                                        </div>
                                        <p class="mb-2">With: <?= $next['therapist_name'] ?></p>
                                        <p class="mb-2">Mode: <?= $next['session_mode'] ?></p>
                                        <p class="mb-2">From: <?= $next['session_start_time'] ?> . To: <?= $next['session_end_time'] ?></p>
                                    </div>
                                </li>
                            <?php
                            }
                            ?>
                            <li class="timeline-end-indicator">
                                <i class="bx bx-check-circle"></i>
                            </li>
                        </ul>
                        <!-- /Activity Timeline -->
                    </div>
                </div>
            </div>
            <!--/ Activity Timeline -->

        <?php
        }
        ?>
    </div>

</div>
<!-- / Content -->

<!-- Page JS -->


<?php include_once 'footer.php'; ?>