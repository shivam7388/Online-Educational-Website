<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/contact.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
  <?php require 'nav.php' ?>
    <div class="container">
        <header>
            <h1>Contact Us</h1>
            <p>Feel free to contact</p>
        </header>
        <div class="content">
            <div class="content-form">
                <section>
                    <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                    <h2>address</h2>
                    <p>
                        Mangolpuri J-block <br>
                        New Delhi. <br>
                        110081
                    </p>
                </section>

                <section>
                    <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                    <h2>Phone</h2>
                    <p>+91-7388560348</p>
                </section>

                <section>
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    <h2>E-mail</h2>
                    <p>kishan1269565@gmail.com</p>
                </section>
            </div>
      

      <form class="mform" id="myform" action="connect.php" method="POST">
        <div class="form">
            <div class="right">
              <div class="contact-form">
                   <span class="ma-lr">Full Name</span><br>
                  <input type="text" name="cname" id="cname" required >
              </div>
              <div class="contact-form">
                  <span class="ma-lr">E-mail Id</span><br>
                  <input type="E-mail"  name="cemail" id="cemail" required>
              </div>
              <div class="contact-form"><br>
                  <span class="ma-lr" > Type your Message....</span><br>
                  <textarea name="text" id="text" ></textarea>
              </div>
              <div class="contact-form">
                  <input type="submit" name="submit" id="submit" value="submit">
              </div>
              </div>
            </div>
          
        <div class="media">
            <li><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></li>
            <li><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></li>
        </div>
     </form>
    </div>    
  </div> 
</div>

<script>
function resetForm() {
    document.getElementById("myform").reset();   
}
</script> 
</body>
</html>