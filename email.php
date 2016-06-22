<?PHP
if (isset($_POST['submit'])) {
  header("Location: index.html");

if ( isset($_POST['email']) ) {
  $email = $_POST['email'];
}
if ( isset($_POST['name']) ) {
  $name = $_POST['name'];
}
if ( isset($_POST['phone']) ) {
  $phone = $_POST['phone'];
}
if ( isset($_POST['message']) ) {
  $message = $_POST['message'];
}


mail('alexander.eser@googlemail.com', $_POST['name'], $_POST['message']);


}
?>
