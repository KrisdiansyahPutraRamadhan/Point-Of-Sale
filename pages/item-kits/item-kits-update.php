<?php
require_once("config.php");
if(!empty($_POST["update"])) {
	$pdo_statement=$pdo_conn->prepare("update itemkits set id='" . $_POST[ 'id' ] . "', product='" . $_POST[ 'product' ]. "', category='" . $_POST[ 'category' ]. "', cost_price='" . $_POST[ 'cost_price' ]. "', selling_price='" . $_POST[ 'selling_price' ]. "' where id=" . $_GET["id"]);
  $result = $pdo_statement->execute();
  if($result) {
		echo "<script>window.location.href='index.php?page=item-kits'</script>";
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM itemkits where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <a href="index.php?page=item-kits" class="text-2xl font-semibold text-gray-900">Add Item Kits</a>
        </div>
        <div class="py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8 border-gray-200 rounded-lg h-96">
                <form action="" method="POST">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="id" value="<?php echo $result[0]['id']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required="">
                        <label for="id"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ID</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="product" value="<?php echo $result[0]['product']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required="">
                        <label for="product"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="category" value="<?php echo $result[0]['category']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required="">
                        <label for="category"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Category</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="cost_price" value="<?php echo $result[0]['cost_price']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required="">
                        <label for="cost_price"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cost
                            Price</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="selling_price" value="<?php echo $result[0]['selling_price']; ?>"
                            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                            placeholder=" " required="">
                        <label for="selling_price"
                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Selling
                            Price</label>
                    </div>


            </div>

            <button type="submit" name="submit" value="ADD"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-indigo-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
            </form>
        </div>
    </div>
</div>
</div>