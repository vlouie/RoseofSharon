<?php
include('header.php');
require '/vendor/phpmailer/phpmailer/class.phpmailer.php';
?>
<?php

if(isset($_POST['submit'])) {
  $mail = new PHPMailer;
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
  $mail->Port = 587;
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'MANDRILL_USERNAME';                 // SMTP username
  $mail->Password = 'MANDRILL_APIKEY';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

  $mail->From = 'from@example.com';
  $mail->FromName = 'Mailer';
  $mail->addAddress('v.louie91@gmail.com', 'VL');     // Add a recipient

  $mail->IsHTML(true);

  $mail->Subject = 'Here is the subject';
  $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
  } else {
    echo 'Message has been sent';
  }
  // TODO: customize
  //$to = "v.louie91@gmail.com";
  //$subject = "Rose of Sharon Order Request";

  //// data the visitor provided
  //$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
  //$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  //$phone_field = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
  //$order_field = filter_var($_POST['order'], FILTER_SANITIZE_STRING);
  //$quantity_field = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
  //$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

  ////constructing the message
  //$body = " From: $name_field\n\n E-Mail: $email_field\n\n Phone: $phone_field\n\n  Order: $order_field\n\n Quantity: $quantity_field\n\n Notes/Comments:\n\n $comment";

  //mail($to, $subject, $body);

  //echo "<script>alert('Order successfully processed. You will hear back from us in the next few days.');</script>";
  //sleep(100);
  // redirect to confirmation
  header('Location: index.php');
} else {
  // show error message
  //echo "<script>alert('Something went wrong with your order and it was not processed. Please try again later.');</script>";
}
?>
<script src="js/order.js" type="text/javascript"></script>
<div id="content">
  <h3>Order</h3>
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
      For enquiries, please call: (604) 783 - 1929<br />
      Alternatively, you can email us at <a href="mailto:roseofsharonfloralarts@gmail.com">roseofsharonfloralarts@gmail.com</a>
    </p>
  </div>
  <div id="orderImage">
  </div>
</div>
<?php
include('footer.php');
?>
