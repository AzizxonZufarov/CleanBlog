<? include "inc/bd.php";?>

<? include "inc/header.php";?>
   
   
<? include "inc/left.php";?>
   
   
   
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
			 <div id="contact_form">
				
				<form action="addcat2.php" method="post" enctype="multipart/form-data">

	 			    <label for="author">Author:</label> 
                    <input type="text" name="author"  />
                    <div class="cleaner_h10"></div>               
                        
                     <label for="author">Category:</label> 
                    <input type="text" name="categories"  />
                    <div class="cleaner_h10"></div>   
                                    
                     <label for="text">Text:</label> 
                    <textarea type="text" name="text"></textarea>
                    <div class="cleaner_h10"></div>
                    
                     <label for="author">Title:</label> 
                    <input type="text" name="title"  />
                    <div class="cleaner_h10"></div>   
 
     				<label for="email">Image:</label> 
                    <input type="file"  name="img"/>
                    <div class="cleaner_h10"></div>
                                
                      
                    <input type="submit" class="submit_btn" value="Send" />
					
				</form>
       
        	 </div> 
        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div> <!-- end of right column -->
    
    
  <div class="cleaner_h20"></div>
  
 <? include "inc/footer.php";?>
   