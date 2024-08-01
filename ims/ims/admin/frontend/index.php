  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="jsfiles/findcost.js"></script>
      <script src="jsfiles/gettype.js"></script>
      <script src="jsfiles/gettype1.js"></script>
      <script src="jsfiles/genqr.js"></script>
      <script src="jsfiles/qrcode.min.js"></script>
      <script src="jsfiles/insert.js"></script>
      <script src="jsfiles/gettype2.js"></script>
      <script src="jsfiles/genqr1.js"></script>
      <script src="jsfiles/session.js"></script>

      <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
      rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css" />
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          fontFamily: {
            sans: ["Roboto", "sans-serif"],
            body: ["Roboto", "sans-serif"],
            mono: ["ui-monospace", "monospace"],
          },
        },
        corePlugins: {
          preflight: false,
        },
      };
    </script>
  </head>
  <body>


    



      <style>
      .bluetxt{
          color:rgb(8, 49, 131);
      }
      .bgblue{
        background-color: rgb(8, 49, 131);
      }
      .blacktxt{
          color: black;
      }
    
      .ftype{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      }
      @media(min-width:641px){
      
      }
  </style>




  <section class="background-radial-gradient  lg:px-10">

<a href="logout.php">logout</a>
    <div class="px-6 py-12 text-center md:px-12 lg:text-left">

      <div class="w-100 mx-auto sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
        <div class="grid items-center gap-12 lg:grid-cols-2">
          <div class="mt-12 lg:mt-0">
            <h1 class="mt-0 mb-10 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl bluetxt">
              GEC<br /><span class="blacktxt">Inventory Managment System</span>
            </h1>
            <p class="pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur ipsum, eligendi culpa repudiandae vitae ut et accusantium beatae earum blanditiis rem at quasi rerum inventore maxime fuga, molestiae saepe iure.
            </p>
            <a class="mb-2 bgblue text-white inline-block rounded  px-12 pt-4 pb-3.5 text-sm font-medium uppercase leading-normal text-neutral-800 shadow-[0_4px_9px_-4px_#cbcbcb] transition duration-150 ease-in-out hover:bg-primary-100 hover:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:bg-primary focus:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] focus:outline-none focus:ring-0 active:bg-primary active:shadow-[0_8px_9px_-4px_rgba(203,203,203,0.3),0_4px_18px_0_rgba(203,203,203,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(251,251,251,0.3)] dark:hover:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:focus:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] dark:active:shadow-[0_8px_9px_-4px_rgba(251,251,251,0.1),0_4px_18px_0_rgba(251,251,251,0.05)] md:mr-2 md:mb-0"
              data-te-ripple-init data-te-ripple-color="light" href="#!" role="button">Get started</a>

          </div>

          <div class="mb-12 lg:mb-0">
            <img src="https://img.freepik.com/premium-photo/graphic-people-boxes-with-graph-top-it_655090-98611.jpg?w=740" class="furimg" alt="">

          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

<style>
   .bgimg{
    background:linear-gradient(to left,rgb(35, 50, 108),rgb(96, 68, 138));
   }
</style>

  <div class="container my-24 mx-auto md:px-6">
    <!-- Section: Design Block -->
    <section class="mb-32">
      <div class="relative h-[300px] bgimg overflow-hidden bg-cover bg-[50%] bg-no-repeat "></div>
      <div class="container px-6 md:px-12">
        <div
          class="block rounded-lg bg-[hsla(0,0%,100%,0.8)] px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,5%,0.7)] dark:shadow-black/20 md:py-16 md:px-12 -mt-[100px] backdrop-blur-[30px]">
          <div class="flex flex-wrap">
            <div class="mb-12 w-full shrink-0 grow-0 basis-auto md:px-3 lg:mb-0 lg:w-5/12 lg:px-6">
             
            <form id="myForm"  method="POST">
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <input type="date"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleInput90" placeholder="From" name="from_date" />
                  <label
                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    for="exampleInput90">From
                  </label>
                </div>
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <input type="date"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleInput90" placeholder="to" name="to_date" />
                  <label
                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    for="exampleInput90">To
                  </label>
                </div>
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <input type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleInput90" placeholder="department" name="dept"/>
                  <label
                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    for="exampleInput90">Department
                  </label>
                </div>
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <select id="type" name="type" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0">
                    <option value="">Select Type</option>
                  </select>
                  
                  <label class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
                    for="exampleInput91">
                  </label>
                </div>
                
              <!-- Add this dropdown for "demolish" attribute in your HTML form -->
  <select id="demolish" name="demolish" class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-primary data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0">
    <option value="">Select Demolish</option>
    <option value="none">none</option>
    <option value="Yes">Yes</option>
    <option value="all">All</option>

  </select>
  <label class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary"
    for="demolish">Demolish
  </label>

                <button type="submit" data-te-ripple-init data-te-ripple-color="light" value="submit"
                  class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] lg:mb-0">
                  Find Cost 
                </button>

              </form>
            </div>
            <div id="resultContainer"></div>
          </div>
        </div>
      </div>
    </section>



    <!-- Container for demo purpose -->
<div class="container my-24 mx-auto md:px-6">
  <!-- Section: Design Block -->
  <section class="mb-32 text-center">
    <h2 class="mb-12 pb-4 text-center text-3xl font-bold">
      Manange Inventory Type
    </h2>

    <div class="grid gap-6 lg:grid-cols-3 xl:gap-x-12">
      <div class="mb-6 lg:mb-0">
        <div
          class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="flex">
            <div
              class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
              data-te-ripple-init data-te-ripple-color="light">
              <img src="https://img.freepik.com/free-vector/creative-web-homepage-illustration_52683-79847.jpg?t=st=1696499703~exp=1696500303~hmac=893301537c3b8ba3c22ed8b01364d7b5a1edf3c3669f2dab5290a9bafb7fc10e" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                </div>
              </a>
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-3 text-lg font-bold">My paradise</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              <small>Published <u>13.01.2022</u> by
                <a href="#!">Anna Maria Doe</a></small>
            </p>
            <p class="mb-4 pb-2">
              Ut pretium ultricies dignissim. Sed sit amet mi eget urna
              placerat vulputate. Ut vulputate est non quam dignissim
              elementum. Donec a ullamcorper diam.
            </p>
            <a href="invtypes/create.html" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Add Type</a>
          </div>
        </div>
      </div>

      <div class="mb-6 lg:mb-0">
        <div
          class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="flex">
            <div
              class="relative  mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
              data-te-ripple-init data-te-ripple-color="light">
              <img src="https://img.freepik.com/premium-photo/software-update-concept-smartphone-laptop-table_102583-6287.jpg?w=826" class="w-full " />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                </div>
              </a>
            </div>
          </div>
          <div class="p-6 ">
            <h5 class="mb-3 text-lg font-bold">Travel to Italy</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              <small>Published <u>12.01.2022</u> by
                <a href="#!">Halley Frank</a></small>
            </p>
            <p class="mb-4 pb-2">
              Suspendisse in volutpat massa. Nulla facilisi. Sed aliquet
              diam orci, nec ornare metus semper sed. Integer volutpat
              ornare erat sit amet rutrum.
            </p>
            <a href="invtypes/update.html" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition
               duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 
               focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]
                dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                 dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
              Update</a>
          </div>
        </div>
      </div>

      <div class="mb-0">
        <div
          class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="flex">
            <div
              class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
              data-te-ripple-init data-te-ripple-color="light">
              <img src="https://img.freepik.com/free-photo/delete-cancel-cut-out-remove-erase-edit_53876-132168.jpg?w=826&t=st=1696507914~exp=1696508514~hmac=d3a5661a338550ea2816a46ee90fcb1f06281181a8061b37a041438a9373dcbf" class="w-full" />
              <a href="#!">
                <div
                  class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                </div>
              </a>
            </div>
          </div>
          <div class="p-6">
            <h5 class="mb-3 text-lg font-bold">Chasing the sun</h5>
            <p class="mb-4 text-neutral-500 dark:text-neutral-300">
              <small>Published <u>10.01.2022</u> by
                <a href="#!">Joe Svan</a></small>
            </p>
            <p class="mb-4 pb-2">
              Curabitur tristique, mi a mollis sagittis, metus felis mattis
              arcu, non vehicula nisl dui quis diam. Mauris ut risus eget
              massa volutpat feugiat. Donec.
            </p>
            <a href="invtypes/delete.html" data-te-ripple-init data-te-ripple-color="light"
              class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal 
              text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600
               hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
               focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] 
               dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]
                dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Delete </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Container for demo purpose --> 


<div class="flex items-center">
  <style>
      @media (min-width: 641px) {
          .qrform {
              height: 600px;
          }

          .qrsection {
              height: 600px;
          }
      }
  </style>
  <div class="container mx-auto p-6 lg:flex justify-center items-center">
     

          <!-- Insert Form -->
          <form class="p-6 rounded-lg justify-center items-center mx-auto" id="insertForm" method="POST">
              <!-- Form Inputs -->
              <div class="mb-4 lg:flex lg:justify-between">
                  <!-- Input 1: ID -->
                  <div class="lg:w-1/2 mb-4 lg:mb-0">
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
              <div class="mb-4">
                  <!-- Input 5: Type (Dropdown) -->
                  <label for="secondFormTypeDropdown" class="block text-gray-700 font-semibold mb-2">Type</label>
                  <select id="secondFormTypeDropdown" name="type" class="type w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:border-blue-500" required>
                      
                  </select>

              </div>
              <div class="mb-4">
                  <button type="button" onclick="generateQRCode()" class="bg-blue-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Generate QR Code</button>
              </div>
              <div class="mb-4">
                  <button type="submit" id="insertSubmitBtn" class="bg-green-500 text-white font-semibold px-4 py-2 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">Insert</button>
              </div>

          </form>

        

         
      </div>

      <!-- Right Side (QR Code) -->
      <div class="qrsection w-full lg:w-1/2 bg-gradient-to-r from-blue-500 to-purple-500 lg:flex lg:flex-col">
          <div id="qrcode" class="mx-auto lg:mt-32 md:mt-32 mt-6" style="width: 300px; height: 300px;"></div>
          <div class="mt-4 justify-center items-center flex">
              <button id="downloadLink" class="hidden bg-black text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600" onclick="downloadQRCode()">Download QR Code</button>
          </div>
          <div id="inscontainer"></div>
      </div>
  </div>
</div>

<script>
  // Show Insert Form
  document.getElementById("insertBtn").addEventListener("click", function () {
      hideAllForms();
      document.getElementById("insertForm").classList.remove("hidden");
  });

  
  // Hide All Forms
  function hideAllForms() {
      document.getElementById("insertForm").classList.add("hidden");
      document.getElementById("updateForm").classList.add("hidden");
      document.getElementById("deleteForm").classList.add("hidden");
  }
</script>



      <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>
  </body>
  </html>