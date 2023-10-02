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
                <div class="CompInner2">
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
                    <button type="button" id="confirm_age">COnfirm Age</button>
                </div>
            </div>

            <div id="four">
                <div class="CompInner2">
                    <p class="BlockTitle">How do you identify?</p>
                    <div class="Start2" id="straight">
                        <p class="MainText2">straight</p>
                    </div>
                    <div class="Start2" id="gay">
                        <p class="MainText2">gay</p>
                    </div>
                    <div class="Start2" id="lesbian">
                        <p class="MainText2">lesbian</p>
                    </div>
                    <div class="Start2" id="bi">
                        <p class="MainText2">bi</p>
                    </div>
                    <div class="Start2" id="not">
                        <p class="MainText2">Rather not say</p>
                    </div>
                </div>
            </div>

            <div id="five">
                <div class="CompInner2">
                    <p class="BlockTitle">Would you like to receive consultation from a LGBTQ+ therapist?</p>
                    <div class="Start2" id="yes">
                        <p class="MainText2">Yes</p>
                    </div>
                    <div class="Start2" id="no">
                        <p class="MainText2">Not Specifically</p>
                    </div>
                </div>
            </div>

            <div id="six">
                <div class="CompInner2">
                    <p class="BlockTitle">What is your relationship status?</p>
                    <div class="Start2" id="single">
                        <p class="MainText2">single</p>
                    </div>
                    <div class="Start2" id="relationship">
                        <p class="MainText2">relationship</p>
                    </div>
                    <div class="Start2" id="married">
                        <p class="MainText2">married</p>
                    </div>
                    <div class="Start2" id="divorced">
                        <p class="MainText2">divorced</p>
                    </div>
                    <div class="Start2" id="widowed">
                        <p class="MainText2">widowed</p>
                    </div>
                    <div class="Start2" id="other">
                        <p class="MainText2">other</p>
                    </div>
                </div>
            </div>

            <div id="seven">
                <div class="CompInner2">
                    <p class="BlockTitle">Would you consider yourself religious?</p>
                    <div class="Start2" id="religious">
                        <p class="MainText2">religious</p>
                    </div>
                    <div class="Start2" id="irreligious">
                        <p class="MainText2">irreligious</p>
                    </div>
                </div>
            </div>

            <div id="eight">
                <div class="CompInner2">
                    <p class="BlockTitle">Have you ever been in therapy before></p>
                    <div class="Start2" id="therapy_before">
                        <p class="MainText2">therapy</p>
                    </div>
                    <div class="Start2" id="first_time">
                        <p class="MainText2">first_time</p>
                    </div>
                </div>
            </div>

            <div id="nine">
                <div class="CompInner2">
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
                <div class="CompInner2">
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

    .CompInner2 {}

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
    $(document).ready(function() {
        var choiceArray = [];
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
</script>