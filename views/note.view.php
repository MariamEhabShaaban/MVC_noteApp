
 
<?php 
$note=$notes[0];
require 'partials/header.php';

require 'partials/nav.php';
?>
<main>
<div class="mx-auto max-w-7xl px-4Z py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/mvc/controllers/notes.php" class="text-blue-500 hover:underline">Go Back</a>
        </p class>
   
        <h1><?= $note['body']?></h1>
   
   
  
</div>
</main>
<?php
require 'partials/footer.php';
?>
  