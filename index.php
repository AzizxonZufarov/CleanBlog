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
  <?      $per_page = 5;
        $page = 1;
        if( isset($_GET['page'])) {
        $page = (int)$_GET['page'];
        }
        $id = $_GET['id'];
        $total_count_q = mysqli_query($con,"SELECT COUNT(`id`) as `total_count` FROM `posts`");

        $total_count=mysqli_fetch_assoc($total_count_q);

        $total_count=$total_count['total_count'];
        $total_pages = ceil($total_count / $per_page);

        if ($page <= 1 || $page > $total_pages) {
        $page = 1;
        }

        $offset=($per_page * $page)-$per_page;


      $res = mysqli_query($con,"SELECT * FROM `posts` ORDER BY `id` ASC LIMIT $offset,$per_page");
      $articles_exist=true;

      if(mysqli_num_rows($res)<=0){
          echo "Нет постов";
          $articles_exist=false;
      }?>
        <div id="templatemo_main">
          <?while($row = mysqli_fetch_assoc($res)){?>


            <div class="post_section">

                <span class="comment"><a href="blog_post.html"><?=$row['comments']?></a></span>

                <h2><a href="detail.php?id=<?=$row['id']?>"><?=$row['title']?></a></h2>

            	<?=$row['date']?> | <strong>Author:</strong> <?=$row['author']?> | <strong>Category:</strong> <a href="#"><?=$row['categories']?></a>

                <img src="<?=$row['img']?>" width="430px" height="300px"/>

                <p><?=mb_substr(strip_tags($row['text']), 0, 300, 'utf-8'). '...';?></p>
              <a href="detail.php?id=<?=$row['id']?>">Далее...</a>

            </div>
             <? }?>
             <?php
             if( $articles_exist == true)
             {
             		 echo '<div class="paginator">';

             			   if($page > 1)
             				 {
             					echo '<a href="index.php?page='. ($page - 1) .'">&laquo; Прошлая страница</a>';

             				 }
             				 if($total_pages != 1){
             					 for ($i = 1; $i <=$total_pages; $i++){
             						echo " <a href=index.php?page=" . $i .">". $i ."</a> ";
             						}
             					}else {
             						 echo "Пагинации нет!";
             						}
             			   if($page < $total_pages)
             				 {
             					 echo '<a href="index.php?page='. ($page + 1) .'"> Следующая страница &raquo;</a>';
             				 }
             		 echo '</div>';
              }
             ?>

		</div>

  <div class="cleaner"></div>
  </div>
    <!-- end of templatemo_main -->
  <div class="cleaner_h20"></div>



<? include "inc/footer.php";?>
