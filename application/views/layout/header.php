<header class="sticky top-0 z-50 bg-white shadow px-4 py-2 flex items-center justify-between flex-wrap" x-data="{ menuOpen: false, langOpen: false }">
    <div class="font-bold text-blue-900"><a class="logo-kmki" href="<?= base_url(); ?>">KMKI</a></div>

    <button @click="menuOpen = !menuOpen" class="md:hidden text-gray-600 hover:text-blue-900 focus:outline-none ml-auto">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <nav :class="menuOpen ? 'block' : 'hidden'" class="w-full md:w-auto md:flex-grow md:flex md:justify-center md:space-x-6 mt-4 md:mt-0">
        <a href="<?= base_url(); ?>" class="block <?= (empty($this->uri->segment(1))) ? 'font-semibold text-blue-900' : 'text-gray-600'; ?> hover:text-blue-900 px-4 py-2 md:p-0" x-text="t.nav.home"></a>
        <a href="<?= base_url('about'); ?>" class="block <?= ($this->uri->segment(1) == 'about') ? 'font-semibold text-blue-900' : 'text-gray-600'; ?> hover:text-blue-900 px-4 py-2 md:p-0" x-text="t.nav.about"></a>
        <!-- <a href="#" class="block text-gray-600 hover:text-blue-900 px-4 py-2 md:p-0" x-text="t.nav.contact"></a> -->

        <!-- Dropdown Bahasa (Mobile) -->
        <div class="relative block md:hidden" @click.outside="langOpen = false">
            <!-- Tombol utama -->
            <button @click="langOpen = !langOpen"
                class="flex items-center px-3 py-2 rounded w-full"
                :class="langOpen ? 'bg-blue-500 text-white' : 'bg-blue-100'">
                <img :src="langLabels[selectedLang].flag" alt="" class="w-5 h-5 mr-2 rounded-sm">
                <span x-text="langLabels[selectedLang].label" class="mr-auto"></span>
                <svg class="ml-auto w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                </svg>
            </button>

            <!-- Dropdown -->
            <div x-show="langOpen" x-transition class="mt-2 w-full bg-white border rounded shadow z-50">
                <template x-for="(info, key) in langLabels" :key="key">
                    <a href="#" class="flex items-center px-4 py-2 cursor-pointer hover:bg-blue-100 hover:text-gray-700"
                        :class="selectedLang === key ? 'bg-blue-500 text-white' : 'text-gray-700'"
                        @click.prevent="setLang(key)">
                        <img :src="info.flag" alt="" class="w-5 mr-2 rounded-sm">
                        <span x-text="info.label"></span>
                    </a>
                </template>
            </div>
        </div>
    </nav>

    <!-- Dropdown Bahasa (Desktop) -->
    <div class="relative hidden md:block" @click.outside="langOpen = false">
        <!-- Tombol utama -->
        <button @click="langOpen = !langOpen"
            class="flex items-center px-3 py-2 rounded transition-colors"
            :class="langOpen ? 'bg-blue-500 text-white' : 'bg-gray-50'">
            <img :src="langLabels[selectedLang].flag" alt="" class="w-5 mr-2 border rounded-sm">
            <span x-text="langLabels[selectedLang].label" class="mr-1"></span>
            <svg class="ml-auto w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown -->
        <div x-show="langOpen" x-transition class="absolute right-0 mt-2 w-44 bg-white rounded shadow z-50">
            <template x-for="(info, key) in langLabels" :key="key">
                <a href="#" class="flex items-center px-4 py-2 hover:bg-blue-100 hover:text-gray-700 transition"
                    @click.prevent="setLang(key)"
                    :class="selectedLang === key ? 'bg-blue-500 text-white' : 'text-gray-700'">
                    <img :src="info.flag" alt="" class="w-5 mr-2 border rounded-sm">
                    <span x-text="info.label"></span>
                </a>
            </template>
        </div>
    </div>
</header>