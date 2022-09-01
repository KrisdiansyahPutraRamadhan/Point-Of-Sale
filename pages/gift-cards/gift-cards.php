<?php
require_once('config.php');
?>
<?php
$pdo_statement = $pdo_conn->prepare("SELECT * FROM giftcard ORDER BY Giftcard_Number DESC");
$pdo_statement->execute();
$result = $pdo_statement->fetchALL();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Card</title>
</head>

<body>
    <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-xl font-semibold text-gray-900">Gift cards</h1>
                    </div>
                    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none"> <a type="button"
                            class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                            href="index.php?page=giftcard-create">Add card</a> </div>
                </div>
                <div class="mt-8 flex flex-col">
                    <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                            <div class="relative overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                                <!-- Selected row actions, only show when rows are selected. -->
                                <table class="min-w-full table-fixed divide-y divide-gray-300">
                                    <thead class="bg-gray-50">
                                        <tr>

                                            <th scope="col"
                                                class="min-w-[7rem] px-3 py-4 text-left text-sm font-semibold text-gray-900">
                                                Giftcard Number</th>
                                            <th scope="col"
                                                class="min-w-[12rem] py-3.5 pr-3 text-left text-sm font-semibold text-gray-900">
                                                Descriptions</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Value</th>
                                            <th scope="col"
                                                class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                                Customer Name</th>
                                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Edit</span>
                                            <th scope="col" class="min-w-[5 rem] relative py-3.5 pl-3 pr-4 sm:pr-6">
                                                <span class="sr-only">Delete</span>
                                            </th>

                                        </tr>

                                    </thead>
                                    <tbody class="divide-y divide-gray-200 bg-white">
                                        <!-- Selected: "bg-gray-50" -->
                                        <?php
                              if(!empty($result)) { 
                                foreach($result as $row) {
                              ?>
                                        <tr>

                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <?php echo $row['Giftcard_Number'] ?></td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <?php echo $row['Descriptions'] ?></td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <?php echo $row['Value'] ?></td>
                                            <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                                <?php echo $row['Customer_Name'] ?></td>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                <a
                                                    href="index.php?page=giftcard-edit&Giftcard_Number=<?php echo $row['Giftcard_Number'] ?>">Edit</a>
                                            <td
                                                class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                                <a
                                                    href='index.php?page=giftcard-delete&Giftcard_Number=<?php echo $row['Giftcard_Number']; ?>'>Delete</a>
                                            </td>
                                        </tr>
                                        <?php } } ?>
                                        </tr>
                                        <!-- More people... -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>