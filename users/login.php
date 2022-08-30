<?php

require_once("config.php");

if(isset($_POST['login'])){
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELET * FROM users WHERE username=:username OR email=:email";
    $stmt = $pdo_conn->prepare($sql);

    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user["password"])){
            session_start();
            $_SESSION["user"] = $user;
            echo "<script>window.location.href='index.php?page=dashboard'</script>";
        }
    }
}

?>
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
        <h3 class="text-2xl font-bold text-center">Registration</h3>
        <form action="" method="post">
            <div class="mt-4">
                <div>
                    <label class="block" for="username">Username or Email<label>
                    <input type="text" name="username"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="mt-4">
                    <label class="block">Password<label>
                    <input type="password" name="password"
                    class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-600">
                </div>
                <div class="font-light hover:text-cyan-400">
                    <a href="index.php?page=registration">
                        Belum Punya Akun?
                    </a>
                </div>
                <div class="flex items-baseline justify-between">
                    <button type="submit" name="login" class="px-6 py-2 mt-4 text-white bg-blue-600 rounded-lg hover:bg-blue-900">Registration</button>
                </div>
            </div>
        </form>
    </div>
</div>