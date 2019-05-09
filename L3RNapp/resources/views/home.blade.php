
@extends('layouts.app')

@section('content')

@endsection

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <link rel="stylesheet" href="/styles/dashboard.css">
</head>
<style>
    html,
body {
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100vh;
}

body {
    background: #fff;
}


@keyframes fadeOut {
    0% {
        opacity: 0;
    }

    40% {
        opacity: 0;
    }

    41% {
        opacity: 1;
    }

    91% {
        opacity: 1;
    }

    92% {
        opacity: 0;
    }

    100% {
        opacity: 0;
    }
}

.first-block {
    position: absolute;
    width: 0%;
    height: 100vh;
    background: #ffd700;
    animation: go-left 5s cubic-bezier(.74, .06, .4, .92) forwards;
    left: 0;
}

@keyframes go-left {
    0% {
        left: 0;
        width: 0%;
    }

    50% {
        left: 0;
        width: 100%;
    }

    100% {
        left: 100%;
        width: 0;
    }
}

.loader {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.loader ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.loader ul li {
    display: inline-block;
    color: #115173;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    margin: 0 8px;
    font-size: 24px;
    text-transform: uppercase;
    animation: loadNow 2.5s ease-in-out forwards;
    opacity: 0;
    transform: translateX(0px);
}

@keyframes loadNow {
    0% {
        opacity: 0;
        transform: translateX(80px);
    }

    20% {
        opacity: 1;
        transform: translateX(0px);
    }

    80% {
        opacity: 1;
        transform: translateX(0px);
    }

    100% {
        opacity: 0;
        transform: translateX(-80px);
    }
}

.loader ul li:nth-child(1) {
    animation-delay: 1.1s;
}

.loader ul li:nth-child(2) {
    animation-delay: 1.2s;
}

.loader ul li:nth-child(3) {
    animation-delay: 1.3s;
}

.loader ul li:nth-child(4) {
    animation-delay: 1.4s;
}

.loader ul li:nth-child(5) {
    animation-delay: 1.5s;
}

.loader ul li:nth-child(6) {
    animation-delay: 1.6s;
}

.loader ul li:nth-child(7) {
    animation-delay: 1.7s;
}

.loader ul li:nth-child(8) {
    animation-delay: 1.8s;
}

.loader ul li:nth-child(9) {
    animation-delay: 1.9s;
}

.third-block {
    position: absolute;
    width: 0%;
    height: 100vh;
    background: #011826;
    animation: expandNow 1.4s cubic-bezier(0.19, 1, 0.22, 1) forwards;
    animation-delay: 6.2s;
}

@keyframes expandNow {
    0% {
        width: 0%;
    }

    100% {
        width: 64%;
    }
}

.logo {
    position: absolute;
    left: 0;
    margin: 2em;
    font-family: Arial, Helvetica, sans-serif;

    font-weight: bolder;
    font-size: 18px;
}

.content {
    position: absolute;
    width: 440px;
    top: 46%;
    left: 28%;
    transform: translate(-50%, -50%);
    text-align: left;
}

.heading {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 50px;
    padding: 20px;
    position: relative;
    top: -80px;
    right: -310px;
}

.desc {
    font-family: Arial, Helvetica, sans-serif;

}

.desc p {
    
    position: relative; 
    right: -420px;
    top: -50px;
    font-size: 30px;
}

button {
    font-family: Arial, Helvetica, sans-serif;
    border-radius: none;
    padding: 16px 40px;
    letter-spacing: 2px;
    text-transform: uppercase;
    background: #02425F;
    color: #fff;
}

a {
    text-decoration-line: none;
    color: #fff;
}

.img img {
    width: 440px;
}

.img {
    position: fixed;
    z-index: 0;
    top: 46%;
    right: 14%;
    transform: translateY(-50%);
}

img {
    opacity: 0;
    animation: appearimg 0.1s linear forwards;
    animation-delay: 5.1s;
}

.img:after {
    content: '';
    top: 0;
    left: 0;
    width: 0%;
    height: 100%;
    background: #272727;
    position: absolute;
    animation: rev-img 3.0s cubic-bezier(0.19, 1, 0.22, 1) forwards;
    animation-delay: 4s;
}

@keyframes rev-img {
    0% {
        left: 0;
        width: 0%;
    }

    50% {
        width: 440px;
        left: 0;
    }

    100% {
        left: 440px;
        width: 0;
    }
}

@keyframes appearimg {
    0% {
        opacity: 0;
    }

    100% {
        opacity: 1;
    }
}

.watch {
    position: fixed;
    bottom: 0;
    left: 0;
    margin: 2em;
}

.logout {
    position: absolute;
    right: 0;
    margin: 2em;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    font-size: 18px;
}

.search {
    position: absolute;
    right: 100px;
    margin: 2em;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;
    font-size: 18px;
}
    </style>
<body>
    <!-- creating the search transition -->
    <div class="temp"></div>
    <div class="first-block"></div>
    <div class="second-block"></div>
    <div class="loader">
        <ul>
            <li>D</li>
            <li>A</li>
            <li>S</li>
            <li>H</li>
            <li>B</li>
            <li>O</li>
            <li>A</li>
            <li>R</li>
            <li>D</li>
        </ul>
    </div>
    <!-- nav bar -->
    <nav class="nav">
        <span class="logout"></span>
        <span class="search"></span>

        <!-- creating the logo -->
        <div class="logo">
            <span></span>
        </div>
    </nav>


    <div class="content">
        <!-- heading/username -->
        <div class="heading">
            <span>ARTHUR JONES</span>

            <p class="name">
                react.js 
                mongoDB
                node.js
                express
            </p>
        </div>
        <!-- status/description  -->
        <div class="desc">
            <p>Your Saved info</p>
        </div>
        <div class="link">
            <!-- search button that redirects to the search page -->
            <!-- <button type="button"><a href="search.html">Search For Activity</a></button> -->
        </div>
    </div>
    <!-- user photo -->
    <div class="img">
        <!-- <img src="assets/images/jon.jpg" alt=""> -->
    </div>

    <script type="text/javascript">
        // // logo animation
        TweenMax.from(".logo", 1.6, {
            // it takes two seconds for it to load in
            delay: 5.0,
            // opacity is zero
            opacity: 0,
            // the animation will be moving on the y axis 
            y: 30,
            // the content will ease in and out
            ease: Expo.easeInOut
        });

        TweenMax.from(".navbar", 1.6, {
                  // it takes two seconds for it to load in
                  delay: 5.0,
                  // opacity is zero
                  opacity: 0,
                  // the animation will be moving on the y axis 
                  y: 30,
                  // the content will ease in and out
                  ease: Expo.easeInOut
            });

        TweenMax.from(".logout", 1.6, {
                  // it takes two seconds for it to load in
                  delay: 5.5,
                  // opacity is zero
                  opacity: 0,
                  // the animation will be moving on the y axis 
                  y: 30,
                  // the content will ease in and out
                  ease: Expo.easeInOut
            });

            TweenMax.from(".search", 1.6, {
                  // it takes two seconds for it to load in
                  delay: 4.8,
                  // opacity is zero
                  opacity: 0,
                  // the animation will be moving on the y axis 
                  y: 30,
                  // the content will ease in and out
                  ease: Expo.easeInOut
            });


        TweenMax.from(".heading", 1.6, {
            delay: 4.8,
            opacity: 0,
            y: 30,
            ease: Expo.easeInOut
        });

        TweenMax.from(".desc", 1.6, {
            delay: 4.8,
            opacity: 0,
            y: 30,
            ease: Expo.easeInOut
        });

        TweenMax.from("button", 1.6, {
            delay: 5.0,
            opacity: 0,
            y: 30,
            ease: Expo.easeInOut
        });

        TweenMax.from(".watch", 1.6, {
            delay: 3.9,
            opacity: 0,
            y: 30,
            rotation: 90,
            ease: Expo.easeInOut
        });

        TweenMax.staggerFrom(".media ul li", 2, {
            delay: 4,
            opacity: 0,
            y: 40,
            ease: Expo.easeInOut
        }, 0.2);

    </script>
</body>

</html>