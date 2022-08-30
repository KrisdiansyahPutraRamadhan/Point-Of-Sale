<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Point Of Sale</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body class="h-full">
<div>
  <div class="relative z-40 md:hidden" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75"></div>

    <div class="fixed inset-0 flex z-40">
      <div class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-indigo-700">
        <div class="absolute top-0 right-0 -mr-12 pt-2">
          <button type="button" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
            <span class="sr-only">Close sidebar</span>
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <div class="flex-shrink-0 flex items-center px-4">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-300-mark-white-text.svg" alt="Workflow">
        </div>
        <div class="mt-5 flex-1 h-0 overflow-y-auto">
          <nav class="px-2 space-y-1">
            <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-600" -->
            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/home -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/users -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              Customers
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/folder -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />  <polyline points="7 11 12 16 17 11" />  <line x1="12" y1="4" x2="12" y2="16" /></svg>
              Suppliers
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/calendar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="4" width="18" height="8" rx="3" />  <rect x="3" y="12" width="18" height="8" rx="3" />  <line x1="7" y1="8" x2="7" y2="8.01" />  <line x1="7" y1="16" x2="7" y2="16.01" /></svg>
              Items
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/inbox -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <rect x="2" y="2" width="20" height="8" rx="2" ry="2" />  <rect x="2" y="14" width="20" height="8" rx="2" ry="2" />  <line x1="6" y1="6" x2="6.01" y2="6" />  <line x1="6" y1="18" x2="6.01" y2="18" /></svg>
              Item Kits
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>
              </svg>
              Categories
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M3 21h4l13 -13a1.5 1.5 0 0 0 -4 -4l-13 13v4" />  <line x1="14.5" y1="5.5" x2="18.5" y2="9.5" />  <polyline points="12 8 7 3 3 7 8 12" />  <line x1="7" y1="8" x2="5.5" y2="9.5" />  <polyline points="16 12 21 17 17 21 12 16" />  <line x1="16" y1="17" x2="14.5" y2="18.5" /></svg>
              Manufacturers
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="5" y="3" width="14" height="18" rx="2" />  <line x1="9" y1="7" x2="15" y2="7" />  <line x1="9" y1="11" x2="15" y2="11" />  <line x1="9" y1="15" x2="13" y2="15" /></svg>
              Modifiers
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 3L20 12a1.5 1.5 0 0 1 0 2L14 20a1.5 1.5 0 0 1 -2 0L3 11v-4a4 4 0 0 1 4 -4h4" />  <circle cx="9" cy="9" r="2" /></svg>
              Tags
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="6" rx="2" />  <rect x="4" y="14" width="16" height="6" rx="2" /></svg>
              Attributes
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M11 3L20 12a1.5 1.5 0 0 1 0 2L14 20a1.5 1.5 0 0 1 -2 0L3 11v-4a4 4 0 0 1 4 -4h4" />  <circle cx="9" cy="9" r="2" /></svg>
              Price Rules
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
              </svg>
              Reports
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M19 18a3.5 3.5 0 0 0 0 -7h-1a5 4.5 0 0 0 -11 -2a4.6 4.4 0 0 0 -2.1 8.4" />  <line x1="12" y1="13" x2="12" y2="22" />  <polyline points="9 19 12 22 15 19" /></svg>
              Receiving
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="9" cy="19" r="2" />  <circle cx="17" cy="19" r="2" />  <path d="M3 3h2l2 12a3 3 0 0 0 3 2h7a3 3 0 0 0 3 -2l1 -7h-15.2" /></svg>
              Sales
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <circle cx="7" cy="17" r="2" />  <circle cx="17" cy="17" r="2" />  <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" /></svg>            
               Deliveries
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M7 10h3v-3l-3.5 -3.5a6 6 0 0 1 8 8l6 6a2 2 0 0 1 -3 3l-6-6a6 6 0 0 1 -8 -8l3.5 3.5" /></svg>           
              Work Orders
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="12" y1="1" x2="12" y2="23" />  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" /></svg>          
               Expenses
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="4" y="4" width="16" height="16" rx="2" />  <path d="M4 13h3l3 3h4l3 -3h3" /></svg>          
              Appointments
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <rect x="3" y="5" width="18" height="14" rx="3" />  <line x1="3" y1="10" x2="21" y2="10" />  <line x1="7" y1="15" x2="7.01" y2="15" />  <line x1="11" y1="15" x2="13" y2="15" /></svg>          
              Employees
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
              </svg>
              Gift Cards
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />  <circle cx="12" cy="12" r="3" /></svg>          
              Store Config
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="5 12 3 12 12 3 21 12 19 12" />  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>          
              Locations
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
              </svg>
              Messages
            </a>

            <a href="#" class="text-indigo-100 hover:bg-indigo-600 group flex items-center px-2 py-2 text-base font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg class="mr-4 flex-shrink-0 h-6 w-6 text-indigo-300"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18.36 6.64a9 9 0 1 1-12.73 0" />  <line x1="12" y1="2" x2="12" y2="12" /></svg>          
              Logout
            </a>
          </nav>
        </div>
      </div>

      <div class="flex-shrink-0 w-14" aria-hidden="true">
        <!-- Dummy element to force sidebar to shrink to fit close icon -->
      </div>
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <?php include('includes/sidebar.php');?>
  <div class="md:pl-64 flex flex-col flex-1">
    <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
      <button type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu-alt-2 -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
      </button>
      <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">
          <form class="w-full flex md:ml-0" action="#" method="GET">
            <label for="search-field" class="sr-only">Search</label>
            <div class="relative w-full text-gray-400 focus-within:text-gray-600">
              <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                <!-- Heroicon name: solid/search -->
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
              </div>
              <input id="search-field" class="block w-full h-full pl-8 pr-3 py-2 border-transparent text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-0 focus:border-transparent sm:text-sm" placeholder="Search" type="search" name="search">
            </div>
          </form>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
          <button type="button" class="bg-white p-1 rounded-full text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="sr-only">View notifications</span>
            <!-- Heroicon name: outline/bell -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="ml-3 relative">
            <div>
              <button type="button" class="max-w-xs bg-white flex items-center text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Open user menu</span>
                <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <main>
    <?php
  if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch ($page) {
      case 'registration':
        include "users/registration.php";
        break;
      case 'login':
        include "users/login.php";
        break;
      case 'dashboard':
        include "pages/dashboard/dashboard.php";
        break;
      case 'customers':
        include "pages/customers/customers.php";
        break;
      case 'suppliers':
        include "pages/suppliers/suppliers.php";
        break;
      case 'suppliers-create':
        include "pages/suppliers/suppliers-create.php";
        break;
      case 'suppliers-update':
        include "pages/suppliers/suppliers-update.php";
        break;
      case 'suppliers-delete':
        include "pages/suppliers/suppliers-delete.php";
        break;
      case 'items':
        include "pages/items/items.php";
        break;
      case 'item-kits':
        include "pages/item-kits/item-kits.php";
        break;
      case 'categories':
        include "pages/categories/categories.php";
        break;
      case 'manufacturers':
        include "pages/manufacturers/manufacturers.php";
        break;
      case 'modifiers':
        include "pages/modifiers/modifiers.php";
        break;
      case 'tags':
        include "pages/tags/tags.php";
        break;
      case 'attributes':
        include "pages/attributes/attributes.php";
        break;
      case 'price-rules':
        include "pages/price-rules/price-rules.php";
        break;
      case 'reports':
        include "pages/reports/reports.php";
        break;
      case 'receiving':
        include "pages/receiving/receiving.php";
        break;
      case 'sales':
        include "pages/sales/sales.php";
        break;
      case 'deliveries':
        include "pages/deliveries/deliveries.php";
        break;
      case 'work-orders':
        include "pages/work-orders/work-orders.php";
        break;
      case 'expenses':
        include "pages/expenses/expenses.php";
        break;
      case 'appointments':
        include "pages/appointments/appointments.php";
        break;
      case 'employees':
        include "pages/employees/employees.php";
        break;
      case 'gift-cards':
        include "pages/gift-cards/gift-cards.php";
        break;
      case 'store-config':
        include "pages/store-config/store-config.php";
        break;
      case 'locations':
        include "pages/locations/locations.php";
        break;
      case 'messages':
        include "pages/messages/messages.php";
        break;
    }
  }else{
    include "pages/dashboard/dashboard.php";
  }

  ?>
      
    </main>
  </div>
</div>
<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const page = urlParams.get('page')

    console.log(page);

    switch (page) {
        case "dashboard":
            document.getElementById("menu-dashboard").classList.add("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");        
            break;

        case "customers":
            document.getElementById("menu-customers").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "suppliers":
            document.getElementById("menu-suppliers").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "items":
            document.getElementById("menu-items").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "item-kits":
            document.getElementById("menu-item-kits").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "categories":
            document.getElementById("menu-categories").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-items-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "manufacturers":
            document.getElementById("menu-manufacturers").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "modifiers":
            document.getElementById("menu-modifiers").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "tags":
            document.getElementById("menu-tags").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "attributes":
            document.getElementById("menu-attributes").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "price-rules":
            document.getElementById("menu-price-rules").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "reports":
            document.getElementById("menu-reports").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "receiving":
            document.getElementById("menu-receiving").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "sales":
            document.getElementById("menu-sales").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "deliveries":
            document.getElementById("menu-deliveries").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "work-orders":
            document.getElementById("menu-work-orders").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "expenses":
            document.getElementById("menu-expenses").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "appointments":
            document.getElementById("menu-appointments").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "employees":
            document.getElementById("menu-employees").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "gift-cards":
            document.getElementById("menu-gift-cards").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "store-config":
            document.getElementById("menu-store-config").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "locations":
            document.getElementById("menu-locations").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");
            document.getElementById("menu-messages").classList.remove("bg-indigo-900");    
            break;

        case "messages":
            document.getElementById("menu-messages").classList.add("bg-indigo-900");
            document.getElementById("menu-dashboard").classList.remove("bg-indigo-900");
            document.getElementById("menu-customers").classList.remove("bg-indigo-900");
            document.getElementById("menu-suppliers").classList.remove("bg-indigo-900");
            document.getElementById("menu-item-kits").classList.remove("bg-indigo-900");
            document.getElementById("menu-categories").classList.remove("bg-indigo-900");
            document.getElementById("menu-manufacturers").classList.remove("bg-indigo-900");
            document.getElementById("menu-modifiers").classList.remove("bg-indigo-900");
            document.getElementById("menu-tags").classList.remove("bg-indigo-900");
            document.getElementById("menu-attributes").classList.remove("bg-indigo-900");
            document.getElementById("menu-price-rules").classList.remove("bg-indigo-900");
            document.getElementById("menu-reports").classList.remove("bg-indigo-900");
            document.getElementById("menu-receiving").classList.remove("bg-indigo-900");
            document.getElementById("menu-sales").classList.remove("bg-indigo-900");
            document.getElementById("menu-deliveries").classList.remove("bg-indigo-900");
            document.getElementById("menu-work-orders").classList.remove("bg-indigo-900");
            document.getElementById("menu-expenses").classList.remove("bg-indigo-900");
            document.getElementById("menu-appointments").classList.remove("bg-indigo-900");
            document.getElementById("menu-employees").classList.remove("bg-indigo-900");
            document.getElementById("menu-gift-cards").classList.remove("bg-indigo-900");
            document.getElementById("menu-store-config").classList.remove("bg-indigo-900");
            document.getElementById("menu-locations").classList.remove("bg-indigo-900");
            document.getElementById("menu-items").classList.remove("bg-indigo-900");    
            break;
        default:
            break;
    }

        
</script>
</body>
</html>