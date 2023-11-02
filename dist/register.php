<?php 
    include_once 'header.php';
?>
    
    <form action="" method="post" class="grid justify-center mt-14 bg-slate-500 w-1/2 mx-auto py-2 px-3">
        <h2 class="text-3xl text-center mb-5">Sign Up</h2>
        <div class="flex flex-col gap-2">
            <label for="username">Username </label>
            <input type="text" name="username" id="username" class="border border-gray-600 bg-transparent px-3 py-1 text-white">
            <p class="text-red-600 hidden" id="invalid_username" >Invalid Username</p>
        </div>
        <div class="flex flex-col gap-2">
            <label for="email">Email </label>
            <input type="email" name="email" id="email" class="border border-gray-600 bg-transparent px-3 py-1 text-white">
            <p class="text-red-600 hidden" id="invalid_email" >Invalid Email</p>
        </div>
        <div class="flex flex-col gap-2">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="border border-gray-600 bg-transparent px-3 py-1 text-white">
            <p class="text-red-600 hidden" id="invalid_password" >Invalid Password</p>
        </div>
        <div class="flex flex-col gap-2">
            <label for="password">Confirm Password</label>
            <input type="password" name="password" id="confirm_password" class="border border-gray-600 bg-transparent px-3 py-1 text-white">
        </div>
        <input type="submit" value="Submit" class="bg-black text-white my-4 px-3 py-1 cursor-pointer">
    </form>

    <script src="register.js"></script>
<?php 
    include_once("footer.php");
?>