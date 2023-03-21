<?php
session_start();
$id = $_SESSION['id'];
?>
<? include "inc/bd.php";?>
<? include "inc/header.php";?>


<? include "inc/left.php";?>

    <div id="templatemo_right_column">
        <?
                  $id = $_GET['id'];
                  $res = mysqli_query($con,"SELECT * FROM posts WHERE id= $id");
				  $row = mysqli_fetch_assoc($res);



		$res_upd = mysqli_query($con,"UPDATE posts SET `views`=`views`+1 WHERE id= $id");
        $res_views =   mysqli_query($con,"SELECT views AS cnt_views FROM posts WHERE id= $id");
		$row_views = mysqli_fetch_assoc($res_views);

		$total_views = $row_views['cnt_views'];


                  $count =   mysqli_query($con,"SELECT COUNT(id) AS cnt FROM comments WHERE news_id= $id");
				  $count_res = mysqli_fetch_assoc($count);
				  $total = $count_res['cnt'];


				$result = mysqli_query($con,"UPDATE posts SET comments = $total WHERE id = $id");
					do{?>
        <div id="templatemo_main">

            <div class="post_section">

                <span class="comment"><a href="#">	 <?=$total?></a></span>

                <h2><?=$row['title']?></h2>

              <?=$row['date']?>| <strong>Author:</strong> <?=$row['author']?> | <strong>Category:</strong> <a href=""><?=$row['categories']?></a>

    <img src="<?=$row['img']?>" width="430px" height="300px"/>

              <p><?=$row['text']?></p>

		  </div>
             <div class="comment_tab">
           	 <?=$total_views?>   Просмотров
            </div>

            <div class="cleaner"></div>
            <div class="comment_tab">
           	 <?=$total?>   Комментариев
            </div>


            <? }while($row = mysqli_fetch_assoc($res));?>
      <div id="comment_section">
       			<? $id = $_GET['id'];
                $res = mysqli_query($con,"SELECT * FROM comments WHERE news_id = $id");

				$row = mysqli_fetch_assoc($res);
				do{?>
                 <ol class="comments first_level">

                        <li>
                            <div class="comment_box commentbox1">

                                <div class="gravatar">
                                    <img src="images/avator.png" alt="author" />
                                </div>

                                <div class="comment_text">
                                    <div class="comment_author"><?=$row['author']?><span class="date"><?=$row['date']?></span><span class="time">12:30 AM</span></div>
                                    <p><?=$row['text']?></p>
                                  <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </div>

                        </li>  </ol>
 <? }while($row = mysqli_fetch_assoc($res));?>


                </div>

                <div id="comment_form">
                    <h3>Leave a comment</h3>


                     <?

                  $res = mysqli_query($con,"SELECT * FROM users WHERE id= $id");
				  $row = mysqli_fetch_assoc($res);?>


              		<form action="inscomment.php" method="post">

              		<?
              		if($_SESSION['id']){?>

                        <div class="form_row">
                            <label><strong>Comment</strong></label>
           					<br />
                            <textarea  name="text" rows="" cols=""></textarea>
                        </div>

                        <input type="hidden" name="id" value="<?=$id?>" />
                        <input type="submit" name="Submit" value="Submit" class="submit_btn" />

					<?}else{?>


             		  	 <div class="form_row">
                            <label><strong>Name</strong></label>
           					<br />
                            <input type="text" name="author" />
                        </div>

                        <div class="form_row">
                            <label><strong>Email</strong></label>
          					<br />
                            <input type="text" name="email" />
                        </div>

                        <div class="form_row">
                            <label><strong>Comment</strong></label>
           					<br />
                            <textarea  name="text" rows="" cols=""></textarea>
                        </div>

                        <input type="hidden" name="id" value="<?=$id?>" />
                        <input type="submit" name="Submit" value="Submit" class="submit_btn"/>


								<?}?>
                    </form>

                </div>

		</div> <!-- end of main -->

  <div class="cleaner"></div>
  </div>
    <!-- end of templatemo_main -->



  <div class="cleaner_h20"></div>

  <? include "inc/footer.php";?>
