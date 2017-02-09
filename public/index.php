<?php require '../includes/header.php' ?>


<?php
   


  
$sid = "";
$token = "";
if(isset($_POST['number']) && isset($_POST['message'])) {
  $number = $_POST['number'];
  $text = $_POST['brad'];

  
  
  if($number != '' && $text != '') 
  {
  //  To redirect formOh on a particular page

  }
}




$client = new Twilio\Rest\Client($sid, $token);
if(isset($_POST['submit'])){
  if(isset($_POST['number']) && isset($_POST['message'])) {
    $message = $client->messages->create(
  $number, // Text this number
  array(
    'from' => '9412003172', // From a valid Twilio number
    'body' => $text
  )
);
  }
}




?>


<div class="col-sm-6 col-sm-offset-3">
  <form name="formsub" class="formsub" role="form" id="formsub" method="post">
    <div class="form-group">
      <label for="email">Phone Number</label>
      <input name="number" type="tel" class="form-control" id="email" placeholder="Enter number">
    </div>
    <div class="form-group">
     <input type="hidden" name="brad" placeholder="enter here" id="brad" cols="30" rows="10" >
      <input name="message" placeholder="enter username you wish to follow" id="message" cols="30" rows="10" >
      
    </div>
    <button name="submit" id="submit" type="submit" class="btn btn-primary btn-block disable-on-click" value="Send Message">Get Latest Shot</button>
    <button name="submit" id="submit" type="submit" class="btn btn-primary btn-block enable-on-click" value="Send Message">Send Latest Shot to Phone</button>
  </form>

</div>

<div class="shot"></div>
<div id="drib"></div>
<?php require '../includes/footer.php' ?>