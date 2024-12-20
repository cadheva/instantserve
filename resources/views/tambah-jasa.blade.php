<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Tambah Jasa</title>
</head>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    @include('components.admin-navbar')

    <!-- Sidebar -->
    <div class="flex">
        @include('components.admin-sidebar')
        <!-- Content -->
        <div class="ml-64 pt-20 w-full p-6">
            <div class="main-section bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-6 text-gray-700">Form Tambah Jasa</h2>
                <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="bg-gray-100 p-6 rounded-lg shadow-inner">
                        <h3 class="text-lg font-semibold mb-4 text-gray-600">Isi Detail Jasa</h3>
                        
                        <!-- Nama Jasa -->
                        <div class="mb-4">
                            <label for="nama_layanan" class="block text-sm font-medium text-gray-700">Nama Jasa:</label>
                            <input type="text" id="nama_layanan" name="nama_layanan" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('nama_layanan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kontak -->
                        <div class="mb-4">
                            <label for="kontak" class="block text-sm font-medium text-gray-700">Kontak:</label>
                            <input type="text" id="kontak" name="kontak" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('kontak')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Alamat -->
                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat:</label>
                            <input type="text" id="alamat" name="alamat" required class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('alamat')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Foto Jasa -->
                        <div class="mb-4">
                            <label for="image_url" class="block text-sm font-medium text-gray-700">Foto Jasa:</label>
                            <input type="file" id="image_url" name="image_url" accept="image/*" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            @error('image_url')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Kategori -->
                        <div class="mb-4">
                            <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori Jasa:</label>
                            <select name="kategori" id="kategori" class="block w-full mt-1 p-2 border border-gray-300 rounded-md">
                                <option value="UMKM">UMKM</option>
                                <option value="Sekolah">Sekolah</option>
                                <option value="Rumah Tangga">Rumah Tangga</option>
                                <option value="Pengangkutan">Pengangkutan</option>
                            </select>
                            @error('kategori')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Deskripsi -->
                        <div class="mb-6">
                            <label for="deskripsi_layanan" class="block text-sm font-medium text-gray-700">Deskripsi Jasa:</label>
                            <textarea id="deskripsi_layanan" name="deskripsi_layanan" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500"></textarea>
                            @error('deskripsi_layanan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <button type="submit" class="w-full text-black py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50" style="background-color: #81D8D0;">Tambahkan Jasa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Dropdown Toggle Script
        document.querySelectorAll('.dropdown-btn').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.nextElementSibling;
                dropdown.classList.toggle('hidden');
            });
        });
    </script>
    
</body>

</html>
