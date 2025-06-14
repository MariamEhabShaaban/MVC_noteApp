
 
<?php 
require base_path('views/partials/header.php');

require base_path('views/partials/nav.php');

require view('partials/banner.php');

?>
<main>
<div class="mx-auto max-w-7xl px-4Z py-6 sm:px-6 lg:px-8">
  <?php 
  foreach ($notes as $note):?>
    <a href="/note?id=<?=$note['id']?>" class="text-blue-500 hover:underline">
        <li><?= $note['body']?></li>
    </a>
   
  <?php endforeach?>
  <p class="mt-5">
    <a href="/note/create" class="text-blue-500 hover:underline" >Create Note</a>
  </p>
</div>
</main>
<?php
require base_path('views/partials/footer.php');
?>
  