<?php
$page = 'edit_profile';
require_once '../path.php';
require_once 'header.php';


session_assignment(array(
    'edit' => $profile['therapist_id']
), false);
$require = false;


$category_name =  get_by_id('category', $profile['category_id']);
$all_cats = get_all('category');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link" href="my_profile"><i class="bx bx-user me-1"></i> Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="bx bx-lock-alt me-1"></i> Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="edit_profile"><i class="bx bx-detail me-1"></i>Edit Profile</a>
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <form enctype="multipart/form-data" action="<?= model_url ?>therapist&t" method="POST">
                    <div class="card-body">
                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                            <img src="<?= file_url . $image ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Upload new photo</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input type="file" id="upload" name="therapist_image" class="account-file-input" hidden accept="image/png, image/jpeg" />
                                </label>
                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Reset</span>
                                </button>

                                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                        </div>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="therapist_name" class="form-label">Name</label>
                                <input class="form-control" type="text" id="therapist_name" name="therapist_name" value="<?= $profile['therapist_name'] ?>" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="therapist_email" value="<?= $profile['therapist_email'] ?>" readonly />
                            </div>
                            <div class="mb-3 col-md-6">
                                <?php
                                input_hybrid('gender', 'therapist_gender', $profile, $require);
                                ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="phoneNumber" name="therapist_phone" class="form-control" value="<?= $profile['therapist_phone'] ?>" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="therapist_address" value="<?= $profile['therapist_address'] ?>" />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">Location</label>
                                <input class="form-control" type="text" id="state" name="therapist_location" value="<?= $profile['therapist_location'] ?>" />
                            </div>
                            <div class="mb-3 col-md-12">

                                <!--<div class="form-group">-->
                                <!--    <label for="category"><?= ucfirst('Category ') ?> : <?= !empty($profile) ?  ucwords($category_name['category_name']) : '' ?> </label>-->
                                <!--    <select id="exampleFormControlSelect2" multiple data-placeholder="Select a category" class="select2 form-control" name="category_id[]">-->

                                        <?php foreach ($all_cats as $value) {
                                            $category_id = $value['category_id'];
                                        ?>
                                            <!--<option value="<?= $category_id ?>"><?= ucwords($value['category_name']) ?></option>-->
                                        <?php } ?>
                                <!--    </select>-->
                                <!--</div>-->


                                <?php
                                input_hybrid('Registration/ license number', 'therapist_license', $profile, $require);
                                input_hybrid('Area of speciality', 'therapist_specialty', $profile, $require);
                                input_hybrid('Years of experience', 'therapist_experience', $profile, $require, 'number');
                                textarea_input('statement quote', 'therapist_statement', $profile, $require);
                                textarea_input('qualifications', 'therapist_qualifications', $profile, $require);
                                textarea_input('bio', 'therapist_bio', $profile, false);
                                ?>
                            </div>
                            <div class="mb-3 col-md-12">
                                    <label for="therapist_video" class="form-label">Upload Video (30 sec - 1 min)</label>
                                    <input type="file" class="form-control" id="therapist_video" name="therapist_video" accept="video/*">
                                    <small id="videoHelp" class="form-text text-muted">Please upload a video of 30 seconds to 1 minute.</small>
                                </div>
                                



                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>