
 
<?php 

require 'views/partials/header.php';

require 'views/partials/nav.php';
?>
<main>
<div class="mx-auto max-w-7xl px-4Z py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/mvc/notes" class="text-blue-500 hover:underline">Go Back</a>
        </p class>
   
        <h1><?= $note['body']?></h1>
   
   
  
</div>
</main>
<?php
require 'views/partials/footer.php';
?>
  