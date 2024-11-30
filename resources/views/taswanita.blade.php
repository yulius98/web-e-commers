<x-layout>
	<x-slot:title>{{ $title }}</x-slot:title>
	
	<!-- Hero Section -->
	<div class="bg-gradient-to-r from-lime-500 to-lime-700 text-white py-12">
		<div class="container mx-auto px-4">
			<h1 class="text-4xl font-bold mb-4">Koleksi Tas Wanita</h1>
			<p class="text-xl">
				Temukan berbagai macam tas wanita trendy dan berkualitas
			</p>
		</div>
	</div>

	<div class="container mx-auto px-4 py-8">
		<!-- Products Grid -->
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
			@foreach($products->where('kategori', 'tas wanita') as $product)
				<x-product-card :product="$product" />
			@endforeach
		</div>

		<!-- Pagination -->
		<div class="mt-12">
			<nav class="flex justify-center items-center">
				<ul class="flex space-x-2">
					@if ($products->onFirstPage())
						<li class="px-4 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">&laquo; Prev</li>
					@else
						<li>
							<a href="{{ $products->previousPageUrl() }}"
							   class="px-4 py-2 bg-white text-lime-600 rounded-lg hover:bg-lime-50 transition duration-300">
								&laquo; Prev
							</a>
						</li>
					@endif

					@foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
						<li>
							<a href="{{ $url }}"
							   class="px-4 py-2 rounded-lg {{ $page == $products->currentPage() ? 'bg-lime-600 text-white' : 'bg-white text-lime-600 hover:bg-lime-50' }} transition duration-300">
								{{ $page }}
							</a>
						</li>
					@endforeach

					@if ($products->hasMorePages())
						<li>
							<a href="{{ $products->nextPageUrl() }}"
							   class="px-4 py-2 bg-white text-lime-600 rounded-lg hover:bg-lime-50 transition duration-300">
								Next &raquo;
							</a>
						</li>
					@else
						<li class="px-4 py-2 text-gray-400 bg-gray-100 rounded-lg cursor-not-allowed">Next &raquo;</li>
					@endif
				</ul>
			</nav>
		</div>
	</div>
</x-layout>