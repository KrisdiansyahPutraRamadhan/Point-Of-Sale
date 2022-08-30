<?php

require_once("config.php");

if(isset($_POST['registration'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
    $stmt = $pdo_conn->prepare($sql);

    $params = array(
        ":username" => $username,
        ":email" => $email,
        ":password" => $password
    );

    $saved =$stmt->execute($params);

    if($saved) echo "<script>window.location.href='index.php?page=login'</script>";
}

?>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-center">Registration</h3>
        <form action="" method="post">
            <div class="mt-4">
                <div>
                    <label class="block" for="username">Username<label>
                    <input type="text" name="username"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div>
                    <label class="block" for="email">Email<label>
                    <input type="email" name="email"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                    <input type="password" name="password"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600" required>
                </div>
                <div class="flex items-baseline justify-between">
                    <button type="submit" name="registration" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Registration</button>
                </div>
            </div>
        </form>
    </div>
</div>