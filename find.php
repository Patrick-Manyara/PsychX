<?php
$page = 'therapists';
include_once 'header.php';

if (isset($_GET['values'])) {
    if (!empty($_POST['category_id'])) {
        $category = $_POST['category_id'];
        $categoryquery = " AND category_id = '$category' ";
    }

    if (!empty($_POST['gender'])) {
        $gender = $_POST['gender'];
        $genderquery = " AND therapist_gender = '$gender' ";
    }

    if (!empty($_POST['therapist_location'])) {
        $location = $_POST['therapist_location'];
        $locationquery = " AND therapist_location LIKE '%$location%' ";
    }

    $sql = "SELECT * FROM therapist WHERE therapist_activation = 'activated' ";
    $sql .= $genderquery . $categoryquery . $locationquery;
    $sql .= " ORDER BY rand() ";
    $therapists = select_rows($sql);
} else {
    $therapists = get_all_therapists('activated');
}

$categories = get_all('category');
$locations  = get_locations();
$row = array();

// cout($therapists);
?>

<!-- Start Doctors Tips 
    ============================================= -->
<div class="doctor-tips-area default-padding bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="site-heading text-center">
                    <h2>Our <span>Therapists</span></h2>
                    <?php
                    if (isset($_GET['values'])) { ?>
                        <p>
                            You are currently viewing your search results.
                        </p>
                    <?php
                    } else {
                    ?>
                        <p>
                            You are currently viewing all the therapists. Would you like to refine your search? Click the search button below
                        </p>
                    <?php
                    }
                    ?>
                    <p>
                        If you want to bookmark a therapist, click on the heart icon and they will be saved to your profile and dashboard and you can view them later.
                        <br>
                        Once you've saved as many therapists as you like, press the View Schedules button to proceed.
                    </p>

                </div>
            </div>
        </div>

        <div style="display: flex;justify-content: center;margin-top: 1em;margin-bottom: 5em;">
            <button type="button" id="SearchButton" class="btn btn-theme effect btn-md">Refine Search</button>
        </div>

        <div class="SearchFilter">
            <div class="appoinment-box">
                <div class="heading">
                    <h3>Find a Therapist</h3>
                </div>
                <form action="find?values" method="POST">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Category</label>
                                <select name="category_id">
                                    <option value="" selected disabled><?= 'Select category ' ?></option>
                                    <?php foreach ($categories as $cat) {
                                        $category_id = $cat['category_id'];
                                    ?>
                                        <option value="<?= $category_id ?>"><?= ucwords($cat['category_name']) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Location</label>
                                <select name="therapist_location">
                                    <option value="" selected disabled><?= 'Select location ' ?></option>
                                    <?php foreach ($locations as $location) { ?>
                                        <option value="<?= $location['therapist_location'] ?>"><?= ucwords($location['therapist_location']) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <?php
                            input_select('Gender', 'gender', $row, false, array('male', 'female', 'other'));
                            ?>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit" id="submit">
                                Search <i class="fa fa-paper-plane"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div style="display: flex;justify-content: center;margin-top: 1em;margin-bottom: 5em;">
                <button type="button" id="HideButton" class="btn btn-theme effect btn-md">Hide Search Area</button>
            </div>
        </div>
        <div class="row">
            <div class="health-tips-items tips-carousel owl-carousel owl-theme">
                <?php
                $cnt = 1;
                foreach ($therapists as $therapist) {
                    $therapist_id = encrypt($therapist['therapist_id']);
                    $category = get_by_id('category', $therapist['category_id'])['category_name'];
                    $sql2 = "SELECT * FROM bookmark WHERE therapist_id = '$therapist[therapist_id]' AND device_id = '$_COOKIE[device]' ";
                    $row2 = select_rows($sql2)[0];
                    if (empty($row2)) {
                        $border = 'regular';
                        $color = '#000';
                    } else {
                        $border = 'solid';
                        $color = '#542c6c';
                    }
                ?>
                    <!-- Single Item -->
                    <div class="single-item">
                        <div class="col-md-5">
                            <div class="thumb">
                                <img src="<?= file_url . $therapist['therapist_image'] ?>" alt="">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="info">

                                <div class="doctor">
                                    <h4><?= $therapist['therapist_name'] ?></h4>
                                    <h5><?= $category ?></h5>
                                </div>
                                <div class="HeartArea">
                                    <i style="color:<?= $color ?>" class="fa-<?= $border ?> fa-heart" id="BookmarkMe<?= $therapist['therapist_id'] ?>"></i>
                                    <div class="MySpinner">
                                        <p id="Loading<?= $therapist['therapist_id'] ?>">

                                        </p>
                                    </div>
                                </div>
                                <h3>More about <?= $therapist['therapist_name'] ?></h3>
                                <p>
                                    <?= $therapist['therapist_bio'] ?>
                                </p>
                                <h4>Where to find me</h4>
                                <ul>
                                    <li><?= $therapist['therapist_location'] ?></li>
                                </ul>
                                <div class="DeeFlex">
                                    <a href="rebook?tid=<?= encrypt($therapist['therapist_id']) ?>" class="btn btn-theme effect btn-md" style="margin-top: 1em;">
                                        View My Schedule
                                    </a>
                                </div>
                            </div>
                            <p class="SeeText">
                                <b>
                                    See the schedules for the therapists you've bookmarked:
                                </b>
                            </p>
                            <div class="DeeFlex">
                                <a data-animation="animated slideInUp" class="btn btn-theme border btn-md" style="margin-top: 10px;" href="schedule">View Bookmarked Schedules</a>
                            </div>
                            <!-- <p class="SeeText">
                                <b>
                                    See the schedules for all PsychX therapists:
                                </b>
                            </p>
                            <div class="DeeFlex">

                                <a data-animation="animated slideInUp" class="btn btn-theme border btn-md" style="margin-top: 10px;" href="full_schedule">View Full Therapist Schedule</a>

                            </div> -->
                        </div>
                    </div>
                <?php
                    $cnt++;
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Doctors Tips -->

<style>
    .SeeText {
        text-align: center;
        margin: 1em 0em;
        color: black;
    }
</style>


<script>
    $(document).ready(function() {
        <?php foreach ($therapists as $item) { ?>
            $("#BookmarkMe<?= $item['therapist_id'] ?>").on("click", function() {
                $('#BookmarkMe<?= $item['therapist_id'] ?>').hide();
                $('#Loading<?= $item['therapist_id'] ?>').text('Saved');
                $('.MySpinner').css('display', 'block');

                $.ajax({
                    url: "model/update/create.php?action=bookmark",
                    method: "POST",
                    data: {
                        therapist_id: "<?= $item['therapist_id'] ?>",
                    },
                    success: function(response) {
                        $('#BookmarkMe<?= $item['therapist_id'] ?>').show();
                        $('#Loading<?= $item['therapist_id'] ?>').hide();
                        console.log(response);
                        if (response === 'success') {
                            $("#BookmarkMe<?= $item['therapist_id'] ?>").css('color', '#542c6c');
                            $("#BookmarkMe<?= $item['therapist_id'] ?>").removeClass("fa-regular").addClass("fa-solid");
                        } else {
                            $("#BookmarkMe<?= $item['therapist_id'] ?>").css('color', 'black');
                            $("#BookmarkMe<?= $item['therapist_id'] ?>").removeClass("fa-solid").addClass("fa-regular");
                        }
                    }
                });

            });
        <?php } ?>

        $('#SearchButton').click(function() {
            $('.SearchFilter').css('display', 'block');
        });

        $('#HideButton').click(function() {
            $('.SearchFilter').css('display', 'none');
        });
    });
</script>

<?php
include_once 'footer.php';
?>