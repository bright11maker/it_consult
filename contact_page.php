<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./dist/main.css" />
    <script
      src="https://kit.fontawesome.com/011545c454.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Machsoft Inc</title>
  </head>
  <body>
<?php include_once("navigation.php");?>
 <?php 
 

if(isset($_POST['submit'])){

  $clientName = $_POST['name'];
  $clientEmail = $_POST['email'];
  $clientbudget = $_POST['amount'];
  $clientcompany = $_POST['company'];
  $messageSubject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "brightcgc11@gmail.com";
  $body = "";

  $body .= "From: ".$clientName. "\r\n"; 
  $body .= "Email: ".$clientEmail. "\r\n";
  $body .= "Message: ".$messageSubject. "\r\n";

  mail($to, $messageSubject,$body); 

}
 
 
 ?>
    <main>

        <section class="contact--us">
            <h2>Get in touch</h2>
    <div class="container">
      <div class="text--sec">
          <h4>
          Have a project in mind? fill out the form below to start a
          project with us
        </h4>
      </div>
      <div class="form--sec">
        <form action="contact_page.php" method="post">
          <input type="text" placeholder="Enter name" name="name" required />
          <input type="email" placeholder="Enter email" name="email" required />
          <input type="tel" placeholder="Phone number" name="number" required />
          <input type="text" placeholder="company (optional)" name="company" />
          <input type="number" placeholder="Budget (GHS)" name="amount" required />
          <input type="text" placeholder="Subject" name="subject" />
          <textarea
            name="message"
            placeholder="Description of your project"
            id=""
            cols="30"
            rows="10"
            required
          ></textarea>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
</section>
</main>

<?php
include_once("footer.php");
?>

<?php
include_once("script_links.php");
?>
</body>
</html>
