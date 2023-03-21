<? include "inc/bd.php";?>
<?php
session_start();
$id = $_GET['id'];

?>

<? include "inc/header.php";?>


<? include "inc/left.php";?>



    <div id="templatemo_right_column">

        <div id="templatemo_main">
			 <div id="contact_form">


			 <?

			$res = mysqli_query($con,"SELECT * FROM users WHERE id = $id");

			$row = mysqli_fetch_assoc($res);
				?>
				<form action="updcab.php" method="post" enctype="multipart/form-data">

	 			    <label for="author">Name:</label>
                    <input type="text" value="<?=$row['name']?>" name="name"  />
                    <div class="cleaner_h10"></div>


                    <label for="email">Login:</label>
                    <input type="text" value="<?=$row['login']?>" name="login"/>
                    <div class="cleaner_h10"></div>


                    <label for="text">password:</label>
                    <input type="text" value="<?=$row['password']?>" name="password"/>
                    <div class="cleaner_h10"></div>

                     <label for="text">Email:</label>
                    <input type="text" value="<?=$row['email']?>" name="email"/>
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
