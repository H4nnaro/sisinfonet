<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Google Drive</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
  </head>
  <body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
      <div class="flex items-center justify-between px-4 py-2">
        <!-- Menu Button (Mobile) -->
        <button
          id="menuBtn"
          class="lg:hidden text-gray-700 focus:outline-none"
          onclick="toggleSidebar()"
        >
          <span class="material-icons">menu</span>
        </button>

        <div class="flex items-center gap-4">
        <span class="text-gray-700 text-lg font-semibold">Google Drive</span>
        <div class="relative hidden sm:block">
            <span class="material-icons absolute left-2 top-1/2 -translate-y-1/2 text-gray-500">search</span>
            <input
            type="search"
            id="search-drive"
            placeholder="Search-Drive"
            class="pl-10 pr-4 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 w-full max-w-[500px]"
            oninput="searchFiles()"
            />
        </div>
        </div>
        <div class="flex items-center gap-4">
          <span id="toggleAppsMenu" class="material-icons text-gray-600 cursor-pointer">apps</span>
          <span class="material-icons text-gray-600 cursor-pointer">notifications</span>
          <img src="Profile.jpg" alt="profile pic" class="w-8 h-8 rounded-full" />
        </div>
      </div>
    </nav>

    <!-- Sidebar -->
    <aside
      id="sidebar"
      class="fixed left-0 top-[4rem] lg:top-[4rem] h-[calc(100vh-4rem)] w-64 bg-white shadow-md transform -translate-x-full lg:translate-x-0 transition-transform duration-200 ease-in-out z-30"
    >
      <ul class="space-y-2 px-4">
        <!-- New Button for All Screen Sizes -->
        <li class="mt-4">
          <button class="bg-blue-600 text-white px-4 py-1 rounded hover:bg-blue-700 w-full">New</button>
        </li>
        <li class="font-semibold text-blue-600 flex items-center gap-2">
          <span class="material-icons">dashboard</span>My Drive
        </li>
        <!-- <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">devices</span>Computers
        </li> -->
        <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">people</span>Shared with me
        </li>
        <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">access_time</span>Recent
        </li>
        <!-- <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">camera</span>Google Photos
        </li> -->
        <!-- <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">star</span>Starred
        </li>
        <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">delete</span>Trash
        </li>
        <hr class="my-2" />
        <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">cloud</span>Backup
        </li>
        <hr class="my-2" />
        <li class="flex items-center gap-2 text-gray-700 hover:text-blue-600">
          <span class="material-icons">storage</span>Upgrade Storage
        </li> -->
      </ul>
    </aside>

    <!-- Main Content -->
<main
  id="mainContent"
  class="pt-3 px-6 transition-all duration-300 ease-in-out ml-0 lg:ml-64"
>
  <p class="text-gray-700 text-lg font-semibold mb-4">Folders</p>
  <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
    
    <!-- Folder Card -->
    <div class="relative bg-white p-4 rounded-2xl shadow hover:shadow-md transition duration-300 flex flex-col items-center justify-center text-center">
      
      <!-- Menu Button -->
      <button
        class="absolute top-2 right-2 text-gray-500 hover:text-gray-700"
        onclick="toggleMenu(this)"
      >
        <span class="material-icons">more_vert</span>
      </button>

        <!-- Dropdown Menu -->
        <div class="absolute top-10 right-2 bg-white rounded-lg shadow-xl hidden z-20 flex flex-col items-center gap-1 p-2">
        <button class="group text-blue-500 hover:bg-blue-100 p-2 rounded-full transition duration-200">
            <span class="material-icons text-base group-hover:text-blue-700">visibility</span>
        </button>
        <button class="group text-yellow-500 hover:bg-yellow-100 p-2 rounded-full transition duration-200">
            <span class="material-icons text-base group-hover:text-yellow-700">edit</span>
        </button>
        <button class="group text-red-500 hover:bg-red-100 p-2 rounded-full transition duration-200">
            <span class="material-icons text-base group-hover:text-red-700">delete</span>
        </button>
        <button class="group text-green-500 hover:bg-green-100 p-2 rounded-full transition duration-200">
            <span class="material-icons text-base group-hover:text-green-700">download</span>
        </button>
        </div>

      <!-- Folder Icon -->
      <span class="material-icons text-yellow-500 text-6xl mb-2">folder</span>

      <!-- Folder Info -->
      <p class="text-sm font-semibold text-gray-700">Folder Name</p>
      <p class="text-xs text-gray-500">Some details</p>
    </div>
    <!-- CARD FILE -->
<div class="relative bg-white p-4 rounded-2xl shadow hover:shadow-md transition duration-300 flex flex-col items-center justify-center text-center">

  <!-- Menu Button -->
  <button
    class="absolute top-2 right-2 text-gray-500 hover:text-gray-700"
    onclick="toggleMenu(this)"
  >
    <span class="material-icons">more_vert</span>
  </button>

  <!-- Dropdown Menu -->
  <div class="absolute top-10 right-2 bg-white rounded-lg shadow-xl hidden z-20 flex flex-col items-center gap-1 p-2">
    <button onclick="openModal('viewModal')" class="group text-blue-500 hover:bg-blue-100 p-2 rounded-full transition duration-200">
      <span class="material-icons text-base group-hover:text-blue-700">visibility</span>
    </button>
    <button onclick="openModal('editModal')" class="group text-yellow-500 hover:bg-yellow-100 p-2 rounded-full transition duration-200">
      <span class="material-icons text-base group-hover:text-yellow-700">edit</span>
    </button>
    <button onclick="openModal('deleteModal')" class="group text-red-500 hover:bg-red-100 p-2 rounded-full transition duration-200">
      <span class="material-icons text-base group-hover:text-red-700">delete</span>
    </button>
    <button onclick="openModal('downloadModal')" class="group text-green-500 hover:bg-green-100 p-2 rounded-full transition duration-200">
      <span class="material-icons text-base group-hover:text-green-700">download</span>
    </button>
  </div>

  <!-- File Icon -->
  <span class="material-icons text-blue-500 text-6xl mb-2">description</span>

  <!-- File Info -->
  <p class="text-sm font-semibold text-gray-700 truncate w-full">Document_Name.pdf</p>
  <p class="text-xs text-gray-500">PDF File · 1.2 MB</p>
</div>

  </div>
</main>

<!-- Modal Template -->
<div id="viewModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl p-6 w-80 text-center relative">
    <button onclick="closeModal('viewModal')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
      <span class="material-icons">close</span>
    </button>
    <h2 class="text-lg font-semibold mb-2">Lihat File</h2>
    <p class="text-sm text-gray-600">Menampilkan detail file di sini.</p>
  </div>
</div>

<div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl p-6 w-80 text-center relative">
    <button onclick="closeModal('editModal')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
      <span class="material-icons">close</span>
    </button>
    <h2 class="text-lg font-semibold mb-2">Edit File</h2>
    <p class="text-sm text-gray-600">Form edit atau pengaturan file.</p>
  </div>
</div>

<div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl p-6 w-80 text-center relative">
    <button onclick="closeModal('deleteModal')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
      <span class="material-icons">close</span>
    </button>
    <h2 class="text-lg font-semibold mb-2">Hapus File</h2>
    <p class="text-sm text-gray-600">Apakah kamu yakin ingin menghapus file ini?</p>
  </div>
</div>

<div id="downloadModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl p-6 w-80 text-center relative">
    <button onclick="closeModal('downloadModal')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
      <span class="material-icons">close</span>
    </button>
    <h2 class="text-lg font-semibold mb-2">Download File</h2>
    <p class="text-sm text-gray-600">File akan segera diunduh...</p>
  </div>
</div>

<script>
  function toggleMenu(button) {
    const menu = button.nextElementSibling;
    document.querySelectorAll('.absolute.top-10.right-2').forEach(el => {
      if (el !== menu) el.classList.add('hidden');
    });
    menu.classList.toggle('hidden');
  }

  function openModal(id) {
    document.getElementById(id).classList.remove('hidden');
  }

  function closeModal(id) {
    document.getElementById(id).classList.add('hidden');
  }

  // Optional: Close modal if clicked outside content
  window.addEventListener('click', function (e) {
    document.querySelectorAll('.fixed.inset-0').forEach(modal => {
      if (!modal.classList.contains('hidden') && e.target === modal) {
        modal.classList.add('hidden');
      }
    });
  });
</script>

<!-- Toggle Script -->
<script>
  function toggleMenu(button) {
    const menu = button.nextElementSibling;
    const allMenus = document.querySelectorAll('.absolute.top-10.right-2.w-40');
    allMenus.forEach(m => {
      if (m !== menu) m.classList.add('hidden');
    });
    menu.classList.toggle('hidden');
    document.addEventListener('click', function handler(e) {
      if (!button.contains(e.target) && !menu.contains(e.target)) {
        menu.classList.add('hidden');
        document.removeEventListener('click', handler);
      }
    });
  }
</script>

    <script>
      function toggleSidebar() {
        const sidebar = document.getElementById("sidebar");
        const mainContent = document.getElementById("mainContent");

        sidebar.classList.toggle("-translate-x-full");

        // Menggeser konten utama saat sidebar muncul pada mobile
        if (!sidebar.classList.contains("-translate-x-full")) {
          mainContent.classList.add("ml-64");  // Menambahkan margin kiri ke konten
        } else {
          mainContent.classList.remove("ml-64");  // Menghapus margin kiri
        }
      }
    </script>
    <script>
    function searchFiles() {
        const searchTerm = document.getElementById('search-drive').value.toLowerCase();
        // Implement your search logic here
        console.log("Searching for:", searchTerm);
        
        // Contoh logika pencarian di dalam array (Anda bisa menggantinya dengan data sebenarnya)
        const files = ['file1.txt', 'file2.doc', 'image.jpg']; // ganti dengan data file Anda
        const filteredFiles = files.filter(file => file.toLowerCase().includes(searchTerm));
        
        console.log('Filtered Files:', filteredFiles); // Menampilkan hasil pencarian
    }
    </script>

  <script>
    const toggleAppsBtn = document.getElementById('toggleAppsMenu');
    const appsMenu = document.getElementById('appsMenu');
    const overlay = document.getElementById('overlay');

    const toggleSidebarBtn = document.getElementById('toggleSidebar');
    const closeSidebarBtn = document.getElementById('closeSidebar');
    const sidebar = document.getElementById('sidebar');

    const openSearchPopup = document.getElementById('openSearchPopup');
    const closeSearchPopup = document.getElementById('closeSearchPopup');
    const searchPopup = document.getElementById('searchPopup');

    // Apps Menu
    toggleAppsBtn.addEventListener('click', () => {
      appsMenu.classList.toggle('hidden');
    });

    window.addEventListener('click', function(e) {
      if (!toggleAppsBtn.contains(e.target) && !appsMenu.contains(e.target)) {
        appsMenu.classList.add('hidden');
      }
    });

    // Sidebar toggle
    toggleSidebarBtn.addEventListener('click', () => {
      sidebar.classList.remove('-translate-x-full');
      overlay.classList.remove('hidden');
    });

    closeSidebarBtn.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });

    overlay.addEventListener('click', () => {
      sidebar.classList.add('-translate-x-full');
      overlay.classList.add('hidden');
    });

    // Search popup
    openSearchPopup.addEventListener('click', () => {
      searchPopup.classList.remove('hidden');
      searchPopup.classList.add('flex');
    });

    closeSearchPopup.addEventListener('click', () => {
      searchPopup.classList.add('hidden');
      searchPopup.classList.remove('flex');
    });
  </script>
  </body>
</html>
