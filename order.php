<?php
include('header.php');
require 'phpmailer/class.phpmailer.php';
?>
<?php

if(isset($_POST['submit'])) {
  // PHP Mailer using Mandrill SMTP
  $mail = new PHPMailer;
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup SMTP servers
  $mail->Port = 587;
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = getenv('MANDRILL_USERNAME');        // SMTP username
  $mail->Password = getenv('MANDRILL_APIKEY');          // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

  $mail->From = 'roseofsharonfloralarts@gmail.com';
  $mail->FromName = 'Rose of Sharon Order Form';
  $mail->addAddress('v.louie91@gmail.com', 'Rose of Sharon Floral Arts');     // Add a recipient

  $mail->IsHTML(true);

  // data the visitor provided
  $name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  $email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $phone_field = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
  $order_field = filter_var($_POST['order'], FILTER_SANITIZE_STRING);
  $quantity_field = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
  $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

  $mail->Subject = 'Rose of Sharon Order Request';
  $mail->Body    = "<b>From:</b> $name_field<br />
                    <b>E-Mail:</b> $email_field<br />
                    <b>Phone:</b> $phone_field<br />
                    <b>Order:</b> $order_field<br />
                    <b>Quantity:</b> $quantity_field<br />
                    <b>Notes/Comments:</b> $comment";
  $mail->AltBody = "From: $name_field\n\n E-Mail: $email_field\n\n Phone: $phone_field\n\n  Order: $order_field\n\n Quantity: $quantity_field\n\n Notes/Comments:\n\n $comment";

  if(!$mail->send()) {
    echo "<script>alert('Message could not be sent.')</script>";
    //echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    // redirect to confirmation
    header('Location: index.php');
  }
} else {
  // show error message
  //echo "<script>alert('Something went wrong with your order and it was not processed. Please try again later.');</script>";
}
?>
<script src="js/order.js" type="text/javascript"></script>
<div id="content">
  <h3 id="orderBanner">Order</h3>
  <div id="formDiv">
    <form id="contactForm" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
      <label class="order">Name</label>
      <input class="inputBox" name="name" type="text"> <br>
      <label class="order">E-mail</label>
      <input class="inputBox" name="email" type="email"><br>
      <label class="order">Phone</label>
      <input class="inputBox" name="phone" type="text"><br>
      <label class="order">Order</label>
      <input class="inputBox" id="orderbox" name="order" type="text"><br>
      <label class="order">Quantity</label>
      <input class="inputBox" name="quantity" type="text"><br>
      <label class="extra">Extra Notes/Comments:</label><br>
      <textarea cols="30" name="comment" rows="9"></textarea>
      <br>
      <input class="button" id="orderbutton" name="submit" type="submit" value="Place Order">
    </form>
    <p id="orderWarning">
      Prices subject to change.<br />
      For enquiries, please call: (604) 783-1929<br />
      Alternatively, you can email us at <a href="mailto:roseofsharonfloralarts@gmail.com">roseofsharonfloralarts@gmail.com</a>
    </p>
  </div>
  <div id="orderImage">
  </div>
<?php
include('footer.php');
?>
