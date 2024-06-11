<aside data-menu-sidebar class="z-10 flex-shrink-0 hidden bg-white md:block">
    <div class="h-full flex flex-col w-64 px-4 py-8 border-r">
        <a class="block text-xl font-bold text-gray-900" href="#">My App</a>
        <div class="mt-6 mb-4">
            <form action="#">
                <label for="search" class="sr-only">Search</label>
                <div class="relative">
                    <svg class="w-5 h-5 absolute text-gray-400 left-2 top-2" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21.71 20.29l-3.4-3.4a9 9 0 10-1.41 1.41l3.4 3.4a1 1 0 001.41-1.41zM5 11a6 6 0 1112 0A6 6 0 015 11z" />
                    </svg>
                    <input id="search" type="text"
                        class="w-full py-2 pl-10 pr-4 text-gray-700 placeholder-gray-400 bg-white border border-gray-300 rounded-md focus:outline-none focus:ring"
                        placeholder="Search">
                </div>
            </form>
        </div>
        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav class="text-sm font-medium text-gray-500">
                <a href="#" class="flex items-center px-2 py-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100 hover:text-gray-700"
                    href="#">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" />
                    </svg>
                    <span class="mx-4">Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-2 py-2 transition-colors duration-200 transform rounded-lg hover:bg-gray-100 hover:text-gray-700">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-1.71 0-3.3-.44-4.68-1.22l12.46-12.46C19.56 8.7 20 10.29 20 12c0 5.52-4.48 10-10 10zm-8-10c0-1.71.44-3.3 1.22-4.68l12.46 12.46C15.3 19.56 13.71 20 12 20c-5.52 0-10-4.48-10-10z" />
                    </svg>
                    <span class="mx-4">Settings</span>
                </a>
            </nav>
            <div class="flex items-center px-2 py-2 mt-4 text-gray-600 transition-colors duration-200 transform rounded-lg hover:bg-gray-100 hover:text-gray-700">
                <button class="flex items-center px-2 py-2 mt-4 text-gray-600 transition-colors duration-200 transform rounded-lg hover:bg-gray-100 hover:text-gray-700 focus:outline-none">
                    <svg class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M15.3 14.7a1 1 0 00-1.41 0L12 16.59l-1.89-1.89a1 1 0 00-1.41 1.41L10.59 18l-1.89 1.89a1 1 0 001.41 1.41L12 19.41l1.89 1.89a1 1 0 001.41-1.41L13.41 18l1.89-1.89a1 1 0 000-1.41zM12 2a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 110-16 8 8 0 010 16z" />
                    </svg>
                    <span class="mx-4 font-medium">Logout</span>
                </button>
            </div>
        </div>
    </div>
</aside>
