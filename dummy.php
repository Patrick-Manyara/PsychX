<div class="CompArea">
    <div class="CompAreaInner">
        <div id="one">
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
                        <p class="MainText">Individual</p>
                        <p class="SubText">For Myself<i class="fa-regular fa-circle-right"></i></p>
                    </div>
                </div>
            </div>

            <div class="Third" id="teen">
                <div class="CompInner">
                    <div class="Start">
                        <p class="MainText">Individual</p>
                        <p class="SubText">For Myself<i class="fa-regular fa-circle-right"></i></p>
                    </div>

                </div>
            </div>
        </div>

        <div id="two">
            <div class="CompInner2">
                <div class="Start2" id="woman">
                    <p class="MainText2">Woman</p>
                </div>
                <div class="Start2" id="man">
                    <p class="MainText2">Man</p>
                </div>
            </div>
        </div>

        <div id="three">
            <div class="CompInner2 form-group">
                <input type="number" name="age" class="form-control" />
            </div>
            <div>
                <button type="button" id="confirm_age">COnfirm Age</button>
            </div>
        </div>

        <div id="four">
            <div class="CompInner2">
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
                    <p class="MainText2">not</p>
                </div>
            </div>
        </div>

        <div id="five">
            <div class="CompInner2">
                <div class="Start2" id="yes">
                    <p class="MainText2">yes</p>
                </div>
                <div class="Start2" id="no">
                    <p class="MainText2">no</p>
                </div>
            </div>
        </div>

        <div id="six">
            <div class="CompInner2">
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
                <div class="Start2" id="therapy_before">
                    <p class="MainText2">therapy</p>
                </div>
                <div class="Start2" id="first_time">
                    <p class="MainText2">first_time</p>
                </div>
            </div>
        </div>



    </div>
</div>

<style>
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
        font-family: Overpass, sans-serif;
        font-size: 18px;
        font-weight: 500;
        line-height: 24px;
    }

    .Start2:hover {
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
</style>