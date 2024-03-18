<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <link href="./src/output.css" rel="stylesheet" />
</head>

<body class="text-gray-800 font-inter">


  <?php include 'sidebar.php' ?>

  <!-- start: Main -->
  <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
    <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
      <button type="button" class="text-lg text-gray-600 sidebar-toggle">
        <i class="ri-menu-line"></i>
      </button>
      <ul class="flex items-center text-sm ml-4">
        <li class="mr-2">
          <a class="text-base text-black font-bold">Reports</a>
        </li>
      </ul>
      <ul class="ml-auto flex items-center">
        <li class="dropdown ml-3">
          <button type="button" class="dropdown-toggle flex items-center">
            <img src="https://placehold.co/32x32" alt="" class="w-8 h-8 rounded block object-cover align-middle" />
          </button>
          <ul
            class="dropdown-menu shadow-md shadow-black/5 z-30 hidden py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]">
            <li>
              <a href="#"
                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Profile</a>
            </li>
            <li>
              <a href="#"
                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Settings</a>
            </li>
            <li>
              <a href="#"
                class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-blue-500 hover:bg-gray-50">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- chart -->

    <div class="p-6">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-6"></div>
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
          <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Training Statiscics</div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mb-4">
            <div class="rounded-md border border-dashed border-gray-200 p-4">
              <div class="flex items-center mb-0.5">
                <div class="text-xl font-semibold">10</div>
              </div>
              <span class="text-gray-400 text-sm">Female</span>
            </div>
            <div class="rounded-md border border-dashed border-gray-200 p-4">
              <div class="flex items-center mb-0.5">
                <div class="text-xl font-semibold">50</div>
              </div>
              <span class="text-gray-400 text-sm">Male</span>
            </div>
            <div class="rounded-md border border-dashed border-gray-200 p-4">
              <div class="flex items-center mb-0.5">
                <div class="text-xl font-semibold">60</div>
              </div>
              <span class="text-gray-400 text-sm">Total Participants</span>
            </div>
          </div>
          <div>
            <canvas id="order-chart"></canvas>
          </div>
        </div>
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
          <div class="flex justify-between mb-4 items-start">
            <div class="font-medium">Print PDF</div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- end: Main -->

  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="./src/dashboard.js"></script>
</body>

</html>