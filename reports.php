<?php
include 'DBconn.php';
$conn = connect_to_database();


?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>
  <link href="./src/output.css" rel="stylesheet" />
</head>

<body class="text-gray-800 font-inter">
  <!-- start: Sidebar -->
  <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 z-50 sidebar-menu transition-transform">
    <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
      <img src="./assets/1.png" alt="" class="w-8 h-8 rounded object-cover" />
      <span class="text-lg font-bold text-white ml-3">DOST CSFS</span>
    </a>
    <ul class="mt-4">
      <li class="mb-1 group">
        <a href="./dashboard.php"
          class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
          <i class="ri-home-2-line mr-3 text-lg"></i>
          <span class="text-sm">Dashboard</span>
        </a>
      </li>

      <li class="mb-1 group">
        <a href="./forms.php"
          class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
          <i class="ri-survey-line mr-3 text-lg"></i>
          <span class="text-sm">Forms</span>
        </a>
      </li>

      <li class="mb-1 group active">
        <a href="#"
          class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
          <i class="ri-settings-2-line mr-3 text-lg"></i>
          <span class="text-sm">Reports</span>
        </a>
      </li>
    </ul>
  </div>
  <div class="fixed top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div>
  <!-- end: Sidebar -->

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
                <span
                  class="p-1 rounded text-[12px] font-semibold bg-blue-500/10 text-blue-500 leading-none ml-1">$80</span>
              </div>
              <span class="text-gray-400 text-sm">Active</span>
            </div>
            <div class="rounded-md border border-dashed border-gray-200 p-4">
              <div class="flex items-center mb-0.5">
                <div class="text-xl font-semibold">50</div>
                <span
                  class="p-1 rounded text-[12px] font-semibold bg-emerald-500/10 text-emerald-500 leading-none ml-1">+$469</span>
              </div>
              <span class="text-gray-400 text-sm">Completed</span>
            </div>
            <div class="rounded-md border border-dashed border-gray-200 p-4">
              <div class="flex items-center mb-0.5">
                <div class="text-xl font-semibold"></div>
                <span
                  class="p-1 rounded text-[12px] font-semibold bg-rose-500/10 text-rose-500 leading-none ml-1">-$130</span>
              </div>
              <span class="text-gray-400 text-sm">Total</span>
            </div>
          </div>
          <div>
            <canvas id="order-chart"></canvas>
          </div>
        </div>
        <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md">
          <div class="flex justify-center mb-4 items-start">
            <!-- DATE PICKER INPUT -->
            <form method="post">
              <div class="flex flex-col space-y-4">
                <!-- Start Date Picker -->
                <label for="start_date" class="block">Start Date:</label>
                <input type="date" id="start_date" name="start_date"
                  class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">

                <!-- End Date Picker -->
                <label for="end_date" class="block">End Date:</label>
                <input type="date" id="end_date" name="end_date"
                  class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">

                <!-- Service Input Field -->
                <label for="service" class="block">Service:</label>
                <input type="text" id="service" name="service"
                  class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">

                <!-- Training Name Input Field -->
                <label for="training_name" class="block">Training Name:</label>
                <input type="text" id="training_name" name="training_name"
                  class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">

                <!-- Submit Button -->
                <button type="submit"
                  class="bg-blue-500 text-Black px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-dashed focus:bg-blue-600">SEARCH</button>
              </div>
            </form>

            <!-- printview
            <button id="exportButton">View PDF</button> -->
          </div>
         <!-- DATA RETURNED FROM SEARCH -->
          <?php          
  
          if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get the start date, end date, service, and training name from user input
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $service = $_POST['service'];
            $training_name = $_POST['training_name'];

            // Query to retrieve general information based on date range, service, and training name
            $sql = "SELECT COUNT(DISTINCT service) AS total_services,
                 COUNT(DISTINCT training_name) AS total_training_names,
                 COUNT(DISTINCT company) AS total_companies,
                 COUNT(DISTINCT sector) AS total_sectors,
                 SUM(CASE WHEN returning_customer = 'yes' THEN 1 ELSE 0 END) AS returning_customers,
                 SUM(CASE WHEN returning_customer = 'no' THEN 1 ELSE 0 END) AS first_time_customers
          FROM data
          WHERE date BETWEEN '$start_date' AND '$end_date'
          AND service = '$service'
          AND training_name = '$training_name'";

            $result = $conn->query($sql);
            // Check if the query was successful
            if ($result) {
              // Fetch the result
              $row = $result->fetch_assoc();
              // Get the general information
              $total_services = $row['total_services'];
              $total_training_names = $row['total_training_names'];
              $total_companies = $row['total_companies'];
              $total_sectors = $row['total_sectors'];
              $returning_customers = $row['returning_customers'];
              $first_time_customers = $row['first_time_customers'];

              // Output the general information
              echo "Service: " . $service."<br>";
              echo "Training: ". $training_name."<br>";
              echo "Total Services: " . $total_services . "<br>";
              echo "Total Training Names: " . $total_training_names . "<br>";
              echo "Total Companies: " . $total_companies . "<br>";
              echo "Total Sectors: " . $total_sectors . "<br>";
              echo "Returning Clients: " . $returning_customers . "<br>";
              echo "First Time Clients: " . $first_time_customers . "<br>";
            } else {
              // Handle the case where the query fails
              echo "Error: " . $conn->error;
            }
          }
          ?>
        </div>
      </div>
    </div>
  </main>
  <!-- end: Main -->

  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="./src/dashboard.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
  <script>
    document.getElementById('exportButton').addEventListener('click', function () {
      window.location.href = 'printPage.php';

    });

  </script>


</body>

</html>










<!-- EVERYTHING YOU LOSE IS A STEP YOU TAKE -->