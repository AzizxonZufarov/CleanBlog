<? include "inc/bd.php";?>
<? include "inc/header.php";?>
   
   
<? include "inc/left.php";?>
   
   
   
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
	   
 
                  <?
                  $id = $_GET['id'];
                  $res = mysqli_query($con,"SELECT * FROM posts");
			
				   $row = mysqli_fetch_assoc($res);
	
	
	
					do{?>
 
        
            <div class="post_section">
             
                <h2><a href="dellfriend2.php?id=<?=$row['id']?>"><?=$row['title']?></a></h2>
                  
            </div>
             <? }while($row = mysqli_fetch_assoc($res));?>
  
</div>
        <div class="cleaner"></div>
    </div> <!-- end of right column -->
    
    
  <div class="cleaner_h20"></div>
  
 <? include "inc/footer.php";?>
   