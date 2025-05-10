
 
<?php 

require base_path('views/partials/header.php');

require base_path('views/partials/nav.php');
?>
<main>
<div class="mx-auto max-w-7xl px-4Z py-6 sm:px-6 lg:px-8">
        <p class="mb-6">
            <a href="/notes" class="text-blue-500 hover:underline">Go Back</a>
        </p class>
   
        <h1><?= $note['body']?></h1>
        <form action="" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id']?>">
            <button class="text-red-500 hover:underline">Delete</button>
        </form>
       
   
   
  
</div>
</main>
<?php
require base_path('views/partials/footer.php');
?>
  