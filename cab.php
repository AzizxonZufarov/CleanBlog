<?php
session_start();

$id = $_SESSION['id'];

?>

<? include "inc/bd.php";?>

<? include "inc/header.php";?>
   
   
<? include "inc/left.php";?>
   
   
   
    <div id="templatemo_right_column">
    
        <div id="templatemo_main">
 <?
 
$res = mysqli_query($con,"SELECT * FROM users WHERE id = $id");

$row = mysqli_fetch_assoc($res);
 ?>       
        
        
<h2 align="center">Добро пожаловать, <?=$row['login']?></h2>

        
<table align="center" border="1" width="50" height="100">
			
			<tr>
					<td align="center">Name</td>
					<td align="center">Login</td>
					<td align="center">Password</td>
					<td align="center">Email</td>
					<td align="center">Image</td>
			</tr>
			<tr>
					<td align="center"><?=$row['name']?></td>
					<td align="center"><?=$row['login']?></td>
					<td align="center"><?=$row['password']?></td>
					<td align="center"><?=$row['email']?></td>
					<td align="center"><img src="upl/<?=$row['img']?>" width="100"/></td>
	
			</tr>
</table>
			
        </div> <!-- end of main -->
       <a href="editcab.php?id=<?=$row['id']?>">edit</a></br>
       <a href="dellcab.php?id=<?=$row['id']?>">delete</a></br>
        <a href="logout.php"><button>Exit</button></a></br></br>
<? 
	
if($row['login'] == 'admin' and $row['password'] == 'admin'){?>
   <a href="admin/">Панель Администратора</a>
					<?}?>          
         <div class="cleaner"></div>
    </div> <!-- end of right column -->
    
    
  <div class="cleaner_h20"></div>
  
 <? include "inc/footer.php";?>
  
  
  
  
  
  
    
 
   