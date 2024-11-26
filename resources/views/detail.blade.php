<x-layout>
	<x-slot:title>{{ $title }}</x-slot:title>
	
	<div class="bg-gray-50 min-h-screen">
		<!-- Breadcrumb -->
		<div class="container mx-auto px-4 py-4">
			<nav class="text-gray-500 text-sm">
				<a href="/" class="hover:text-lime-600">Home</a>
				<span class="mx-2">/</span>
				<span class="text-gray-800">{{ $product->produk }}</span>
			</nav>
		</div>

		<!-- Main Content -->
		<div class="container mx-auto px-4 py-8">
			<div class="bg-white rounded-2xl shadow-lg overflow-hidden">
				<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 p-8">
					<!-- Product Image Section -->
					<div class="rounded-xl overflow-hidden bg-gray-50">
						<div class="flex justify-center items-center p-4">
							<img src="{{ $product->img ? asset($product->img) : asset('img/product1.jpg') }}" 
								 alt="{{ $product->produk }}" 
								 class="w-full h-auto max-w-lg object-contain transform transition hover:scale-105"
								 onerror="this.src='{{ asset('img/product1.jpg') }}'">
						</div>
					</div>

					<!-- Product Details Section -->
					<div class="space-y-6">
						<!-- Product Title -->
						<h1 class="text-3xl lg:text-4xl font-bold text-gray-800">{{ $product->produk }}</h1>
						
						<!-- Category Badge -->
						<div class="inline-block">
							<span class="px-4 py-1.5 bg-lime-100 text-lime-700 rounded-full text-sm font-medium">
								{{ $product->kategori }}
							</span>
						</div>

						<!-- Price -->
						<div class="text-3xl font-bold text-lime-600">
							Rp {{ number_format((float)$product->harga, 0, ',', '.') }}
						</div>

						<!-- Stock Status -->
						<div class="flex items-center space-x-2">
							<div class="w-2 h-2 rounded-full {{ $product->jumlah > 0 ? 'bg-lime-500' : 'bg-red-500' }}"></div>
							<span class="text-{{ $product->jumlah > 0 ? 'lime-500' : 'red-500' }} font-medium">
								{{ $product->jumlah > 0 ? 'Stok Tersedia' : 'Stok Habis' }}
							</span>
						</div>

						<!-- Product Description -->
						<div class="prose max-w-none text-gray-600">
							<p>{{ $product->description }}</p>
						</div>

						<!-- Action Buttons -->
						<div class="space-y-4 pt-6">
							<a href="{{ $product->link }}" target="_blank"
							   class="block w-full text-center bg-lime-600 text-white px-6 py-4 rounded-xl hover:bg-lime-700 transition duration-300 transform hover:-translate-y-0.5 font-medium">
								Beli Sekarang
							</a>

							<a href="/" 
							   class="block w-full text-center bg-gray-100 text-gray-700 px-6 py-4 rounded-xl hover:bg-gray-200 transition duration-300 font-medium">
								Kembali ke Beranda
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-layout>
