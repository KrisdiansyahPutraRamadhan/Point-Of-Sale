<?php
require_once("config.php");
if(!empty($_POST["update"])) {
	$pdo_statement=$pdo_conn->prepare("update giftcard set Giftcard_Number='" . $_POST[ 'Giftcard_Number' ] . "', Descriptions='" . $_POST[ 'Descriptions' ]. "', Value='" . $_POST[ 'Value' ]. "', Customer_Name='" . $_POST[ 'Customer_Name' ]. "' where Giftcard_Number=" . $_GET["Giftcard_Number"]);
  $result = $pdo_statement->execute();
  if($result) {
		echo "<script>window.location.href='index.php?page=giftcard'</script>";
	}
}
$pdo_statement = $pdo_conn->prepare("SELECT * FROM giftcard where Giftcard_Number=" . $_GET["Giftcard_Number"]);
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
                            <label for="Giftcard_Number"
                                class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Giftcard_Number
                            </label>
                            <div class="mt-1 sm:mt-0 sm:col-span-2">
                                <input type="text" name="Giftcard_Numberi" value="<?php echo $result[0]['id']; ?>"
                                    class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>
                        </div>

                        <div class="space-y-6 sm:space-y-5">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                <label for="Descriptions"
                                    class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Descriptions
                                </label>
                                <div class="mt-1 sm:mt-0 sm:col-span-2">
                                    <input type="text" name="Descriptions" value="<?php echo $result[0]['nama']; ?>"
                                        class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>
                            </div>

                            <div class="space-y-6 sm:space-y-5">
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                    <label for="Descriptions"
                                        class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Value </label>
                                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                                        <input type="text" name="Descriptions"
                                            value="<?php echo $result[0]['email']; ?>"
                                            class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                                            required>
                                    </div>
                                </div>

                                <div class="space-y-6 sm:space-y-5">
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                                        <label for="Customer_Nameame"
                                            class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                                            Customer_Name
                                        </label>
                                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                                            <input type="text" name="Customer_Name"
                                                value="<?php echo $result[0]['phone']; ?>"
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