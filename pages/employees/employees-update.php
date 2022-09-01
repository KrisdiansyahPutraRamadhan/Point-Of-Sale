<?php
require_once("config.php");
if(!empty($_POST["update"])) {
	$pdo_statement=$pdo_conn->prepare("update employee set id='" . $_POST[ 'id' ] . "', nama='" . $_POST[ 'nama' ]. "', email='" . $_POST[ 'email' ]. "', phone='" . $_POST[ 'phone' ]. "' where id=" . $_GET["id"]);
  $result = $pdo_statement->execute();
  if($result) {
		echo "<script>window.location.href='index.php?page=employees'</script>";
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM employee where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">Update</h1>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">
            <div class="rounded-lg h-96">
                <form method="post" class="">
                    <div class="space-y-6 sm:space-y-5">
                        <div
                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="person_id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> ID
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="id" value="<?php echo $result[0]['id']; ?>"
                                    class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>
                        </div>

                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="first-name"
                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Nama </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="nama" value="<?php echo $result[0]['nama']; ?>"
                                        class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>
                            </div>

                            <div class="space-y-6 sm:space-y-5">
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="first-name"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Email </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="email" value="<?php echo $result[0]['email']; ?>"
                                            class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                            required>
                                    </div>
                                </div>

                                <div class="space-y-6 sm:space-y-5">
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="first-name"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Phone
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input type="text" name="phone" value="<?php echo $result[0]['phone']; ?>"
                                                class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                                required>
                                        </div>
                                    </div>

                                    <button type="submit" name="update" value="Update"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update</button>
                </form>
            </div>
        </div>
        <!-- /End replace -->
    </div>
</div>