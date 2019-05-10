@extends('layouts.app')

@section('content')

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
   html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100vh;
      font-family: 'Nunito', sans-serif;
}

.left-col, .right-col {
      position: absolute;
      left: -0px;
      top: -0px;
      width: 50%;
      height: 100%;
      /* opacity: 0.8; */
}

.left-col {
      background-color: #ffd700;
      
}

.right-col {
      left: 50%;
}

.upper {
      position: absolute;
      width: 100%;
      height: 50vh;
      background: #115173;
      opacity: 0;
      animation: appear-text 0.0001s linear forwards;
      animation-delay: 3s;
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
      top: 36%;
      left: 33%;
      transform: translate(-50%, -50%);
      color: #fff;
      font-family: 'Nunito', sans-serif;
      text-transform: uppercase;
      letter-spacing: 4px;
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
      top: 40%;
      left: 26%;
      transform: translate(-50%, -50%);
}

.about h1 {
      font-weight: bolder;
      color: #fff;
      font-family: 'Nunito', sans-serif;
      text-transform: uppercase;
}

.about p {
      color: #fff;
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
      color: #fff;
      margin-bottom: 0;
}

.media ul {
      position: absolute;
      list-style: none;
      left: -24%;
}

.media ul li {
      display: inline-block;
      color: #fff;
      padding-right: 10px;
}

.next {
      position: absolute;
      top: 24%;
      left: 16%;
}

.data2 {
      position: absolute;
      top: 12%;
      left: 28%;
      color: #000;
      font-family: 'Nunito', sans-serif;
      text-transform: uppercase;
      letter-spacing: 4px;
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
     background: #022c43;
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
     animation: rev-block 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
     animation-delay: 2.4s;
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
     animation: rev-block 1.5s cubic-bezier(0.19, 1, 0.22, 1) forwards;
     animation-delay: 3.6s;
}


.dropbtn {
    background-color: #022c43;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    font-family: Arial, Helvetica, sans-serif;
    width: 500px;
    
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
    width: 500px;
  }
  
  .dropdown-content {
    display: none;
    padding: 20px;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    width: 460px;
    align-content: center;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .dropdown:hover .dropbtn {
    background-color: #ffd700;
  }

  .menu {
      position: relative;
      right: -130px;
      bottom: -100px;
  }

  .album-name {
      position: relative;
      right: -120px;
      bottom: -80px;
  }

  .album-artist3, .album-name3 {
      position: relative;
      bottom: -60px;
      left: -30px;
  }


    </style>
<body>
      <div class="container">

            <div class="left-col">

                  <div class="cover">
                        <div class="play">
                              <ion-icon name="play"></ion-icon>
                        </div>
                  </div>

                  <div class="data">

                        <div class="album-name">
                        <!-- <p id="name">Results</p> -->
                        <iframe width="520" height="315" src="https://www.youtube.com/embed/U8XF6AFGqlc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                        <div class="album-artist">
                        <!-- <p id="artist">Display Here</p> -->
                        </div>

                  </div>

                  <div class="block-cover"></div>

            </div>

            <div class="right-col">

                  <div class="upper">

                <div class="menu">
                  <div class="dropdown">
                            <button class="dropbtn">MERN STACK</button>
                            <div class="dropdown-content">
                            <a href="#">MongoDB</a>
                            <a href="#">Express</a>
                            <a href="#">Node.js</a>
                            <a href="#">React.js</a>
                            </div>
                    </div>
                    <br>
                    <br>

                    <div class="dropdown">
                            <button class="dropbtn">CHOOSE FORMAT</button>
                            <div class="dropdown-content">
                            <a href="#">Books</a>
                            <a href="#">Videos</a>
                            <a href="#">Articles</a>
                            <a href="#">Podcasts</a>
                            </div>
                    </div>
                </div>


                  </div>
                  <div class="upper-block"></div>

                  <div class="bottom">
                        <div class="next">
                              <ion-icon name="fastforward"></ion-icon>
                        </div>

                        <div class="data2">

                              <div class="album-name3">
                              <p id="name">Articles</p>
                              
                              </div>

                              <div class="album-artist3">
                              <a href="https://medium.freecodecamp.org/what-exactly-is-node-js-ae36e97449f5">What exactly is Node.js?</a>
                              <br>
                              <br>
                              <a href="https://medium.freecodecamp.org/the-definitive-node-js-handbook-6912378afc6e">The definitive Node.js handbook</a>
                              <br>
                              <br>
                              <a href="https://medium.freecodecamp.org/building-a-simple-node-js-api-in-under-30-minutes-a07ea9e390d2">Build a Node.js API in Under 30 Minutes</a>
                              
                              </div>

                        </div>


                        

                  </div>
                  <div class="block-bottom"></div>

            </div>

      </div>
      <script type="text/javascript">

      TweenMax.from(".left-col", 2, {
            width: "0%",
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-name", 2, {
            delay: 2.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist", 2, {
            delay: 2.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".about h1", 2, {
            delay: 3,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-name2", 2, {
            delay: 3.2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist2", 2, {
            delay: 3.4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-genre2", 2, {
            delay: 3.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".media p", 2, {
            delay: 3.6,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.staggerFrom(".media ul li", 2, {
            delay: 3.8,
            opacity: 0,
            y: 20,
            ease: Expo.easeInOut
      }, 0.1);


      TweenMax.from(".album-name3", 2, {
            delay: 4,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })

      TweenMax.from(".album-artist3", 2, {
            delay: 4.2,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
      })



      </script>
</body>
</html>

@endsection
