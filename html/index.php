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
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <link rel="stylesheet" type="text/css" href="../css/mainPageNav.css">
  <link rel="icon" href="../Images/logo.PNG">

</head>

<body>
  <div class="mainGrid">
    <div class="titleBar">
      <h1 id="title"><a href="../pages/index.php">The Wolding Journal</a></h1><br>
      <nav id=mainNav>
        <ul>
          <div class="dropdown">
            <li class="dropbtn navPad">About</li>
            <div class="dropdown-content">
              <a href="../pages/bio.php">Bio</a>
              <a href="../pages/interests.php">Interests</a>
            </div>
          </div>
          <li class="navPad"><a href="../pages/resume.php">Resume</a></li>
          <li class="navPad" id="contact"><a href="../pages/contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>

    <div class="narrowDateBar borderTopBottom">
      <p id="todayDate">Thursday, November 30, 2017</p>
    </div>


    <div class="leftBlockColumn borderAllWalls">
      <h6 id="leftBlockTitle" class="title" onclick="window.location = 'bio.php';" onmouseover="combineHover()" onmouseleave="combineHoverLeave()">CENTRAL WI MAN TELLS US ABOUT HIMSELF</h6>
      <div id="leftArticleOne" onclick="window.location = 'bio.php';" onmouseover="combineHover()" onmouseleave="combineHoverLeave()">
        <hr>
        <h1 class="center pd">HEAR HIS STORY</h1>
        <hr>
        <h2 class="center pd">"I have always wanted to travel and pursue the field of web design / development"</h2>
        <hr>
        <p class="pd LastP">Chad comes from the small central Wisconsin town of Amherst. He found his passion in the IT field after building his first PC at the age of 16. From there, he finished High School and attended Mid-State Technical College. He will be finishing
          up the school's software development program in spring of 2018. More on page 2....</p>

      </div>
      <div id="leftArticleTwo" class="borderAllWalls" onclick="window.location = 'interests.php';">
        <h1 class="center mt pd" id="leftArticleTwoTitle">Hobbies And Interests of an Actual Native Wisconsin Man</h1>
        <hr>
        <p class="pd">Wisconsin can be a tough place to live, especially in the winter time. Blizzards and sub-zero temperatures can put a damper on many peoples' plans and motivation. So what does a 23 year old Wisconsin native do for fun? We were able to find a true
          Wisconsinite and ask him some questions. Chad said, "I spend a lot of time drinking coffee and sitting behind my computer. I try not to freeze in the winter. Oh! And I spend a lot of time on web design!" He stated he likes his home state a lot,
          but would love to experience something new.</p>
        <p class="pd LastP">Chad went on to explain what kind of accent Wisconsinites have. We all want to know. More on page 2....</p>
      </div>
    </div>


    <div class="narrowMiddleColumn" onclick="window.location = 'resume.php';">
      <h5 id="narrowTopTitle" class="title center pd">Resume Reading With A Simple Click</h5>
      <hr>
      <h2 class="center pd">"All I Did Was Click!"</h2>
      <hr>
      <p class="pd">Imagine if all you had to do to read someone's resume was click on a link or even this very article! It is that easy. The days of fumbling through endless stacks of paper are over. There is no longer a need to store paper. Simply go to a portfolio
        site and experience a new perspective on resumes. Start now by viewing Chad's resume right here.</p>
      <p class="pd LastP">Clicking on this article will link you to Chad's resume. Chad states, "Please reach out to me with any additional information you would like." He has contact information on his resume or you can contact him via this website. More on page 3....</p>
    </div>


    <div class="rightColumn borderAllWalls" onclick="window.location = 'contact.php';">
      <h5 class="rightBlockTitle title">CHAD WOLDING POSTS CONTACT INFORMATION AND WOULD BE HAPPY TO HEAR FROM YOU</h5>
      <div class="rightColImg">
      </div>
      <div class="lastColumn">
        <hr>
        <h1 class="center mt pd">"The Message Was Sent Before I Knew It!"</h1>
        <hr>
        <p class="pd">It is very easy to contact people when they provide a utility to directly send them a message. By clicking this article, you will be directed to a page where you will fill out a few boxes with general information and your message will be on its
          way. Messages are sent via Email.</p>
        <p class="pd LastP veryLastP">To send a message to Chad, click here or please see page 4..... </p>

      </div>
    </div>
  </div>
  <script src="../js/function.js"></script>
</body>
</html>
