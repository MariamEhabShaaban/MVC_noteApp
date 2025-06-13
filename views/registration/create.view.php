<?php 
require view('partials/header.php');

require view('partials/nav.php');
?>
<main>
<!-- component -->
<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
  <div class="max-w-md w-full bg-white rounded-xl shadow-lg p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">Registration</h2>
    
    <form class="space-y-4" method="POST" action="/register">
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input 
          type="text" 
          name ="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="your@email.com"
        />
         <?php if(isset($errors['email'])):?>
                    <p class="text-red-500 text-xs">
                        <?=$errors['email']?>
                   </p>
                <?php endif?>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input 
          type="password" 
           name="password" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none transition-all"
          placeholder="••••••••"
        />
         <?php if(isset($errors['password'])):?>
                    <p class="text-red-500 text-xs">
                        <?=$errors['password']?>
                   </p>
                <?php endif?>
      </div>

    

      <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2.5 rounded-lg transition-colors">
      Register
      </button>
    </form>

   
  </div>
</div>
</main>
<?php
require view('partials/footer.php');
?>
  