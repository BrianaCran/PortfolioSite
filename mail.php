<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Briana Crandall</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Briana Crandall</title>

    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/remodaldefaulttheme.css">
    <link rel="stylesheet" href="css/remodal.css">
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
       <div class="container-fluid">

         <div class="row nav">
          <div class="col-lg-4 col-md-4">
            <ul>
               <li><a href="index.html">Portfolio</a></li>
               <li><a href="about.html">About</a></li>
               <li class="jump"><p>Contact</p></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-4">
          </div>
          <div class="col-lg-4 col-md-4">
            <ul class="icons">
              <li><i class="fa fa-envelope" aria-hidden="true"></i>
                <ul class="drop">
                   <li>Email me: briana.marie.crandall@gmail.com</li>
                   <li>Call me: 919-356-2477</li>
                   <li class="jump">Jump to contact box at the bottom of the page!</li>
                </ul>
              </li>
              <li><a href="https://github.com/BrianaCran" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
              <li><a href="https://twitter.com/briana_crandall" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/briana-crandall-6714259a" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
         </div>

         <div class="row header">
           <div class="row">
            <div class="col-lg-4 col-md-4">
            </div>
            <div class="col-lg-4 col-md-4">
              <h1>Briana Crandall</h1>
            </div>
            <div class="col-lg-4 col-md-4">
            </div>
          </div>
           <div class="col-lg-6 col-md-6 ">
          <div class="me">
          </div>
        </div>

       <div class="col-lg-6 col-md-6">
         <p>I'm a user interface designer who creates responsive websites through code.</p>
        </div>
         </div>

         <div class="row content">
            <div class="col-lg-12 col-md-12">
              <div>
                <?php $name = check_input($_POST['name']);
                      $email = check_input($_POST['email']);
                      $message = check_input($_POST['message']);
                      $formcontent="From: $name \n Message: $message";
                      $recipient = "mail@brianamcrandall.com";
                      $subject = check_input($_Post['subject']);
                      $mailheader = "From: $email \r\n";

                      function check_input($data, $problem=''){
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                      if ($problem && strlen($data) == 0)
                        {
                          show_error($problem);
                        }
                        return $data;
                        }

                        mail($recipient, $subject, $formcontent, $mailheader) or die($problem);
                        echo "<h2>Thank you. I will get back to you as soon as I can!</h2>!"
                     ?>
              </div>
            </div>
         </div>

         <div class="row footer">
           <div class="col-lg-3 col-md-3">
           </div>
           <form action="mail.php" method="POST">
           <div class="col-lg-3 col-md-3">
               <p>Name</p> <input type="text" name="name" size="30">
               <p>Email</p> <input type="text" name="email" size="30">
           </div>
           <div class="col-lg-3 col-md-3">
             <p>Subject</p> <input type="text" name="subject" size="40">
             <p>Message</p><textarea name="message" rows="6" cols="39"></textarea><br />
             <input type="submit" value="Send" class="button">
             <input type="reset" value="Clear" class="button btnTwo">
           </div>
           </form>
           <div class="col-lg-3 col-md-3 textR">
             <p>&#169; 2016 Briana Crandall</p>
           </div>
         </div>



       </div> <!--Here ends container -->





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
