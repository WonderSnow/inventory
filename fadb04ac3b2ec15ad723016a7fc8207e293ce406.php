<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Verification</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white shadow-lg rounded-xl p-8 max-w-md w-full">

        <h1 class="text-2xl font-bold text-gray-800 mb-4 text-center">
            Account Verification Required
        </h1>

        <p class="text-gray-600 text-center mb-6">
            Please verify your account to continue.
        </p>

        
        <form method="POST" action="<?php echo e(route('verification.send')); ?>" class="mb-6">
            <?php echo csrf_field(); ?>
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-medium transition">
                Resend Verification Code to Email
            </button>
        </form>

        <div class="border-t border-gray-200 my-6"></div>

        
        <form method="POST" action="<?php echo e(route('verification.verify')); ?>" class="space-y-4">
            <?php echo csrf_field(); ?>

            <div>
                <label for="verification_code" class="block text-gray-700 font-medium mb-1">
                    Verification Code
                </label>
                <input
                    type="text"
                    id="verification_code"
                    name="verification_code"
                    required
                    class="w-full border border-gray-300 rounded-lg px-3 py-2 transition focus:ring-2 focus:ring-blue-500 focus:outline-none"
                    placeholder="Enter your 6-digit code">
            </div>

            <button
                type="submit"
                class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg font-semibold transition">
                Verify Account
            </button>
        </form>
        
        <div class="text-center mt-4 text-gray-500">or</div>
        <a href="<?php echo e(route('logout')); ?>" class="mt-4 text-center block text-red-600 hover:underline">Logout</a>
    </div>
</body>
</html>
<?php /**PATH D:\xampp\htdocs\inventory\resources\views/auth/verify-notice.blade.php ENDPATH**/ ?>