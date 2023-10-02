<?php
$page = 'edit_profile';
require_once '../path.php';
require_once 'header.php';
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
                <form  method="POST" action="<?= model_url ?>corporate_edit"  enctype="multipart/form-data" >
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img src="<?= file_url . $image ?>" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                        <div class="button-wrapper">
                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                <span class="d-none d-sm-block">Upload new photo</span>
                                <i class="bx bx-upload d-block d-sm-none"></i>
                                <input type="file" id="upload" class="account-file-input" name="corporate_image" hidden accept="image/png, image/jpeg" />
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
                                <label for="corporate_name" class="form-label">Name</label>
                                <input class="form-control" type="text" id="corporate_name" name="corporate_name" value="<?= $profile['corporate_name'] ?>" autofocus />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input class="form-control" type="text" id="email" name="corporate_email" value="<?= $profile['corporate_email'] ?>" readonly />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="corporate_passport" class="form-label">ID/Passport</label>
                                <input type="text" class="form-control" id="corporate_passport" name="corporate_passport" value="<?= $profile['corporate_passport'] ?>" readonly />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="phoneNumber">Phone Number</label>
                                <div class="input-group input-group-merge">
                                    
                                    <input type="text" id="phoneNumber" name="corporate_phone" class="form-control" value="<?= $profile['corporate_phone'] ?>" />
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="corporate_address" value="<?= $profile['corporate_address'] ?>"  />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="state" class="form-label">Age</label>
                                <input class="form-control" type="text" id="corporate_age" name="corporate_age"   value="<?= $profile['corporate_age'] ?>"  />
                            </div>

                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                        
                        </div>
                    
                </div>
                <!-- /Account -->
                </form>
            </div>
            
        </div>
    </div>
</div>


<?php include_once 'footer.php'; ?>