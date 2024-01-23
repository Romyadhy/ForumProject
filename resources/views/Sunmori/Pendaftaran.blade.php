<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunmori Kita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-gray-500">
	<header class="z-10 sticky top-0 bg-gray-950 py-5"> <!-- header -->
		<nav class="w-9/12 flex flex-row mx-auto">
			<div class="uppercase text-lg basis-1/4"> <!-- logo -->
				<a href="#hero">
					<span class="font-extrabold text-white">Sunmori</span>
					<span class="font-extrabold text-red-800">Kita</span>
				</a>
			</div>
			<div class="basis-1/2 flex items-baseline justify-evenly"> <!-- Link -->
				<a href="{{ route('Sunmori.Home') }}"><span>Home</span></a>
				<a href="{{ route('Sunmori.Anggota') }}"><span>Anggota</span></a>
                <a href="{{ route('Sunmori.Pendaftaran') }}"><span>Pendaftaran</span></a>
			</div>
        </nav>
    </header>
    
<div id="Pendaftaran" class="pt-40">
    <div class="mx-auto w-9/12 flex flex-row items-center">
        <div class="basis-1/2">
            <div class="flex flex-col"> <!-- judul -->
                <div class="flex items-center">
                    <svg class="stroke-gray-400 stroke-2 h-5 w-5">
                        <line x1="0" y1="10px" x2="10px" y2="10px"/>
                    </svg>
                    <h2 class="uppercase text- font-extralight tracking-wiswa">
                        Pendaftaran
                    </h2>
                </div>
                <h3 class="text-3xl text-violet-800">Pendaftaran Anggota</h3>
            </div>
            

            <body>
                <h2>Formulir Pendaftaran Anggota</h2>

            

             <form action="{{ route('anggotas.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <label for="name" class="block text-white font-semibold">Nama :</label>
                <input class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-offset-white" type="text" name="name" required/>
            
                <label for="email" class="block text-white font-semibold">Email :</label>
                <input class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950" type="email" name="email" required/>
            
                <label for="id_card" class="block text-white font-semibold">Nomor KTP :</label>
                <input class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950" type="text" name="id_card" required/>
                
                <label for="gender" class="block text-white font-semibold">Jenis Kelamin :</label>
                <select class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950" name="gender" required>
                    <option value="male">Laki-laki</option>
                    <option value="female">Perempuan</option>
                </select>
                
                <label for="birthdate" class="block text-white font-semibold">Tempat dan Tanggal Lahir :</label>
                <input class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950" type="text" name="birthdate" placeholder="Contoh: Jakarta, 01 Januari 1990" required/>
                
                <label for="photo" class="block text-white font-semibold">Foto :</label>
                <input class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950" type="file" name="photo" accept="image/*" required/>
                
                <label for="address" class="block text-white font-semibold">Alamat :</label>
                <input class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950" type="text" name="address" required/>
                
                <label for="phone" class="block text-white font-semibold">Nomor Telepon :</label>
                <input class="bg-blue-100 rounded-md px-4 py-2 w-full focus:ring-blue-950" type="tel" name="phone" required/>
                
                <button class="hover:bg-blue-600 bg-blue-500 text-white font-semibold py-2 px-4 rounded-md w-full" type="submit">Daftar</button>
            </form>
            
            

                       
        </div>
    </main>
    {{-- <footer class=" text-center pt-10 pb-10 font-mono -mt-20"> <!-- footer -->
		2023 Aispriyani. All rights reserved
	</footer> --}}
    </body>
</html>