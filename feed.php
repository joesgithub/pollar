<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
  <script type="text/javascript" src="js/jquery.infinitescroll.min.js"></script>
  <script type="text/javascript" src="js/local.js"></script>
  <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
  <title>Pollar Feed</title>
</head>
<body>
  <header>
    <div class="dropdown" id="sort"><a href="#">Sort</a>
        <ul>
            <li><a href="#">Newest</a></li>
            <li><a href="#">Top Rated</a></li>
            <li><a href="#">People</a></li>
        </ul>
    </div>

    <form action="" method="get" class="search">
      <input type="text" name="phrase" id="phrase" class="searchbox" placeholder="Search">
      <input type="hidden" name="page" value="search">
     </form>

    <a href="#" class="logo">
      <img src="images/logo.png" alt="Logo" width="60" height="40" />
    </a>

    <a href="#" class="profilepic">
      <img src="images/user.jpg" alt="User" width="36" height="36" />
    </a>

    <div class="dropdown" id="profile"><a href="#">Username</a>
        <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">About Pollar</a></li>
            <li><a href="#">RSS</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#" class="logout">Log Out</a></li>
        </ul>
    </div>
  </header>

  <div id="container" class="cf">

    <div class="box" id="corner-stamp">

        <form method="post" action="#question" class="question">
          <textarea name="question" id="question" required="required" placeholder="Got a Question?"></textarea>

          <label for="image">Image?</label>
          <input type="file" name="image" id="image" size="10" />

          <label for="url">Link?</label>
          <input type="url" name="url" id="url" />

          <input type="submit" value="Ask It!" />
          <input type="hidden" name="did_question" value="1" />
        </form>
    </div>

    <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img src="image.jpg" width="240" />
      <div class="meta">
        <p class="answers"># Answers</p>
        <p class="enjoys"># Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>

    <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img src="image.jpg" width="240" />
      <div class="meta">
        <p class="answers"># Answers</p>
        <p class="enjoys"># Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>

    <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img src="image.jpg" width="240" />
      <div class="meta">
        <p class="answers"># Answers</p>
        <p class="enjoys"># Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>

    <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img src="image.jpg" width="240" />
      <div class="meta">
        <p class="answers"># Answers</p>
        <p class="enjoys"># Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>

    <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img src="image.jpg" width="240" />
      <div class="meta">
        <p class="answers"># Answers</p>
        <p class="enjoys"># Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>

    <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img src="image.jpg" width="240" />
      <div class="meta">
        <p class="answers"># Answers</p>
        <p class="enjoys"># Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>

    <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img src="image.jpg" width="240" />
      <div class="meta">
        <p class="answers"># Answers</p>
        <p class="enjoys"># Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>

  </div> <!-- #container -->


</body>
</html>