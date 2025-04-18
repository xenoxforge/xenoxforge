<?php
session_start();
if(!isset($_SESSION['email'])){
  ?>

<script>
    window.location.href = "../kickstart";
</script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="../assets/stylesheets/xenoxforge.css">
    <link href="https://api.fontshare.com/v2/css?f[]=supreme@800,400,500,700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <title>KICKSTART YOUR PROJECT ON FORGE</title>
    <style>
        .atom_12 {
            background-color: #D5FF8F;
            width: 100%;
            border-top: 10px solid var(--black);
            max-height: calc(min-content - 20rem);
            position: relative;
        }

        .cloud {
            position: absolute;
            z-index: -1;
            top: -80px;
            right: 10px;
        }

        .atom_13 {
            display: flex;
            justify-content: space-between;
        }

        .atom_14 h2 {
            font-family: Thunder;
            font-size: var(--average-font);
            margin-bottom: 3rem;
        }

        .atom_14 p {
            font-family: var(--font);
            font-size: 25px;
            font-weight: 500;
            margin-bottom: 20px;
        }

        .atom_15 h2 {
            font-family: Thunder;
            font-size: var(--average-font);
            text-align: right;
        }

        .atom_18 h2 {
            font-family: Thunder;
            font-size: var(--average-font);
        }

        .atom_18 p {
            font-weight: 500;
            font-size: 25px;

        }

        .st7 {
            text-align: center;
        }

        .atom_18 {
            text-align: center;
            width: 60%;
            justify-content: center;
        }

        .atom_17 {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .atom_17 {
            position: relative;
        }

        .atom_17 img {
            position: absolute;
            left: 0;
            top: -80%;
        }

        .hex {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .atom_box {
            width: 500px;
            height: 550px;
            margin-right: 10px;
            background-color: var(--black);
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .atom_box h3 {
            color: var(--light);
            font-size: 25px;
        }

        .atom_text {
            color: var(--light);
            font-size: 25px;
            font-weight: 500;
        }

        .atom_16 {
            display: flex;
            justify-content: space-between;
        }

        .atom_button {
            width: 100%;
            height: 100px;
            background-color: var(--white);
            color: var(--black);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            margin-top: 1.5rem;
            font-size: 25px;
            font-style: normal;
            font-weight: 700;
            cursor: pointer;
            transition: all .5s ease;
        }

        .atom_button:hover {
            opacity: 0.95;
            transition: all .5s ease;
        }

        .atom_float {
            animation: float 3s infinite;
        }

        @keyframes float {
            0% {

                transform: translatey(0px);
            }

            50% {
                transform: translatey(-60px);
            }

            100% {
                transform: translatey(0px);
            }
        }

        .atom_19 {
            position: relative;
        }

        .v2 {
            width: 100%;
            height: auto;
        }

        .v1 {
            position: absolute;
            right: 0;
        }

        .atom_collect_1 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
        }

        .atom_collect_4 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
        }

        .atom_collect_2 {
            display: flex;
            align-items: center;
            justify-content: space-between;
            color: var(--light);
        }

        .atom_collect_3 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
        }

        .a_row {
            text-align: center;
            width: 50%;
            margin-top: 5rem;
        }

        .a_row_1 {
            text-align: center;
            width: 80%;
            margin-top: 5rem;
        }

        .a_row_4 {
            text-align: center;
            width: 80%;
            margin-top: 5rem;
        }

        .a_row p {
            font-size: var(--font-size);

        }

        .a_row_1 h1 {
            font-family: Thunder;
            font-size: var(--huge-font);
        }

        .a_row_4 h1 {
            font-family: Thunder;
            font-size: var(--huge-font);
        }

        .a_row_1 p {
            font-size: var(--font-size);

        }

        .a_row_4 p {
            font-size: var(--font-size);

        }

        .a_row h1 {
            font-family: Thunder;
            font-size: var(--huge-font);
        }

        .atom_collect_2 .a_row {
            width: 40%;
            margin-top: 10rem;
        }

        .atom_collect_2 .a_row h1 {
            font-size: var(--average-font);
        }

        .atom_collect_3 .a_row h1 {
            font-size: var(--average-font);
        }

        .atom_20 {
            color: #808080;
            text-align: center;
            font-size: 20px;
        }

        .atom_21 {
            background-color: #FF5CA9;
            width: 100%;
            border-top: 10px solid var(--black);
            position: relative;
        }

        .cloud_1 {
            position: absolute;
            z-index: -1;
            top: -120px;
            left: 10px;
        }

        .cloud_2 {
            position: absolute;
            z-index: -2;
            top: -120px;
            right: 10px;
        }

        .atom_22 {
            display: flex;
            align-items: center;

        }

        .atom_23 {
            width: 70%;
        }

        .atom_23 h1 {
            font-family: Thunder;
            font-size: var(--average-font);
        }

        .atom_23 p {
            font-size: var(--font-size);
            width: 80%;
            font-weight: 500;
        }

        .st1 {
            z-index: 1;
            position: relative;
        }

        .atom_24 {
            /* position:absolute; */
            margin-top: -100px;
            z-index: 99;
            position: sticky;
        }

        .atom_25 {
            height: calc(100vh + 10vh);
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .cloud_7 {
            position: absolute;
            top: 10%;
            left: 0;
        }

        .cloud_8 {
            position: absolute;
            top: 30%;
            right: 0;
        }

        .atom_14 {
            width: 40%;
            min-width: 400px;
        }

        .st2 {
            width: 100%;
        }

        .st2 p {
            font-size: var(--font-size);
            width: 70%;
            font-weight: 500;
        }

        .st3 {
            display: flex;
            flex-wrap: wrap;
            row-gap: 20px;
            justify-content: flex-start;
        }

        .atom_box {

            min-width: 400px;
            max-width: 400px;
        }

        .atom_26 {
            display: flex;
            justify-content: space-between;
            margin-top: 10rem;
            margin-bottom: 5rem;
        }

        .atom_26 h1 {
            font-family: Thunder;
            font-size: var(--huge-font);
            color: var(--light);
        }

        .atom_26 img {
            width: 400px;
        }

        .atom_base h2 {
            color: #E8FFC2;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .atom_base p {
            font-size: var(--font-size);
            font-weight: 500;
            width: 70%;
            color: var(--light);
            margin-bottom: 5rem;
        }

        body {
            background: url("../assets/layer.svg");
        }

        .atom_27,
        .atom_28 {
            color: var(--light);
            height: 200px;

        }

        footer {
            margin-top: 20rem !important;
            display: flex;
            justify-content: space-between;
            align-items: self-end;
        }

        .atom_27 h1,
        .atom_28 h1 {
            font-weight: 900;
        }

        .atom_27 p,
        .atom_28 p {
            font-weight: 500;
            margin-bottom: 10px;
        }

        .atom_28 img {
            width: 30px;
            height: auto;
            margin-right: 20px;
            cursor: pointer;
        }

        .atom_30 {
            height: 200px;
        }

        .atom_29 img {
            width: 300px;
            height: auto;
        }

        .atom_30 img {
            width: 90px;
            height: auto;
        }

        .atom_link:hover {
            text-decoration: underline;
            color: #FF5CA9;
            cursor: pointer;
        }

        .atom_boom {
            position: fixed;
            right: 10px;
            bottom: 10px;
            /* display: none; */
            z-index: 9999;
        }

        .vvv {
            justify-content: flex-end !important;
        }

        .atom_starred {

            display: none;
        }

        @media screen and (max-width: 1500px) {
            .atom_13 {
                max-width: 99%;
            }

            .atom_14 {
                width: 30% !important;
                min-width: auto !important;
            }

            .atom_15 {
                width: 60%;
            }

            .vvv {
                justify-content: flex-start !important;
            }

            .st3 {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: auto;
                scroll-snap-type: x mandatory;

            }

            .atom_box {
                scroll-snap-align: start;
            }

        }

        @media screen and (max-width: 1300px) {

            :root {
                --font-size: 18px !important;
                --huge-font: 90px !important;
                --average-font: 60px !important;
            }

            .cloud_1 img {
                width: 200px;
            }

            .cloud_2 img {
                width: 200px;
            }

            .cloud_2 {
                position: absolute;
                z-index: -2;
                top: -80px;
                right: 10px;
            }

            .cloud_1 {
                position: absolute;
                z-index: -2;
                top: -80px;
                left: 10px;
            }

            .cloud {
                top: -60px;
            }

            .cloud img {
                width: 200px;
            }

            .atom_21 {
                margin-top: 5rem;
            }

            .atom_22 img {
                width: 200px;
            }

            .atom_20 p {
                font-size: 14px;
            }

            .atom_26 img {
                width: 200px;
            }

            .cloud_7 img,
            .cloud_8 img {
                width: 200px !important;
            }
        }

        @media screen and (max-width: 1400px) {

            :root {
                --font-size: 18px !important;
                --huge-font: 90px !important;
                --average-font: 60px !important;
            }

            .atom_17 img {
                position: absolute;
                left: 0;
                top: -80%;
                width: 200px;
            }

            @keyframes float {
                0% {

                    transform: translatey(0px);
                }

                50% {
                    transform: translatey(-30px);
                }

                100% {
                    transform: translatey(0px);
                }
            }


            .v1 {
                width: 200px;
            }

        }



        @media screen and (max-width: 1200px) {
            .atom_discover {
                height: 60px;
            }

            .atom_12 {
                margin-top: 0rem !important;
            }

            :root {
                --font-size: 18px !important;
                --huge-font: 90px !important;
                --average-font: 50px !important;
            }
        }

        .st2 {
            width: 100% !important;
        }

        .bnm {
            display: none;
        }

        @media screen and (max-width:1000px) {
            :root {
                --font-size: 18px !important;
                --huge-font: 60px !important;
                --average-font: 50px !important;
            }

            .atom_25 {
                height: 50vh !important;
            }

            .cloud_7 img {
                width: 150px !important;
            }

            .cloud_8 img {
                width: 150px !important;
            }

            .atom_13 {
                flex-direction: column-reverse;
            }

            .atom_15 h2 {
                text-align: left;
                margin-bottom: 1rem;
            }

            .atom_15 {
                width: 99%;
                margin-bottom: 2rem;
            }

            .atom_box {
                height: 300px;
                max-width: 300px !important;
                min-width: 300px !important;
            }

            .fgg {
                width: 99% !important;
            }

            .fgg h2 {
                margin-bottom: 1rem !important;
            }

            .atom_text {
                font-size: 18px;
                margin-top: 1rem;
            }

            .atom_button {
                height: 60px;
                font-size: var(--font-size);
            }

            .atom_box h3 {
                font-size: var(--font-size);
            }

            .atom_17 img {
                display: none;
            }

            .atom_17 {
                justify-content: flex-start;
            }

            .atom_14 p {
                font-size: var(--font-size);
            }

            .atom_18 p {
                font-size: var(--font-size);
                text-align: left;
            }

            .atom_18 {
                text-align: left !important;
                width: 80%;
            }

            footer {
                flex-direction: column;
                align-items: self-start;
            }

            .atom_27,
            .atom_28,
            .atom_29,
            .atom_30 {
                margin-bottom: 5rem;
                height: auto !important;
            }

            .atom_3 {
                flex-direction: column;
                align-items: flex-start;
            }

            .atom_5 {
                margin-left: 0px;
                margin-top: 2rem;
                width: 80%;
            }

            .atom_8 {
                height: 250px;
            }

            .atom_11 img {
                width: 200px !important;
            }

            .st6 {
                margin-top: 2rem !important;
            }

            .st6 .cloud_1 {
                display: none;
            }

            .cloud {
                display: none;
            }
        }


        @media screen and (max-width:800px) {
            .atom_26 {
                margin-top: 5rem !important;
                margin-bottom: 2rem !important;
            }

            .atom_4 {
                width: 100%;
            }

            .cloud_7 img {
                width: 80px !important;
            }

            .atom_27,
            .atom_28,
            .atom_29,
            .atom_30 {
                margin-bottom: 2rem;
                height: auto !important;
            }

            footer {
                margin-top: 10rem !important;
            }

            .cloud_8 img {
                width: 80px !important;
            }

            .atom_5 {
                margin-left: 0px;
                margin-top: 2rem;
                width: 100%;
            }

            .atom_8 {
                height: 200px;
            }

            .atom_collect_1 {
                justify-content: flex-start;
            }

            .a_row {
                text-align: left;
                margin-top: 2rem !important;
            }

            .atom_collect_2 {
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
            }

            .atom_collect_3 {
                flex-direction: column;
                justify-content: flex-start;
                align-items: flex-start;
            }

            .a_row {
                width: 70% !important;
            }

            .cloud_2 {
                display: none;
            }

            .atom_22 img {
                display: none;
            }

            .atom_23 {
                width: 100%;
            }

            .atom_23 p {
                width: 100%;
            }

            .atom_base p {
                width: 100%;
            }
        }

        @media screen and (max-width:700px) {
            .atom_2 div:nth-child(1) {
                display: none;
            }

            .atom_6 {
                display: none;
            }

            .atom_26 img {
                display: none;
            }

            .bnm {
                text-align: center;
                margin-top: 2rem;
                display: inline;
            }

            .a_row {
                width: 100% !important;
            }

            .atom_11 {
                display: none;
            }

            .atom_row div {
                width: 100% !important;
            }

            .atom_11 img {
                width: 80px !important;
            }

            .atom_row {
                flex-direction: column;
            }
        }

        @media screen and (max-width:500px) {
            :root {
                --font-size: 16px !important;
                --huge-font: 60px !important;
                --average-font: 50px !important;
            }

            .atom_20 p {
                font-size: 11px;
            }

            .atom_3 {
                margin-top: 3rem;
            }

            .atom_26 {
                margin-top: 3rem !important;
                margin-bottom: 2rem !important;
            }

            .atom_1 img {
                width: 100px !important;
            }

            .atom_8 {
                height: 150px;
            }

            .atom_24 {
                margin-top: -50px;
            }

            .atom_8 div:nth-child(1) {
                display: none;

            }

            .atom_8 div {
                width: 50%;
            }

            .st2 p {
                width: 100%;
            }

            .atom_18 {
                width: 100%;
            }

            .atom_base h2 {
                font-size: var(--font-size);
            }

            .atom_base p {
                margin-bottom: 2rem;
            }

            .atom_29 img {
                width: 200px;
            }

        }

        .l4 {
            font-size: 25px !important;
        }

        @media screen and (max-width:600px) {
            .p_1 {
                margin-top: 1rem;
                margin-left: 20px;
            }

            .p_1 img {
                display: none !important;
            }

            .atom_starred {
                height: 60px;
                background-color: #FF645C;
                color: var(--black);
                display: block;
                width: 100%;
                display: flex;
                align-items: center;

            }

            .atom_row {
                margin-top: 2rem !important;
            }

            .atom_7 img {
                display: none;
            }

            .atom_starred_1 {
                display: flex;
                align-items: center;
                justify-content: space-around;
            }

            .atom_starred_1 div {
                margin-right: 2rem;
                font-weight: 900;
            }



            .marquee-container {
                width: 100%;
                overflow: hidden;
                white-space: nowrap;
            }


            .marquee-content {
                display: flex;
                animation: marquee 10s linear infinite;

            }

            @keyframes marquee {
                0% {
                    transform: translateX(100%);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

            .st2 h2 {
                margin-bottom: 0 !important;
            }

            .st2 p {
                margin-bottom: 0 !important;
            }

        }

        .preloader-wrap {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            bottom: 0;
            background-color: var(--black);
            z-index: 99999;
        }

        .percentage {
            z-index: 100;
            border: 1px solid #ccc;
            text-align: center;
            color: #fff;
            line-height: 30px;
            font-size: 15px;
        }

        .loader,
        .percentage {
            height: 5px;
            max-width: 100px;
            border: none;
            border-radius: 20px;
            font-weight: 300;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        .loader:after,
        .percentage:after {
            content: "";
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .trackbar {
            width: 100%;
            height: 100%;
            border-radius: 20px;
            color: #fff;
            text-align: center;
            line-height: 30px;
            overflow: hidden;
            position: relative;
            opacity: 0.99;
        }

        .loadbar {
            width: 0%;
            height: 100%;
            background-color: var(--n);
            position: absolute;
            top: 0;
            left: 0;
            animation: flicker 5s infinite;
            overflow: hidden;
        }

        .glow {
            width: 0%;
            height: 0%;
            border-radius: 20px;
            box-shadow: 0px 0px 60px 10px var(--b);
            position: absolute;
            bottom: -5px;
            display: none;
            animation: animation 5s infinite;
        }

        @keyframes animation {
            10% {
                opacity: 0.9;
            }

            30% {
                opacity: 0.86;
            }

            60% {
                opacity: 0.8;
            }

            80% {
                opacity: 0.75;
            }
        }

        body {
            height: 100%;
        }

        .p_1 {
            display: flex;
            justify-content: space-between;
            color: var(--light);
            align-items: self-start;
            width: 100%;
        }

        .p_2 h1 {

            font-size: var(--huge-font);
            font-family: Thunder;

        }

        .l2 .atom_box {
            background-color: transparent;
            height: min-content !important;
        }

        .l2 {
            justify-content: flex-start !important;
        }

        .atom_text {
            margin-top: 1rem;
        }

        .l9 {
            font-size: 16px;
            margin-top: 10px;
            color: #BF8FFF;
        }

        a {
            color: unset;
            text-decoration: none;
        }

        .l55 {
            min-height: 80vh;
            color: var(--light);
            display: flex;
            position: relative;
            align-items: center;
            justify-content: center;
        }

        .l56 {
            display: flex;
            width: 100%;
            justify-content: space-evenly;
            align-items: center;
        }

        .l56 h1 {
            font-size: var(--average-font);
            font-family: Thunder;


        }

        .l56 img {
            width: 300px;
        }

        .l57 {
            margin-top: 1.5rem;
            font-size: var(--font-size);
            text-align: center;
        }

        .l55 img:nth-child(1) {
            position: absolute;
            right: 0;
            bottom: 0;
        }

        .limg {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        .l60 {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .l60 img {
            width: 50%;
        }

        .form {
            display: flex;

            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 50%;
        }

        .form textarea {
            width: 80%;
            height: 200px;
            margin-top: 10px;
            flex-shrink: 0;
            border-radius: 10px;
            border: 3px solid #F9F9F9;
            color: var(--light);
            font-size: var(--font-size);
            font-family: var(--font);
            padding: 20px;
            background-color: transparent;
        }

        .form h1 {
            font-size: var(--average-font);
            font-family: Thunder;
            color: var(--light);

        }

        input:focus {
            outline: none;
        }

        input::placeholder {
            color: var(--light);
            font-family: var(--font);
            font-size: var(--font-size);
        }

        .atom_button {
            max-width: 80%;
        }

        @media screen and (max-width: 800px) {

            .l60 img {
                display: none;
            }

            .form {
                margin-top: 5rem;
                width: 100%;
            }

            .form textarea {
                width: 90%;
            }

            .atom_button {
                max-width: 90%;
            }
        }

        button {
            border: none !important;
        }
    </style>
</head>

<body>
    <div class="preloader-wrap">
        <div style="display: none;" class="percentage" id="precent"></div>
        <div class="loader">
            <div class="trackbar">
                <div class="loadbar"></div>
            </div>
            <div class="glow"></div>
        </div>
    </div>
    <header>
    <a href='../'> <div class="atom_1">
            <img src="../assets/forge_long.svg" alt="">
        </div></a>
    </header>

    <div class="l60">
        <img src="../assets/huge_cloud_3.svg" alt="">
        <form class='form' id="reach" method="post">
            <h1>KICKSTART</h1>
            <textarea  name="text" placeholder="Tell us about your project"></textarea>
            <button name="atom_1" class="atom_button">Submit</button>
        </form>
    </div>

    <footer class="container">
        <div class="atom_27">
            <h3>OUR PRODUCTION</h3>
            <br>
            <a href='../who we are'><p class="atom_link">WHO WE ARE</p></a>
        </div>
        <div class="atom_28">
            <h3>REPUBLIC OF XENOXFORGE</h3>
            <br>
            <div class="st9">
                <a href="https://dribbble.com/xenoxforge" target="_blank"><img src="../assets/dribbble.svg" alt=""></a>
                <a href="https://facebook.com/xenoxforgecreativestudios" target="_blank"><img
                        src="../assets/facebook.svg" alt=""></a>
                <a href="https://www.instagram.com/xenoxforge.studio/" target="_blank"><img
                        src="../assets/instagram.svg" alt=""></a>
                <a href="https://twitter.com/xenoxforge" target="_blank"><img src="../assets/x.svg" alt=""></a>
            </div>
        </div>
        <div class="atom_29">
            <img src="../assets/Group 39.svg" alt="">
        </div>
    </footer>
</body>
<script>
    $(document).ready(function () {
        $('#reach').on('submit', function (e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: '../cake.php',
                data: formData,
                success: function (response) {
                    if (response == 'pass') {
                      alert("We got your message!");
                      window.location.href = "../"
                    }
                },
                error: function (error) {
                    console.error('AJAX request failed: ' + error);
                }
            });
        });
    });
    var width = 100,
        perfData = window.performance.timing,
        EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
        time = parseInt((EstimatedTime / 1000) % 60) * 100;

    $(".loadbar").animate({
        width: width + "%"
    }, time);


    $(".glow").animate({
        width: width + "%"
    }, time);


    var PercentageID = $("#precent"),
        start = 0,
        end = 100,
        durataion = time;
    animateValue(PercentageID, start, end, durataion);

    function animateValue(id, start, end, duration) {

        var range = end - start,
            current = start,
            increment = end > start ? 1 : -1,
            stepTime = Math.abs(Math.floor(duration / range)),
            obj = $(id);

        var timer = setInterval(function () {
            current += increment;
            $(obj).text(current + "%");

            if (current == end) {
                clearInterval(timer);
            }
        }, stepTime);
    }

    setTimeout(function () {
        $('.preloader-wrap').fadeOut(300);
    }, time);
</script>

</html>