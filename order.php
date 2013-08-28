<?php
include('header.php');
?>
<?php
if(isset($_POST['submit'])) {
// TODO: customize
$to = "v.louie91@gmail.com";
$subject = "Flower Shop Order";
 
// data the visitor provided
$name_field = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$email_field = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$phone_field = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
$order_field = filter_var($_POST['order'], FILTER_SANITIZE_STRING);
$comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
 
//constructing the message
$body = " From: $name_field\n\n E-Mail: $email_field\n\n Phone: $phone_field\n\n  Order: $order_field\n\n Notes/Comments:\n\n $comment";
 
mail($to, $subject, $body);
 
// redirect to confirmation
//header('Location: confirmation.php');
} else {
// redirect to error page
//header('Location: error.php');
}
?>
<script src="js/order.js" type="text/javascript"></script>
<div id="content">
  <h3>Order</h3>
  <form id="contactform" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
		<label>Name</label>
		<input name="name" type="text"> <br>
		<label>E-mail</label>
		<input name="email" type="email"><br>
		<label>Phone</label>
		<input name="phone" type="text"><br>
		<label>Order</label>
		<input id="orderbox" name="order" type="text"><br>
		<label>Extra Notes/Comments:</label><br>
		<textarea cols="30" name="comment" rows="9"></textarea>
		<br>
		<input class="button" id="orderbutton" name="submit" type="submit" value="Place Order">
	</form>
</div>
<?php
include('footer.php');
?>
