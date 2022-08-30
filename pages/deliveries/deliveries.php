<?php
require_once("config.php");
?>
<?php	
	$pdo_statement = $pdo_conn->prepare("SELECT * FROM tbl_deliveries ORDER BY sale_id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>

<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-xl font-semibold text-gray-900">Deliveries</h1>
      <p class="mt-2 text-sm text-gray-700">Deliveries</p>
    </div>
    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
      <a href="index.php?page=deliveries-create">
        <button type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">New Deliveries</button>
      </a>
    </div>
  </div>
  <div class="mt-8 flex flex-col">
    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-50">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="whitespace-nowrap py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">SaleId</th>
                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Status</th>
                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Fullname</th></th>
                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Address</th>
                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Delivery Employee</th>
                <th scope="col" class="whitespace-nowrap px-2 py-3.5 text-left text-sm font-semibold text-gray-900">Category</th>
                <th scope="col" class="bg-gray-50 relative whitespace-nowrap py-3.5 pl-3 pr-4 sm:pr-6">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 bg-white">
            <?php
              if(!empty($result)) { 
              foreach($result as $row) {
              ?>
              <tr>
                <td class="whitespace-nowrap py-2 pl-4 pr-3 text-sm text-gray-500 sm:pl-6 text"><?php echo $row['sale_id'] ?></td>
                <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900"><?php echo $row['status'] ?></td>
                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-900"><?php echo $row['fullname'] ?></td>
                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500"><?php echo $row['address'] ?></td>
                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500"><?php echo $row['delivery_employee'] ?></td>
                <td class="whitespace-nowrap px-2 py-2 text-sm text-gray-500"><?php echo $row['category'] ?></td>
                <td class="relative whitespace-nowrap py-2 pr-4 text-right text-sm font-medium sm:pr-6 gap-2">
                  <a href="index.php?page=deliveries-update&sale_id=<?php echo $row['sale_id'] ?>">Edit</a>
                  <a href="index.php?page=deliveries-delete&sale_id=<?php echo $row['sale_id'] ?>" onclick="return confirm('do you want to delete this?')">Delete</a>
                </td>
              </tr>
              <?php } } ?>
              <!-- More transactions... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>