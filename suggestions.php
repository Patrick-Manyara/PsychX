<form method="POST" action="<?= model_url ?>filter">
    <div class="CompArea">
        <div class="CompAreaInner">
            <div id="one">
                <p class="BlockTitle">What kind of therapy are you looking for?</p>
                <div class="First" id="individual">
                    <div class="CompInner">
                        <div class="Start">
                            <p class="MainText">Individual</p>
                            <p class="SubText">For Myself<i class="fa-regular fa-circle-right"></i></p>
                        </div>
                    </div>
                </div>

                <div class="Second" id="couple">
                    <div class="CompInner">
                        <div class="Start">
                            <p class="MainText">Couple</p>
                            <p class="SubText">For A Couple<i class="fa-regular fa-circle-right"></i></p>
                        </div>

                    </div>
                </div>

                <div class="Third" id="teen">
                    <div class="CompInner">
                        <div class="Start">
                            <p class="MainText">Teen</p>
                            <p class="SubText">For A Teen<i class="fa-regular fa-circle-right"></i></p>
                        </div>

                    </div>
                </div>
            </div>

            <div id="two">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">What is your gender identity?</p>
                    <div class="Start3" id="woman">
                        <p class="MainText2">Woman</p>
                    </div>
                    <div class="Start3" id="man">
                        <p class="MainText2">Man</p>
                    </div>
                </div>
            </div>

            <div id="three">

                <div class="CompInner2 form-group">
                    <p class="BlockTitle">How old are you?</p>
                    <input type="number" name="age" class="form-control" />
                </div>
                <div>
                    <button type="button" id="confirm_age">Confirm Age</button>
                </div>
            </div>

            <div id="four">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">Have there been any significant life events or experiences you've had that you believe have had an impact on your mental and emotional well-being??</p>
                    <div class="Start2" id="yes">
                        <p class="MainText2">yes</p>
                    </div>
                    <div class="Start2" id="no">
                        <p class="MainText2">no</p>
                    </div>
                    <div class="Start2" id="not">
                        <p class="MainText2">would rather not say...</p>
                    </div>
                  
                </div>
            </div>

            <div id="five">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">Would you like to receive consultation from a male or female therapist?</p>
                    <div class="Start2" id="male">
                        <p class="MainText2">male</p>
                    </div>
                    <div class="Start2" id="female">
                        <p class="MainText2">female</p>
                    </div>
                    <div class="Start2" id="no">
                        <p class="MainText2">Not Specific. Any will do.</p>
                    </div>
                </div>
            </div>

            <div id="six">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">Would you like to book a consultation with our inhouse therapist @700/- only?</p>
                    <div class="Start2" id="yes">
                        <p class="MainText2">yes</p>
                    </div>
                    <div class="Start2" id="no">
                        <p class="MainText2">no</p>
                    </div>
                </div>
            </div>

            <div id="seven">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">Would you like live sessions or online sessions?</p>
                    <div class="Start2" id="live">
                        <p class="MainText2">live</p>
                    </div>
                    <div class="Start2" id="online">
                        <p class="MainText2">online</p>
                    </div>
                </div>
            </div>

            <div id="eight">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">Have you ever been in therapy before></p>
                    <div class="Start2" id="therapy_before">
                        <p class="MainText2">Yes, I have.</p>
                    </div>
                    <div class="Start2" id="first_time">
                        <p class="MainText2">No, this is my first time.</p>
                    </div>
                </div>
            </div>

            <div id="nine">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">Would you like the system to find a therapist for you or would you like to browse for yourself?</p>
                    <div class="Start2" id="find">
                        <p class="MainText2">find</p>
                    </div>
                    <div class="Start2" id="search">
                        <p class="MainText2">search</p>
                    </div>
                </div>
            </div>

            <div id="ten">
                <div class="CompInner2 fadeInLeft">
                    <p class="BlockTitle">Kindly confirm that the you're comfortable with the choices you've selected.</p>
                    <input hidden name="filter_values" id="filter_values" />
                    <button type="submit">Confirm</button>
                </div>
            </div>

        </div>
    </div>
</form>

<style>
    #two,
    #three,
    #four,
    #five,
    #six,
    #seven,
    #eight,
    #nine,
    #ten {
        display: none;
    }

    .CompArea {
        background: white;
        padding: 1em;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    }

    .CompAreaInner {}

    .CompInner {}

    .CompInner2 {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInLeft {
        0% {
            opacity: 0;
            -webkit-transform: translateX(20px);
        }

        100% {
            opacity: 1;
            -webkit-transform: translateX(0);
        }
    }

    @keyframes fadeInLeft {
        0% {
            opacity: 0;
            transform: translateX(20px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .fadeInLeft {
        -webkit-animation-name: fadeInLeft;
        animation-name: fadeInLeft;
    }

    /* animation-name: fadeInDown; */

    .Start2 {
        color: #325343;
        text-align: left;
        background-color: #a6de9b;
        border-radius: 6.25rem;
        margin: 0 0 1rem;
        padding: 16px 25px 14px;
        font-size: 18px;
        font-weight: 500;
        line-height: 24px;
    }

    .Start3 {
        color: #325343;
        text-align: left;
        background-color: #a6de9b;
        border-radius: 6.25rem;
        margin: 0 0 1rem;
        padding: 16px 25px 14px;
        font-size: 18px;
        font-weight: 500;
        line-height: 24px;
    }

    .Start2:hover {
        color: #f5f7f5;
        cursor: pointer;
        background-color: #397a4a;
    }

    .Start3:hover {
        color: #f5f7f5;
        cursor: pointer;
        background-color: #397a4a;
    }


    .MainText2 {
        text-transform: capitalize;
    }



    .First {
        background-color: #397a4a;
        color: #f5f7f5;
        cursor: pointer;
        height: 128px;
        border: 2px solid transparent;
        border-radius: 10px;
        margin: 0 0 1rem;
        padding: 16px;
        transition: border .3s, background-color .3s;
        display: block;
        position: relative;
    }

    .First::before {
        background-image: url('assets/img/new/one.png');
        content: "";
        height: 100%;
        z-index: 1;
        background-position: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .Second {
        background-color: #457777;
        color: #f5f7f5;
        cursor: pointer;
        height: 128px;
        border: 2px solid transparent;
        border-radius: 10px;
        margin: 0 0 1rem;
        padding: 16px;
        transition: border .3s, background-color .3s;
        display: block;
        position: relative;
    }

    .Second::before {
        background-image: url('assets/img/new/two.png');
        content: "";
        height: 100%;
        z-index: 1;
        background-position: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .Third {
        background-color: #a75d00;
        color: #f5f7f5;
        cursor: pointer;
        height: 128px;
        border: 2px solid transparent;
        border-radius: 10px;
        margin: 0 0 1rem;
        padding: 16px;
        transition: border .3s, background-color .3s;
        display: block;
        position: relative;
    }

    .Third::before {
        background-image: url('assets/img/new/three.png');
        content: "";
        height: 100%;
        z-index: 1;
        background-position: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .MainText {}

    .SubText {}

    .Start {}

    .End {}

    .End img {}

    .BlockTitle {
        color: black !important;
    }
</style>

<script>
            let choiceArray = [];

    $(document).ready(function() {
        $('#individual').click(function() {
            $('#two').css('display', 'block');
            $('#one').css('display', 'none');
            choiceArray.push('individual');
            console.log(choiceArray);

        });

        $('#couple').click(function() {
            $('#four').css('display', 'block');
            $('#one').css('display', 'none');
            choiceArray.push('couple', 'couple', 'couple');
            console.log(choiceArray);

        });

        $('#teen').click(function() {
            $('#two').css('display', 'block');
            $('#one').css('display', 'none');
            choiceArray.push('teen');
            console.log(choiceArray);

        });

        $('#woman').click(function() {
            $('#three').css('display', 'block');
            $('#two').css('display', 'none');
            choiceArray.push('woman');
            console.log(choiceArray);

        });

        $('#man').click(function() {
            $('#three').css('display', 'block');
            $('#two').css('display', 'none');
            choiceArray.push('man');
            console.log(choiceArray);

        });

        const confirmAgeButton = document.getElementById('confirm_age');

        confirmAgeButton.addEventListener('click', () => {
            const ageInput = document.querySelector('input[name="age"]');
            if (ageInput.value) {
                choiceArray.push(`${ageInput.value}`);
                ageInput.value = ''; // Clear the input field after adding the age to the array
            }
            $('#four').css('display', 'block');
            $('#three').css('display', 'none');
            console.log(choiceArray);
        });



        const startDivs = document.querySelectorAll('.Start2');

        startDivs.forEach((startDiv) => {
            startDiv.addEventListener('click', () => {
                choiceArray.push(startDiv.id);
                document.getElementById('four').style.display = 'none';

                if (choiceArray.length === 4) {
                    document.getElementById('five').style.display = 'block';
                    console.log(choiceArray);
                } else if (choiceArray.length === 5) {
                    document.getElementById('six').style.display = 'block';
                    document.getElementById('five').style.display = 'none';
                    console.log(choiceArray);
                } else if (choiceArray.length === 6) {
                    document.getElementById('seven').style.display = 'block';
                    document.getElementById('six').style.display = 'none';
                    console.log(choiceArray);
                } else if (choiceArray.length === 7) {
                    document.getElementById('eight').style.display = 'block';
                    document.getElementById('seven').style.display = 'none';
                    console.log(choiceArray);
                } else if (choiceArray.length === 8) {
                    document.getElementById('nine').style.display = 'block';
                    document.getElementById('eight').style.display = 'none';
                    console.log(choiceArray);
                } else if (choiceArray.length === 9) {
                    document.getElementById('ten').style.display = 'block';
                    document.getElementById('nine').style.display = 'none';
                    console.log(choiceArray);
                    $('#filter_values').val(choiceArray);
                }
            });
        });




    });
    $('#ten button[type="submit"]').click(function(e) {
    e.preventDefault(); // Prevent the form from being submitted normally
    var lastItem = choiceArray[choiceArray.length - 1];

    if (lastItem === 'find') {
        $.ajax({
            url: 'find_therapist.php', 
            type: 'POST',
            data: {choiceArray: choiceArray},
            success: function(response) {
                //console.log(response);
                window.location.href = 'rebook.php?tid=' + response;
            }
        });
    }
    else if (lastItem === 'search') {
            window.location.href = 'find.php';
        }
});

</script>
