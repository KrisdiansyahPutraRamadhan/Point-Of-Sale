<?php
require_once("config.php");
if(!empty($_POST["update"])) {
	$pdo_statement=$pdo_conn->prepare("update tbl_customers set person_id='" . $_POST[ 'person_id' ] . "', fullname='" . $_POST[ 'fullname' ] . "', phone_number='" . $_POST[ 'phone_number' ]. "', email='" . $_POST[ 'email' ]. "' where person_id=" . $_GET["person_id"]);
  $result = $pdo_statement->execute();
  if($result) {
		echo "<script>window.location.href='index.php?page=customers'</script>";
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM tbl_customers where person_id=" . $_GET["person_id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<form method="POST" class="w-full max-w-3/4 border-collapse border border-slate-50">
      <div class="pl-10 mb-7 bg-gray-50 flex flex-wrap py-3">
        <svg class="h-6 w-6 text-gray-700"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/>
        </svg>
        <h3 class="text-lg leading-6 font-medium text-gray-500">Customer Information</h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-400 pl-3">(Fields in red are required)</p>
      </div>

      <div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <a href="index.php?page=item-kits" class="text-2xl font-semibold text-gray-900">Edit Customer-</a>
        </div>
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 border-gray-200 rounded-lg h-96">
                <form action="" method="POST">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="person_id" value="<?php echo $result[0]['person_id']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" ">
                        <label for="person_id"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Person Id</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="fullname" value="<?php echo $result[0]['fullname']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="fullname"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Fullname</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="phone_number" value="<?php echo $result[0]['phone_number']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="phone_number"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone Number</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="email" name="email" value="<?php echo $result[0]['email']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required>
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                    </div>



            </div>

            <button type="submit" name="update" value="ADD"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>
        </form>