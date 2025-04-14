  <!-- Announcement Banner -->
  <div class="bg-[var(--primary-color)]">
    <div class="max-w-7xl mx-auto text-center text-white py-4 px-4 sm:px-6 lg:px-8 relative">
        <p class="text-sm sm:text-base">
            Discover the best deals today! Shop now and save big.
        </p>
        <button type="button" class="absolute right-4 sm:right-10 top-1/2 transform -translate-y-1/2 btn-primary rounded-md p-2">
            <i class="fa-solid fa-xmark"></i>
        </button>
    </div>
</div>

<!-- Navbar -->
<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <img class="h-12 w-auto" src="https://codeit.com.np/asset/img/codeitlogo.webp" alt="Logo">
            </div>

            <!-- Desktop Search & Compare -->
            <div class="hidden sm:flex sm:items-center sm:space-x-4 sm:flex-1 justify-center">
                <!-- Search Input -->
                <form action="" method="GET" class="relative w-full max-w-md">
                    <input 
                        type="search" 
                        name="search" 
                        class="block w-full pl-4 pr-4 py-2 border border-gray-300 rounded-full focus:ring-[var(--primary-color)] focus:border-[var(--primary-color)] sm:text-sm placeholder-gray-400 shadow-sm" 
                        placeholder="Search products..."
                    >
                </form>

                <!-- Compare Button with Icon -->
                <button type="button" class="btn-secondary flex items-center gap-2 px-4 py-2 rounded-md text-sm font-medium">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Compare
                </button>
            </div>

            <!-- Auth Buttons & Mobile Toggle -->
            <div class="flex items-center space-x-2">
                <a href="" class="btn-primary rounded-md px-4 py-2 text-sm font-medium hidden sm:block">Sign In</a>
                <a href="" class="btn-secondary rounded-md px-4 py-2 text-sm font-medium">Sign Up</a>
                <button type="button" class="sm:hidden inline-flex items-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden sm:hidden" id="navbar-search">
        <div class="px-4 pt-2 pb-4">
            <!-- Search Input -->
            <form action="" method="GET" class="mb-4">
                <input 
                    type="search" 
                    name="search" 
                    class="block w-full pl-4 pr-4 py-2 border border-gray-300 rounded-full focus:ring-[var(--primary-color)] focus:border-[var(--primary-color)] sm:text-sm placeholder-gray-400 shadow-sm" 
                    placeholder="Search products..."
                >
            </form>

            <!-- Compare Button with Icon -->
            <button class="btn-secondary w-full flex items-center justify-center gap-2 px-4 py-2 rounded-md text-sm font-medium mb-2">
                <i class="fa-solid fa-magnifying-glass"></i>
                Compare
            </button>

            <!-- Auth Buttons -->
            <a href="" class="btn-primary rounded-md px-4 py-2 text-sm font-medium block text-center mb-2">Sign In</a>
            <a href="" class="btn-secondary rounded-md px-4 py-2 text-sm font-medium block text-center">Sign Up</a>
        </div>
    </div>
</nav>