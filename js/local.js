// JavaScript Document

$(document).ready(function(){

//=================================================masonry options
	
var $container = $('#container');
$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector : '.box',
    columnWidth: 250,
    isAnimated: true,
    isFitWidth: true
  });
});

//================================================= end masonry options
//=================================================prepend


$('button').click(function(){
  var $boxes = '<article class="box"><a><h4 class="question">QUESTION</h4></a><img src="image.jpg" width="240" /><div class="meta"><p class="answers"># Answers</p><p class="enjoys"># Enjoys</p><time datetime="DATE">DATE</time></div><ol class="comments"><li><h5>NAME</h5><p>COMMENT</p></li><li><h5>NAME</h5><p>COMMENT</p></li><li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li></ol></article>';
  $('#container').prepend( $boxes ).masonry( 'reload' );
});


//================================================= end prepend

});

/* <article class="box">
      <a><h4 class="question">QUESTION</h4></a>
      <img />
      <div class="meta">
        <p class="answers">ANSWERS Answers</p>
        <p class="enjoys">ENJOYS Enjoys</p>
        <time datetime="DATE">DATE</time>
      </div>
      <ol class="comments">
        <li><h5>NAME</h5><p>COMMENT</p></li>
        <li><h5>NAME</h5><p>COMMENT</p></li>
         <li class="onhover"><h5>USER</h5><p>COMMENTBOX</p></li>
      </ol>
    </article>
    */