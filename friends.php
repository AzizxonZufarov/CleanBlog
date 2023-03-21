<?php
session_start();
?>
<? include "inc/bd.php";?>

<? include "inc/header.php";?>

<? include "inc/left.php";?>
  
  
    <div id="templatemo_right_column">
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                              <?$res1 = mysqli_query($con,"SELECT * FROM categories");

								$row1 = mysqli_fetch_assoc($res1);
	
	do{
?>
                    <li class="sliderImage">
                        <img src="images/slider/4.jpg" alt="4" />
                        <span class="right"><strong><?=$row1['title']?></strong><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    
                <? }while($row1 = mysqli_fetch_assoc($res1));?> 
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
 
                  <?
                  $id = $_GET['id'];
                  $res = mysqli_query($con,"SELECT * FROM posts WHERE cat_id= $id");
			
				   $row = mysqli_fetch_assoc($res);
	
	
	if(mysqli_num_rows($res)>0){
					do{?>
 
        
            <div class="post_section">
            
                <span class="comment"><a href="blog_post.html"><?=$row['comments']?></a></span>
            
                <h2><a href="blog_post.html"><?=$row['title']?></a></h2>
                    
            	<?=$row['date']?> | <strong>Author:</strong> <?=$row['author']?> | <strong>Category:</strong> <a href="#"><?=$row['categories']?></a>
                
                <img src="images/templatemo_image_01.jpg" alt="image 1" />
                
                <p><?=$row['text']?></p>
              <a href="blog_post.html">Continue reading...</a>
                
            </div>
             <? }while($row = mysqli_fetch_assoc($res));}else{
             	
 echo "not news";            	
}?>     


		</div>
    
  <div class="cleaner"></div>
  </div> 
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>
  


<? include "inc/footer.php";?>
