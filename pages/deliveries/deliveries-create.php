<?php

if(!empty($_POST["submit"])) {
	require_once("config.php");
	$sql = "INSERT INTO tbl_deliveries ( sale_id, status, fullname, address, delivery_employee, category) VALUES ( :sale_id, :status, :fullname, :address, :delivery_employee, :category)";
	$pdo_statement = $pdo_conn->prepare( $sql );
	$result = $pdo_statement->execute( array( ':sale_id'=>$_POST['sale_id'], ':status'=>$_POST['status'], ':fullname'=>$_POST['fullname'], ':address'=>$_POST['address'], ':delivery_employee'=>$_POST['delivery_employee'], ':category'=>$_POST['category'] ) );
	print_r($result);
  if($result >= 1 ){
    echo "<script>window.location.href='index.php?page=deliveries'</script>";
  } else {
    echo "Something Went Wrong!";
  }
}

?>
  
<form method="POST" class="w-full max-w-3/4 border-collapse border border-slate-50">
      <div class="pl-10 mb-7 bg-gray-50 flex flex-wrap py-3">
        <svg class="h-6 w-6 text-gray-700"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
        </svg>
        <h3 class="text-lg leading-6 font-medium text-gray-500">Deliveries Information</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-400 pl-3">(Fields in red are required)</p>
      </div>

      <div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <a href="index.php?page=deliveries" class="text-2xl font-semibold text-gray-900">Create Deliveries</a>
        </div>
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 border-gray-200 rounded-lg h-96">
                <form action="" method="POST">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="number" name="sale_id"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="sale_id"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sale ID</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="status"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="status"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Status</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="fullname"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="fullname"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fullname</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="address"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="address"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Address</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="delivery_employee"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="delivery_employee"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Delivery Employee</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="category"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="category"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category</label>
                    </div>


            </div>

            <button type="submit" name="submit" value="ADD"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>