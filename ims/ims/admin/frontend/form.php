<h1 class="text-2xl pt-14 font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Insert Inventory Information</h1>

<p class="max-w-2xl mx-auto my-6 text-center text-gray-500 dark:text-gray-300">
</p>
<div class="w-full lg:px-14 px-4 lg:flex  items-center">
 
  <div class="w-full mx-auto lg:p-6 lg:flex justify-center items-center">
     

          <!-- Insert Form -->
          <form class="lg:p-6 p-2 bg-blue-300 rounded-lg justify-center items-center mx-auto" id="insertForm" method="POST">
              <!-- Form Inputs -->
              <div class="mb-4 lg:flex lg:justify-between">
                  <!-- Input 1: ID -->
                  <div class="lg:w-full mb-4 lg:mb-0">
                      <label for="id" class="block text-gray-700 font-semibold mb-2">ID</label>
                      <input type="text" id="id" name="item_id" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="ID" required>
                  </div>
                  <!-- Input 2: Price -->
                  <div class="lg:w-1/2 lg:pl-2">
                      <label for="price" class="block text-gray-700 font-semibold mb-2">Price</label>
                      <input type="number" id="price" name="price" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Price" required>
                  </div>
              </div>
              <div class="mb-4 lg:flex lg:justify-between">
                  <!-- Input 3: Department -->
                  <div class="lg:w-1/2 mb-4 lg:mb-0">
                      <label for="department" class="block text-gray-700 font-semibold mb-2">Department</label>
                      <input type="text" id="department" name="dept" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" placeholder="Department" required>
                  </div>
                  <!-- Input 4: Date -->
                  <div class="lg:w-1/2 lg:pl-2">
                      <label for="date" class="block text-gray-700 font-semibold mb-2">Date</label>
                      <input type="date" id="date" name="date" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" required>
                  </div>
              </div>
              <div class="w-full">
                      <label for="serial number" class="block text-gray-700 font-semibold mb-2">Serail Num</label>
                      <input type="text" id="serialnum" name="serialnum" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" required>
                  </div>
              <div class="mb-4">
                  <!-- Input 5: Type (Dropdown) -->
                  <label for="secondFormTypeDropdown" class="block text-gray-700 font-semibold mb-2">Type</label>
                  <select id="secondFormTypeDropdown" name="type" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" required>
                      
                  </select>

              </div>
              <div class="mb-4">
                  <button type="button" onclick="generateQRCode()" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Generate QR Code</button>
              </div>
              <div class="mb-4">
                  <button type="submit" id="insertSubmitBtn" class="bg-green-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Insert</button>
              </div>
<div class="flex">
<a href="update.html"><p class="p-2 text-black">Update</p></a>
<a href="delete.html"><p class="p-2 text-black">delete</p></a>
</div>
          </form>

        

         
      </div>

      <!-- Right Side (QR Code) -->
      <div class="qrsection lg:pb-14 w-full lg:w-full lg:flex lg:flex-col" >
          <div id="qrcode" class="mx-auto lg:mt-32 md:mt-32 mt-6" style="width: 300px; height: 300px;"></div>
          <div class="mt-4 justify-center items-center flex">
              <button id="downloadLink" class="hidden bg-black text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600" onclick="downloadQRCode()">Download QR Code</button>
          </div>
          <div id="inscontainer"></div>
      </div>
  </div>
</div>

