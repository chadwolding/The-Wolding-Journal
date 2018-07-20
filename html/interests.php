<!doctype html>
<html lang="en">

<head>
  <title>The Wolding Journal</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Rye%7CUnifrakturCook:700%7CUnifrakturMaguntia" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../css/nav.css">
  <link rel="stylesheet" type="text/css" href="../css/interestStyle.css">
  <link rel="icon" href="../Images/logo.PNG">
</head>

<body>
  <header>
    <div class="titleBar">

      <div class=nav>
        <ul>
          <li id="title" class="pd"><a href="../pages/index.php">T.W.J.</a></li>
          <li><a href="../pages/resume.php" class="pd center">Resume</a></li>
          <li><a href="../pages/contact.php" class="pd center">Contact</a></li>
          <div class="drop center">
            <button class="dropHover pd">About</button>
            <div class="dropdown-items">
              <a href="../pages/bio.php">Bio</a>
              <a href="../pages/interests.php">Interests</a>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </header>
  <main>
    <div class="container">

      <div class="headerGrid">
        <div class="logoTitleContainer">
          <div class="logo">
            <h1 id="logoId">T.W.J.</h1>
          </div>
          <div class="list">
            <h1 id="thisTitle">Interests</h1>
          </div>
        </div>
        <div class="smallListContainer">
          <h1 id="listTitle">What I Enjoy</h1>
          <ul class="enjoy">
            <li>Design</li>
            <li>Health And Fitness</li>
            <li>Gaming</li>
            <li>Hiking</li>
            <li>Time With Family/Friends</li>
          </ul>
        </div>
      </div>

      <div class="bodyContentGrid">
        <div class="bodyParagraphs">
          <h2>When It All Started.</h2>
          <p>Since I was very young, I have enjoyed playing outside and playing video games. I was always seeking a new adventure and wanting to try new things. When I wasn't outside, I was playing video games with my two older brothers. I clearly remeber
            playing halo 2 for hours on end.</p>
          <p>Eventually, my passion for gaming turned into a knack for design. I enjoyed building new things and seeing progress. I would spend much time building new maps on halo trying to create something innovative. I would also spend time in other aspects
            of my life planning and organizing in order to ensure a positive outcome.</p>
          <h2>How It Applies Today.</h2>
          <p>Today, I still enjoy these two things. I have found my passion in the field of software development. I am able to express myself in my work and truly work on creating unique designs. Everyday I better myself in this field and I enjoy every minute
            of it. Still when I am not behind my desk coding and designing, I find myself outdoors seeking the next big adventure.</p>
          <p>From here, I plan to fulfill my passion in the web design/development industry. Being employed in a field I am passionate about is my ultimate goal.</p>
          <p>The pictures shown are from some of my adventures.</p>
        </div>
        <div class="imgContainer">
          <img class="image" id="image1" onclick="fullScreen(id)" src="../Images/image1.jpg" alt="">
          <img class="image" id="image2" onclick="fullScreen(id)" src="../Images/image2.jpg" alt="">
          <img class="image" id="image3" onclick="fullScreen(id)" src="../Images/image3.jpg" alt="">
          <img class="image" id="image4" onclick="fullScreen(id)" src="../Images/image4.jpg" alt="">
          <img class="image" id="image5" onclick="fullScreen(id)" src="../Images/image5.jpg" alt="">
          <img class="image" id="image6" onclick="fullScreen(id)" src="../Images/image6.jpg" alt="">
        </div>
      </div>

      <!-- The Modal -->
      <div id="myModal" class="modal">
        <span id="close" onclick="pleaseClose()">&times;</span>
        <img src="../Images/image1.jpg" class="modal-content" id="modalImage" alt="">
        <div id="caption"></div>
      </div>

    </div>
  </main>
  <footer>
    <div class="social white">
      <a href="https://www.facebook.com/chad.wolding.5"><i class="fa fa-facebook-official fa-2x"></i></a>
      <a href="http://www.thepictaram.club/instagram/chadwolding"><i class="fa fa-instagram fa-2x"></i></a>
      <a href="https://www.linkedin.com/in/chadwolding/"><i class="fa fa-linkedin-square fa-2x"></i></a>
      <a href="https://codepen.io/GingerDev/"><i class="fa fa-codepen fa-2x"></i></a>
    </div>
  </footer>
  <script src="../js/function.js"></script>
  <script src="https://use.fontawesome.com/1edc521bf1.js"></script>
</body>

</html>
