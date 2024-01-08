<div>
<div class="flex h-screen border">
  <!-- Side Navigation -->
  <div class="lg:drawer lg:drawer-open">
   
    <div class="drawer-content">
      <div class="drawer-side">
        <label for="my-drawer-2" aria-label="close sidebar" class="drawer-overlay"></label> 
        <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
          <!-- Your side navigation content goes here -->
          <div>
            <h1 class="text-xl font-bold">Welcome John Doe</h1>
            <div class="mt-20">
              <h1 class="text-sm text-[#ADACB0]">Tasks Group</h1>
              <h1 class="mt-2 text-sm hover:text-blue-900 font-semibold cursor-pointer">Urgent Tasks</h1>
              <h1 class="mt-2 text-sm hover:text-blue-900 font-semibold cursor-pointer">Social</h1>
              <h1 class="mt-2 text-sm hover:text-blue-900 font-semibold cursor-pointer">Files</h1>
              <h1 class="mt-2 text-sm hover:text-blue-900 font-semibold cursor-pointer">Invoices</h1>
              <h1 class="mt-2 text-sm hover:text-blue-900 font-semibold cursor-pointer">Forms</h1>
              <button class="btn btn-outline">+ New group</button>
            </div>
          </div>
        </ul>
      </div>
    </div>
  </div>

  <!-- Content Beside Side Navigation -->
  <div class="flex flex-col items-start justify-start p-4 bg-gray-100 flex-grow">
    <div class="flex justify-between w-full mb-4 group relative">
      <!-- Social and Navbar on the left -->
      <div class="flex items-center">
        <h1 class="text-lg font-semibold mr-4">Social</h1>
        <!-- Additional Navbar elements can be added here -->
      </div>

      <!-- Search and Image on the right with added spacing -->
      <div class="flex items-center space-x-4">
        <h1>Search</h1>
        <h1>Image</h1>
      </div>
    </div>
    <div class="flex mt-5 group-hover:border-blue-500">
      <button class="btn btn-outline mr-2">To do</button>
      <button class="btn active:btn-outline-blue-500">
        <span class="bg-[#1751D0] p-[3px] text-white m-1">44</span> Done
      </button>
      <div class="ml-auto flex space-x-2 opacity-0 group-hover:opacity-100">
        <button class="btn btn-outline-blue-500">Edit</button>
        <button class="btn btn-outline-blue-500">Delete</button>
      </div>
    </div>
    <h1 class="text-sm text-[#ADACB0] mt-10">Tasks </h1>
    <div class="mt-5 flex items-center border-b pb-5 group-hover:border-blue-500">
      <input type="checkbox" class="checkbox" />
      <div class="flex flex-col ml-4">
        <div class="flex items-center">
          <h1 class="text-lg font-bold">Update user flows with UX feedback from Session #245</h1>
          <button class="btn bg-[#ADACB0] text-xs ml-1">Group name</button>
          <button class="btn bg-[#ADACB0] text-xs ml-5">Edit</button>
          <button class="btn bg-[#ADACB0] text-xs ml-1">Delete</button>
        </div>
        <input type="text" placeholder="Here Task Description" class="input input-bordered w-full mt-2 max-w-xs" />
      </div>
      
    </div>
    <div>
      <input type="text" placeholder="New Task" class="input input-bordered m-2 w-1/4" />
      <select class="select select-bordered join-item">
        <option disabled selected>Select Group</option>
        <option>Group 1</option>
        <option>Group 2</option>
        <option>Group 3</option>
        <option>Group 4</option>
        <option>Group 5</option>
        <option>Group 6</option>
      </select>
      <button class="btn border">Urgent</button>
      <div class="relative inline-block w-6 ml-2 align-middle select-none transition transform duration-200 ease-in">
        <input type="checkbox" id="toggle" name="toggle" class="toggle-checkbox absolute block w-4 h-4 rounded-full bg-white border-2 appearance-none cursor-pointer" />
        <label for="toggle" class="toggle-label block overflow-hidden h-4 rounded-full bg-gray-300 border cursor-pointer"></label>
      </div>
      <button class="btn btn-active btn-primary">Create Task</button>
    </div>
    <!-- Your additional content goes here -->
  </div>
</div>
