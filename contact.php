<?php
session_start();
?>
<? include "inc/bd.php";?>

<? include "inc/header.php";?>


<? include "inc/left.php";?>



    <div id="templatemo_right_column">

        <div id="templatemo_main">

        	<h1>Контакты</h1>

        <p></p>

            <div id="contact_form">
              <strong class="fix-width-100"><i class="fa fa-skype margin-right-5"></i> Telegram</strong> : @AzizxonZufarov<br/>
              <strong class="fix-width-100"><i class="fa fa-envelope margin-right-5"></i> Email</strong> : bionorica2015@mail.ru  OR  orangelemoncoder@gmail.com<br/>
              <strong class="fix-width-100"><i class="fa fa-globe margin-right-5"></i> Website</strong> : www.testcoder.uz<br/>
              <strong class="fix-width-100"><i class="fa fa-location-arrow margin-right-5"></i> Adresse</strong> : 47, Uygur proezd street, Uchtepa district, Tashkent, Uzbekistan  <br/>
<br />
                <h2>Contact Me</h2>
<br />
                <form method="post" action="inscontact.php">

                    <label for="author">Name:</label>
                    <input type="text" id="name" name="name" class="required input_field" />
                    <div class="cleaner_h10"></div>

                    <label for="email">Email Address:</label>
                    <input type="text" id="email" name="email" class="validate-email required input_field" />
                    <div class="cleaner_h10"></div>


                    <label for="text">Message:</label>
                    <textarea id="text" name="msg" rows="0" cols="0" class="required"></textarea>
                    <div class="cleaner_h10"></div>
                     
                    <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />

              </form>

            </div>

        </div> <!-- end of main -->
        <div class="cleaner"></div>
    </div> <!-- end of right column -->


  <div class="cleaner_h20"></div>

 <? include "inc/footer.php";?>
