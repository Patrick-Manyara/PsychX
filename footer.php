<!-- Start Footer 
    ============================================= -->
<footer class="bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="f-items default-padding">

                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height item">
                    <div class="f-item">
                        <h4>About</h4>
                        <p>
                            PsychX is a brain child of individuals who had an encounter with mental health either directly or indirectly. </p>

                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height item">
                    <div class="f-item link">
                        <h4>Our Depeartment</h4>
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-arrow-right"></i> Loss and Grief</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-arrow-right"></i> Anxiety Management
                                </a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-arrow-right"></i> Therapy for PTSD</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-arrow-right"></i> Therapy for Depression</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-arrow-right"></i> Marriage, Love and Relationships</a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-arrow-right"></i> Alcohol, Drugs and Addictions</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-md-4 col-sm-6 equal-height item">
                    <div class="f-item contact">
                        <h4>Contact</h4>
                        <ul>
                            <li>
                                <i class="fas fa-phone"></i>
                                <p>Phone <span>0720401194</span></p>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <p>Email <span><a href="mailto:hello@psychx.io">hello@psychx.io</a></span></p>
                            </li>
                            <li>
                                <i class="fas fa-map"></i>
                                <p>Office <span>Pinetree Plaza, Kaburu Drive. Ngong Road, Nairobi</span></p>
                            </li>
                            <li>
                                <i class="fab fa-whatsapp"></i>
                                <p>Whatsapp <span>0720401194</span></p>
                            </li>
                        </ul>

                    </div>
                </div>
                <!-- End Single Item -->
            </div>
        </div>
    </div>
    <!-- Start Footer Bottom -->
    <div class="footer-bottom bg-dark text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; Copyright <?= get_current_year() ?>. All Rights Reserved by <a href="#">PsychX</a>. Powered by <a href="https://vesencomputing.com">Vesen Computing</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!-- End Footer -->

<!-- jQuery Frameworks
    ============================================= -->
<script src="assets/js/jquery-1.12.4.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/equal-height.min.js"></script>
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/modernizr.custom.13711.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/count-to.js"></script>
<script src="assets/js/YTPlayer.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>
<script src="assets/js/bootsnav.js"></script>
<script src="assets/js/main.js"></script>

<style>
    .DeeFlex {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .Symptoms {
        text-transform: uppercase;
    }

    .HomeImg {
        height: 30em;
        -o-object-fit: cover;
        object-fit: cover;
        width: 100%;
    }

    .MySpinner {
        display: none;
    }

    .MySpan {
        font-size: 1.1em;
        font-style: italic;
        text-transform: uppercase;
        text-decoration: underline;
    }

    .FindImg {}

    .SearchFilter,
    .SignInForm,
    #target2 {
        display: none;
        -webkit-animation: fadein 2s;
        /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadein 2s;
        /* Firefox < 16 */
        -ms-animation: fadein 2s;
        /* Internet Explorer */
        -o-animation: fadein 2s;
        /* Opera < 12.1 */
        animation: fadein 2s;
    }

    .LogInForm {
        -webkit-animation: fadein 2s;
        /* Safari, Chrome and Opera > 12.1 */
        -moz-animation: fadein 2s;
        /* Firefox < 16 */
        -ms-animation: fadein 2s;
        /* Internet Explorer */
        -o-animation: fadein 2s;
        /* Opera < 12.1 */
        animation: fadein 2s;
    }

    .CheckVoucher {
        padding: 5px;
        border-radius: 1em;
        background: #05679E;
        color: white;
        font-size: 1.2em;
        font-weight: 700;
        margin-top: 10px;
    }

    .HeartContainer {
        position: relative;
        width: 100%;
        /* Adjust the width and height as needed */
        height: 200px;
    }

    .HeartArea {
        position: absolute;
        top: 20px;
        right: 20px;
        font-size: 36px;
    }


    @keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Firefox < 16 */
    @-moz-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Safari, Chrome and Opera > 12.1 */
    @-webkit-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Internet Explorer */
    @-ms-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    /* Opera < 12.1 */
    @-o-keyframes fadein {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .pulse {

        box-shadow: 0 0 0 rgba(204, 169, 44, 0.4);
        animation: pulse 2s infinite;
    }

    .pulse:hover {
        animation: none;
    }

    @-webkit-keyframes pulse {
        0% {
            -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
        }

        70% {
            -webkit-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }

        100% {
            -webkit-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }

    @keyframes pulse {
        0% {
            -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
            box-shadow: 0 0 0 0 rgba(204, 169, 44, 0.4);
        }

        70% {
            -moz-box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 10px rgba(204, 169, 44, 0);
        }

        100% {
            -moz-box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
            box-shadow: 0 0 0 0 rgba(204, 169, 44, 0);
        }
    }

    @media screen and (max-width:600px) {
        .HomeImg {}

        .FindImg {}
    }
</style>

<script>
    $(function() {
        count = 0;
        wordsArray = ["Comprehensive", "Accessible", "Cost Effective"];
        setInterval(function() {
            count++;
            $("#mySpan").fadeOut(400, function() {
                $(this).text(wordsArray[count % wordsArray.length]).fadeIn(1000);
            });
        }, 4000);
    });
</script>
</body>

</html>