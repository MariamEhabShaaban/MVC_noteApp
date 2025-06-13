
 
<?php 
require 'partials/header.php';

require 'partials/nav.php';
require view('partials/banner.php');

?>
<main>
<div class="mx-auto max-w-7xl px-4Z py-6 sm:px-6 lg:px-8">
  <h1>Hello  <?php echo $_SESSION['user']['email']??'Guest'?></h1>
</div>
</main>
<?php
require 'partials/footer.php';
?>
  