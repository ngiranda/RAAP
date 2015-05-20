<!DOCTYPE>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="RAPP.css">
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

    <title>FAQs</title>
  <style>
  .faq_question {
    margin: 0px;
    padding: 25px 0px 8px 0px;
    display: inline-block;
    cursor: pointer;
    font-weight: bold;
    font-size:30px;
}
 
.faq_answer_container {
    height: 0px;
    overflow: hidden;
    padding: 0px;
    font-size:20px;
}
</style>
</head>
<body>

 



<?php
include '../includes/header.php';  

?>
 <h1 ><strong> Click on a question below for help.</strong></h1>
<div class="faq_container" style="margin-left:20px">
   <div class="faq">
      <div class="faq_question">How do I search for a project?</div>
           <div class="faq_answer_container">
              <div class="faq_answer" ><iframe width="420" height="315" src="https://www.youtube.com/embed/J279FOZocmw" frameborder="0" allowfullscreen></iframe></div>
           </div>        
    </div>
 </div>
<div class="faq_container" style="margin-left:20px">
   <div class="faq">
      <div class="faq_question">How do I register a project?</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><iframe width="420" height="315" src="https://www.youtube.com/embed/jERD456u3fY" frameborder="0" allowfullscreen></iframe></a></div>
           </div>        
    </div>
 </div>
<div class="faq_container" style="margin-left:20px">
   <div class="faq">
      <div class="faq_question">How does the archive work?</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><iframe width="420" height="315" src="https://www.youtube.com/embed/jiNy0-wvt7w" frameborder="0" allowfullscreen></iframe></div>
           </div>        
    </div>
 </div>
<div class="faq_container" style="margin-left:20px">
   <div class="faq">
      <div class="faq_question">I do not have an image URL, can I just upload a picture?</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><iframe width="420" height="315" src="https://www.youtube.com/embed/HgwoyDjx3lc" frameborder="0" allowfullscreen></iframe></div>
           </div>        
    </div>
 </div>
 <div class="faq_container" style="margin-left:20px">
   <div class="faq">
      <div class="faq_question">The videos are not playing in my browser, is there another way to see them?</div>
           <div class="faq_answer_container">
              <div class="faq_answer">Yes, here are the links to the Youtube videos.<br>
              </h2>
              Search video: <a style='color:blue' href= "https://youtu.be/J279FOZocmw">https://youtu.be/J279FOZocmw</a><br>
              Register video: <a style='color:blue' href ="https://youtu.be/jERD456u3fY">https://youtu.be/jERD456u3fY</a><br>
              Archive video: <a style='color:blue' href = "https://youtu.be/jiNy0-wvt7w">https://youtu.be/jiNy0-wvt7w</a><br>
              Picture upload video: <a style='color:blue' href ="https://youtu.be/HgwoyDjx3lc">https://youtu.be/HgwoyDjx3lc</a><br>
             </h2>
              </div>
           </div>        
    </div>
 </div>
 <div class="faq_container" style="margin-left:20px">
   <div class="faq">
      <div class="faq_question">How can I help improve this site?</div>
           <div class="faq_answer_container">
              <div class="faq_answer"><iframe src="https://docs.google.com/forms/d/1ytaw0zQkLfewf2dDChrxnd2BryPmdYdHaB16ccLZW28/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
              </div>
           </div>        
    </div>
 </div>
<script>
 $(document).ready(function() {
 
    $('.faq_question').click(function() {
 
        if ($(this).parent().is('.open')){
            $(this).closest('.faq').find('.faq_answer_container').animate({'height':'0'},500);
            $(this).closest('.faq').removeClass('open');
 
            }else{
                var newHeight =$(this).closest('.faq').find('.faq_answer').height() +'px';
                $(this).closest('.faq').find('.faq_answer_container').animate({'height':newHeight},500);
                $(this).closest('.faq').addClass('open');
            }
 
    });
 
});
</script>
</body>
</html>

