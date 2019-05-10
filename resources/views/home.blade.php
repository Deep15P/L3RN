
@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
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
    top: -250px;
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
    right: 70%;
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




/* css for the page after the transition is done */





.left-col, .right-col {
      position: absolute;
      left: -0px;
      top: -0px;
      width: 50%;
      height: 100%;
      /* opacity: 0.8; */
}

.left-col {
      background: #022c43;
}

.right-col {
      left: 50%;
}

.upper {
      position: absolute;
      width: 100%;
      height: 50vh;
      background: #ffd700;
      opacity: 0;
      animation: appear-text 0.0001s linear forwards;
      animation-delay: 7.5s;
}

.bottom {
      position: absolute;
      top: 50%;
      height: 50vh;
      width: 100%;
      background: url(next-cover.jpg) no-repeat 50% 50%;
      background-size: cover;
      opacity: 0;
      animation: appear-text 0.0001s linear forwards;
      animation-delay: 4.2s;
}

@media(max-width: 900px) {
      .left-col {
            width: 100%;
      }
      .right-col {
            top: 100%;
            left: 0%;
            width: 100%;
      }

}

.logo {
      font-family: 'Nunito', sans-serif;
      color: #fff;
      position: fixed;
      margin: 1.4em;
      font-weight: bolder;
      z-index: 1;
}

.year {
      position: absolute;
      color: #000;
      font-family: 'Nunito', sans-serif;
      bottom: 8%;
      font-weight: bolder;
      transform: rotate(-90deg);
      left: 0%;
}

.buy {
      color: #f4c8ad;
      text-transform: uppercase;
      font-family: 'Nunito', sans-serif;
      text-decoration: underline;
      position: absolute;
      right: 0%;
      top: -2.6%;
      margin: 1.4em;
}

.cover {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 45%;
      height: 50%;
      background: url(album-art.jpg) no-repeat 50% 50%;
      background-size: cover;
      opacity: 0;
      animation: appear-text 0.0001s linear forwards;
      animation-delay: 2.6s;

}

.data {
      position: absolute;
      top: 45%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-family: 'Nunito', sans-serif;
      text-transform: uppercase;
      letter-spacing: 4px;
      font-size: 25px;
}

#name {
      font-weight: bolder;
}

#artist {
      font-size: 10px;
}

.play, .next ion-icon {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: #fff;
      opacity: 0.6;
      border-radius: 50%;
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 2em;
}

.about {
      position: absolute;
      top: 50%;
      left: 45%;
      transform: translate(-50%, -50%);
}

.about h1 {
      font-weight: bolder;
      color: #000;
      font-family: 'Nunito', sans-serif;
      text-transform: uppercase;
}

.about p {
      color: #000;
      font-family: 'Nunito', sans-serif;
      text-transform: uppercase;
      letter-spacing: 4px;
      font-size: 10px;
      cursor: pointer;
}

.about span:hover {
      text-decoration: underline;
}

.media {
      margin-top: 40px;
}

.media p {
      color: #6f6457;
      margin-bottom: 0;
}

.media ul {
      position: absolute;
      list-style: none;
      left: -24%;
}

.media ul li {
      display: inline-block;
      color: #bcac98;
      padding-right: 10px;
}

.next {
      position: absolute;
      top: 24%;
      left: 16%;
}

.data2 {
      position: absolute;
      top: 10%;
      left: 24%;
      color: #000;
      font-family: 'Nunito', sans-serif;
      text-transform: uppercase;
      letter-spacing: 4px;
}

.more {
      position: absolute;
      top: 80%;
      left: 10%;
      font-size: 15px;
      color: #000;
      text-transform: uppercase;
      font-family: 'Nunito', sans-serif;
      text-decoration: underline;
}

.block-cover {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 45%;
      height: 50%;
}

.block-cover::after {
     content: '';
     top: 0;
     left: 0;
     position: absolute;
     width: 0%;
     height: 100%;
     background: #4f4538;
     animation: rev-block 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
     animation-delay: 2s;
}

@keyframes rev-block {

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
          width: 0%;
     }

}

@keyframes appear-text {

     0% {
          opacity: 0;
     }
     100% {
          opacity: 1;
     }

}

.upper-block {
      position: absolute;
      width: 100%;
      height: 50vh;
}

.upper-block::after {
     content: '';
     top: 0;
     left: 0;
     position: absolute;
     width: 0%;
     height: 100%;
     background: #115173;
     animation: rev-block 5.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
     animation-delay: 5.4s;
}

.block-bottom {
      position: absolute;
      top: 50%;
      height: 50vh;
      width: 100%;
}

.block-bottom::after {
     content: '';
     top: 0;
     left: 0;
     position: absolute;
     width: 0%;
     height: 100%;
     background: #000;
     animation: rev-block 3.8s cubic-bezier(0.19, 1, 0.22, 1) forwards;
     animation-delay: 5.8s;
}



    </style>
<body>


    <!-- creating the dashboard transition -->
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

    <!-- the actual page after the transition is finished -->
    <div class="container">

            <div class="left-col">

                  <!-- <div class="logo">ALTRNTV</div>

                  <div class="year">EST 1994</div> -->

                  <!-- <div class="cover">
                        <div class="play">
                              <ion-icon name="play"></ion-icon>
                        </div>
                  </div> -->

                  <div class="data">

                        <div class="album-name">
                        <p id="name">Courses</p>
                        </div>

                        <div class="album-artist">
                        <p id="artist">MongoDB</p>
                        <p id="artist">Express</p>
                        <p id="artist">React.js</p>
                        <p id="artist">Node.js</p>
                        
                        <!-- <p id="artist">Node.js</p> -->

                        
                        </div>
                  </div>

                  <div class="block-cover"></div>

                  <!-- <div class="buy">
                        <p id="more">Buy now</p>
                  </div> -->

            </div>

            <div class="right-col">

                  <div class="upper">

                        <div class="about">

                              <h1>Aurthur Jones</h1>
                              <div class="album-name2">
                              <p><ion-icon name="radio"></ion-icon> &nbsp;<span>Skill Level: intermediate</span></p>
                              </div>

                              <div class="album-artist2">
                              <p><ion-icon name="person"></ion-icon>  &nbsp;<span>Current Stack: M.E.R.N </span></p>
                              </div>

                              <div class="album-genre2">
                              <p><ion-icon name="musical-notes"></ion-icon>  &nbsp;<span>Current Technology: Node.js</span></p>
                              </div>

                              <!-- <div class="media">

                                    <p>Share now : </p>

                                    <ul>
                                          <li><ion-icon name="logo-facebook"></ion-icon></li>
                                          <li><ion-icon name="logo-instagram"></ion-icon></li>
                                          <li><ion-icon name="logo-twitter"></ion-icon></li>
                                          <li><ion-icon name="logo-whatsapp"></ion-icon></li>
                                    </ul>

                              </div> -->

                        </div>

                  </div>
                  <div class="upper-block"></div>

                  <div class="bottom">
                        <div class="next">
                              <ion-icon name="fastforward"></ion-icon>
                        </div>

                        <div class="data2">

                              <div class="album-name3">
                              <p id="name">Saved Content</p>
                              </div>

                              <div class="album-artist3">
                              <!-- <p id="artist">Vhyce alven</p> -->
                              <iframe width="400" height="200" src="https://www.youtube.com/embed/DLX62G4lc44" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <br>
                                <ul>
                                    <li><a href="https://medium.com/javascript-scene/introduction-to-node-express-90c431f9e6fd">Introduction to Node & Express</a></li>
                                    <li><a href="https://medium.freecodecamp.org/all-the-fundamental-react-js-concepts-jammed-into-this-single-medium-article-c83f9b53eac2">All the fundamental React.js concepts, jammed into this single Medium article</a></li>
                              </ul>
                              </div>

                        </div>


                        <!-- <div class="more">
                              <p id="more">More like this</p>
                        </div> -->

                  </div>
                  <div class="block-bottom"></div>

            </div>

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



        // animations after the transition is over. 
        // there is a longer delay so that the animations can come into play without messing up the transition.




        TweenMax.from(".left-col", 2, {
            delay: 4.8,
            width: "0%",
            ease: Expo.easeInOut
      })

      TweenMax.from(".logo", 2, {
            delay: 6.5,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".buy", 2, {
            delay: 6.8,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".year", 2, {
            delay: 6.1,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-name", 2, {
            delay: 6.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist", 2, {
            delay: 6.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".about h1", 2, {
            delay: 6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-name2", 2, {
            delay: 6.2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist2", 2, {
            delay: 6.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-genre2", 2, {
            delay: 6.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".media p", 2, {
            delay: 6.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom(".media ul li", 2, {
            delay: 6.8,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      }, 0.1);


      TweenMax.from(".album-name3", 2, {
            delay: 6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist3", 2, {
            delay: 6.2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".next", 2, {
            delay: 6.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".more", 2, {
            delay: 6.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

    </script>
</body>

</html>