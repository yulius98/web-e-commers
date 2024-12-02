<div x-data="{ isOpen: false }" class="relative inline-block text-left">
    <div>
        <button 
            type="button" 
            @click="isOpen = !isOpen" 
            class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-lime-800 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-lime-800 hover:bg-lime-700" 
            id="menu-button" 
            aria-expanded="true" 
            aria-haspopup="true">
            Produk Rumah Tangga
            <svg class="-mr-1 h-5 w-5 text-lime-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
  
    <div 
        x-show="isOpen"
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
        class="absolute left-0 z-10 mt-2 w-56 origin-top-right divide-y divide-lime-100 rounded-md bg-lime-100 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" 
        role="menu" 
        aria-orientation="vertical" 
        aria-labelledby="menu-button" 
        tabindex="-1">
        
        <div class="py-1" role="none">
            <a href="/produkelektronik" class="{{ request()->is('/produkelektronik') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Produk Elektronik</a>  
            <a href="/produkrumah" class="{{ request()->is('/produkrumah') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Produk Perlengkapan Rumah</a>
            <a href="/produkpemberisih" class="{{ request()->is('/produkpemberisih') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Produk Pembersih Rumah</a>
            <a href="/produktravelling" class="{{ request()->is('/produktravelling') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Produk Travelling</a>
            <a href="/produkstationary" class="{{ request()->is('/produkstationary') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Produk Stationary</a>
            <a href="/produkmemasak" class="{{ request()->is('/produkmemasak') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Produk Perlengkapan Masak</a> 
        </div>
    </div>
  </div>
  
  