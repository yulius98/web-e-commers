<header class="bg-gradient-to-r from-lime-50 via-lime-100 to-lime-50 shadow-lg mt-16 relative overflow-hidden">
	<!-- Decorative background elements -->
	<div class="absolute inset-0 opacity-10">
		<div class="absolute -right-8 -top-8 w-32 h-32 bg-lime-400 rounded-full"></div>
		<div class="absolute -left-4 -bottom-4 w-24 h-24 bg-lime-300 rounded-full"></div>
	</div>

	<div class="mx-auto max-w-7xl px-4 py-8 sm:px-6 lg:px-8 relative">
		<!-- Main content with enhanced styling -->
		<div class="space-y-4">
			<h1 class="text-4xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-lime-700 to-lime-500 transition-all duration-300 hover:scale-[1.02] transform cursor-default">
				{{ $slot }}
			</h1>
			<p class="text-lg text-lime-600/90 font-medium max-w-2xl leading-relaxed border-l-4 border-lime-400 pl-4 transition-all duration-300 hover:border-lime-500">
				Temukan koleksi terbaik kami di sini!
			</p>
		</div>

		<!-- Optional decorative element -->
		<div class="absolute right-0 bottom-0 hidden lg:block">
			<svg class="w-32 h-32 text-lime-200/50" fill="currentColor" viewBox="0 0 100 100">
				<path d="M0,0 L100,0 L100,100 L0,100 Z" fill-opacity="0.1"></path>
			</svg>
		</div>
	</div>
</header>

