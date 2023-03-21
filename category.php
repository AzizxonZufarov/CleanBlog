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
    $res2 = mysqli_query($con,"SELECT * FROM posts WHERE cat_id=$row1[id]");
     $row2 = mysqli_fetch_assoc($res2);
?>
                    <li class="sliderImage">
                        <img src="<?=$row2['img']?>" width="430px" height="300px"/>
                        <span class="right"><strong><?=$row1['title']?></strong><br /><?=mb_substr(strip_tags($row2['text']), 0, 100, 'utf-8'). '...';?></span>
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

                <span class="comment"><a href="detail.php?id=<?=$row['id']?>"><?=$row['comments']?></a></span>

                <h2><a href="detail.php?id=<?=$row['id']?>"><?=$row['title']?></a></h2>

            	<?=$row['date']?> | <strong>Author:</strong> <?=$row['author']?> | <strong>Category:</strong> <a href="#"><?=$row['categories']?></a>

              <img src="<?=$row['img']?>" width="430px" height="300px"/>

                <p><?=mb_substr(strip_tags($row['text']), 0, 300, 'utf-8'). '...';?></p>
              <a href="detail.php?id=<?=$row['id']?>">Далее...</a>

            </div>
             <? }while($row = mysqli_fetch_assoc($res));}else{

 echo "Нет постов";
}?>


		</div>

  <div class="cleaner"></div>
  </div>
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>



<? include "inc/footer.php";?>
