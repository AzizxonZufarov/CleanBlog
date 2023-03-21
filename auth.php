<? include "inc/bd.php";?>

<? include "inc/header.php";?>
   
   
<? include "inc/left.php";?>
   
   
   
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">


   
    <div id="contact_form">
            
                <h2>Авторизация</h2>
                
                <form method="post" action="auth2.php">
 
                   <label for="author">Login:</label> <input type="text" id="author" name="login" class="required input_field" />
                    <div class="cleaner_h10"></div>
                    
                  <label for="author">Password:</label> <input type="text" id="author" name="password" class="required input_field" />
                    <div class="cleaner_h10"></div>
                                     
                    <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                    
                
              </form>
            
     </div> 
        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div> <!-- end of right column -->
    
    
  <div class="cleaner_h20"></div>
  
 <? include "inc/footer.php";?> 
 
