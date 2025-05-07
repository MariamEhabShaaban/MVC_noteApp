
 
<?php 
require 'partials/header.php';

require 'partials/nav.php';
?>
<main>
<div class="mx-auto max-w-7xl px-4Z py-6 sm:px-6 lg:px-8">
  <?php 
  foreach ($notes as $note):?>
    <a href="/mvc/controllers/note.php?id=<?=$note['id']?>" class="text-blue-500 hover:underline">
        <li><?= $note['body']?></li>
    </a>
   
  <?php endforeach?>
</div>
</main>
<?php
require 'partials/footer.php';
?>
  