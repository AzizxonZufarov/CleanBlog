<?php
if($_SESSION['id'] == true){
session_start();
}
if($_SESSION['id'] == false){
unset($_SESSION['id']);
}
include "inc/bd.php";
?>


    <div id="templatemo_left_column">

        <div id="templatemo_header">

            <div id="site_title">
                <h1><a href="index.php" target="_parent">Clean <strong>Blog</strong><span>Блог на разные темы</span></a></h1>
            </div><!-- end of site_title -->

        </div> <!-- end of header -->

        <div id="templatemo_sidebar">



            <h4>Категории</h4>
            <ul class="templatemo_list">
	             <?$res1 = mysqli_query($con,"SELECT * FROM categories");

				$row1 = mysqli_fetch_assoc($res1);?>

	         	<? do{?>
	           		<li><a href="category.php?id=<?=$row1['id']?>"><?=$row1['title']?></a></li>
	 			<? }while($row1 = mysqli_fetch_assoc($res1));?>

            </ul>

            <div class="cleaner_h40"></div>

            <h4>Друзья</h4>
            <ul class="templatemo_list">

 <?$res2 = mysqli_query($con,"SELECT * FROM friends ");

	$row2 = mysqli_fetch_assoc($res2);
?>


        <? do{?>
                <li><a href="category.php?id=<?=$row2['id']?>"><?=$row2['name']?></a></li>
        <? }while($row2 = mysqli_fetch_assoc($res2));?>
            </ul>
            <div class="cleaner_h40"></div>

            <h4>Вход</h4>

          <?
          $id = $_SESSION['id'];


            if($_SESSION['id']){
						$res3 = mysqli_query($con,"SELECT * FROM users WHERE id = $id");

						$row3 = mysqli_fetch_assoc($res3);
            	if($row3['login'] == 'admin' and $row3['password'] == 'admin'){?>
					<p style="color:green" >Вы зашли как Administrator</p>
					<?}else{?>
					<p style="color:green" >Вы зашли как User</p>
					<?}?>

			<ul class="templatemo_list">
            	<li><a href="cab.php?id=<?=$id?>">Кабинет</a></li>

      	    </ul>
		<?}else{?>
		<ul class="templatemo_list">
            	<p style="color:green" >Вы зашли как Гость.</br> Пожалуйста, войдите или зарегистрируйтесь!</p>
            	<p></p>
            	<li><a href="reg.php">Регистрация</a></li>
            	<li><a href="auth.php">Авторизация</a></li>
        </ul>
<?}?>


        </div> <!-- end of templatemo_sidebar -->

    </div> <!-- end of templatemo_left_column -->
