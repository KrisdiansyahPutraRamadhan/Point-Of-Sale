<?php

if(!empty($_POST["submit"])) {
	require_once("config.php");
	$sql = "INSERT INTO employee  VALUES ( :id, :nama, :email, :phone )";
	$pdo_statement = $pdo_conn->prepare( $sql );
	$result = $pdo_statement->execute( array( ':id'=>$_POST['id'], ':nama'=>$_POST['nama'], ':email'=>$_POST['email'], ':phone'=>$_POST['phone'] ) );
	print_r($result);
  if($result >= 1 ){
    echo "<script>window.location.href='index.php?page=employees'</script>";
  } else {
    echo "Something Went Wrong!";
  }
}

?>
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <h1 class="text-2xl font-semibold text-gray-900">New Employees</h1>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
        <!-- Replace with your content -->
        <div class="py-4">
            <div class="rounded-lg h-96">
                <form method="post" class="">
                    <div class="space-y-6 sm:space-y-5">
                        <div
                            class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                            <label for="id" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> ID
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="id"
                                    class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>
                        </div>
                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="nama" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Name
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="nama"
                                        class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>
                            </div>

                            <div class="space-y-6 sm:space-y-5">
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                        Email </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="email"
                                            class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                            required>
                                    </div>
                                </div>

                                <div class="space-y-6 sm:space-y-5">
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="phone"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Phone
                                            Number </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input type="text" name="phone"
                                                class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                                required>
                                        </div>
                                    </div>

                                    <button type="submit" name="submit" value="ADD"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">ADD</button>
                </form>
            </div>
        </div>
        <!-- /End replace -->
    </div>
</div>