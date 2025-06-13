
 
<?php 

require base_path('views/partials/header.php');

require base_path('views/partials/nav.php');
require view('partials/banner.php');

?>
<main>
<div class="mx-auto max-w-7xl px-4Z py-6 sm:px-6 lg:px-8">
     
<form action ="/note"  method="POST">
  <div class="space-y-12">
         <input type="hidden"  name="_method" value="PATCH">
         <input type="hidden" name="id" value="<?=$note['id']?>">
        <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-gray-900">Description</label>
          <div class="mt-2">
            <textarea name="body" id="body" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Here is an idea for a note..."> <?php echo $note['body']??''?></textarea>
          
                <?php if(isset($errors['body'])):?>
                    <p class="text-red-500 text-xs">
                        <?=$errors['body']?>
                   </p>
                <?php endif?>
          </div>
        
        </div>

        

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a  href="/notes"class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
  </div>
</form>

   
  
</div>
</main>
<?php
require base_path('views/partials/footer.php');
?>
  