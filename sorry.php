<head>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="Messages">
                <div class="message">Can't go that way.
                </div>
                <div class="message2">The cant access that page/resource unless you're logged in.</div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="container">
                <div class="DoorContainer">
                    <div class="neon">SORRY</div>
                    <div class="door-frame">
                        <div class="door">
                            <div class="rectangle">
                            </div>
                            <div class="handle">
                            </div>
                            <div class="window">
                                <div class="eye">
                                </div>
                                <div class="eye eye2">
                                </div>
                                <div class="leaf">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <style>
        body {
            background-color: #1C2127;
        }

        .container {
           
        }

        .message {
            font-family: 'Poppins', sans-serif;
            font-size: 30px;
            color: white;
            font-weight: 500;
            position: absolute;
            top: 230px;
            left: 40px;
        }

        .message2 {
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            color: white;
            font-weight: 300;
            width: 360px;
            position: absolute;
            top: 280px;
            left: 40px;
        }

        .neon {
            text-align: center;
            width: 300px;
            margin-top: 30px;
            margin-bottom: 10px;
            font-family: 'Varela Round', sans-serif;
            font-size: 90px;
            color: #5BE0B3;
            letter-spacing: 3px;
            text-shadow: 0 0 5px #6EECC1;

        }

        .trash {
            width: 170px;
            height: 220px;
            background-color: #585F67;
            top: 300px;
        }

        .can {
            width: 190px;
            height: 30px;
            background-color: #6B737C;
            border-radius: 15px 15px 0 0;
        }

        .door-frame {
            height: 495px;
            width: 295px;
            border-radius: 90px 90px 0 0;
            background-color: #8594A5;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .door {
            height: 450px;
            width: 250px;
            border-radius: 70px 70px 0 0;
            background-color: #A0AEC0;
        }

        .eye {
            top: 15px;
            left: 25px;
            height: 5px;
            width: 15px;
            border-radius: 50%;
            background-color: white;
            position: absolute;
        }

        .eye2 {
            left: 65px;
        }

        .window {
            height: 40px;
            width: 130px;
            background-color: #1C2127;
            border-radius: 3px;
            margin: 80px auto;
            position: relative;
        }

        .leaf {
            height: 40px;
            width: 130px;
            background-color: #8594A5;
            border-radius: 3px;
            margin: 80px auto;
            transform-origin: right;
        }

        .handle {
            height: 8px;
            width: 50px;
            border-radius: 4px;
            background-color: #EBF3FC;
            position: absolute;
            margin-top: 250px;
            margin-left: 30px;
        }

        .rectangle {
            height: 70px;
            width: 25px;
            background-color: #CBD8E6;
            border-radius: 4px;
            position: absolute;
            margin-top: 220px;
            margin-left: 20px;
        }

     

        @media screen and (max-width:600px) {
            .message {
                position: inherit;
                text-align: center;
                font-size: 2em;
            }

            .message2 {
                position: inherit;
                width: 100%;
                font-size: 1.5em;
                text-align: center;
                margin-top: 50px;
            }

            .neon {
                width: 100%;
            }

            .door-frame {
                height: 51vh;
                width: 100%;
            }

            .door {
                height: 50vh;
                width: 90%;
            }
        }
    </style>

</body>