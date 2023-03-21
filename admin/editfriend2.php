<? include "inc/bd.php";?>
<?php
?>

<? include "inc/header.php";?>
   
   
<? include "inc/left.php";?>
   
   
   
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
			 <div id="contact_form">
			 
			 
			 <? $id = $_GET['id'];

			$res = mysqli_query($con,"SELECT * FROM posts WHERE id = $id");

			$row = mysqli_fetch_assoc($res);?>
			
				<form action="updfriend.php" method="post" enctype="multipart/form-data">

	 			    <label for="author">Author:</label> 
                    <input type="text" value="<?=$row['author']?>" name="author"  />
                    <div class="cleaner_h10"></div>               
                        
                     <label for="author">Category:</label> 
                    <input type="text" value="<?=$row['categories']?>" name="categories"  />
                    <div class="cleaner_h10"></div>   
                                    
                     <label for="text">Text:</label> 
                    <textarea type="text" name="text"><?=$row['text']?></textarea>
                    <div class="cleaner_h10"></div>
                    
                     <label for="author">Title:</label> 
                    <input type="text" value="<?=$row['title']?>" name="title"  />
                    <div class="cleaner_h10"></div>   
 
     				<label for="email">Image:</label> 
                    <input type="file"  name="img"/>
                    <div class="cleaner_h10"></div>
                    
                                    
                      <input type="hidden" value="<?=$id?>" name="id" />
                    <input type="submit" class="submit_btn" value="Send" />
					
				</form>
       
        	 </div> 
        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div> <!-- end of right column -->
    
    
  <div class="cleaner_h20"></div>
  
 <? include "inc/footer.php";?>
   