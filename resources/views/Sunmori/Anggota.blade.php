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
     
    <div class="mx-auto w-9/12 mt-6 flex flex-row items-center">
        <div class="basis-1/3">
            <div class="flex flex-col">
                <div class="flex items-center">
                    <svg class="stroke-gray-500 stroke-2 h-5 w-5">
                        <line x1="0" y1="10px" x2="10px" y2="10px"/>
                    </svg>
                    <h2 class="uppercase text- font-extralight tracking-wiswa">
                        Anggota
                    </h2>
                </div>
                <h3 class="text-3xl text-white">Daftar Anggota</h3>
            </div>
            <div class="mx-auto w-9/12 mt-6 flex flex-row items-center justify-center"> <!-- Menggunakan 'justify-center' untuk membuat tampilan di tengah -->
                <div class="text-center">
                    <div class="relative inline-block">
                        @foreach ($anggotas as $anggota)
                            <div class="flex items-center justify-center">
                                <div class="rounded-full overflow-hidden border-4 border-gray-800 mb-2">
                                    <img src="{{ asset($anggota->photo) }}" alt="Photo" class="w-24 h-24 object-cover" /> <!-- Menggunakan 'object-cover' untuk memastikan foto sesuai dengan dimensi yang diinginkan -->
                                </div>
                            </div>
                            <div class="text-white mb-4">
                                <strong>Nama:</strong> {{ $anggota->name }}<br>
                                <strong>Email:</strong> {{ $anggota->email }}<br>
                                <strong>Nomor KTP:</strong> {{ $anggota->id_card }}<br>
                                <strong>Jenis Kelamin:</strong> {{ $anggota->gender }}<br>
                                <strong>Tanggal Lahir:</strong> {{ $anggota->birthdate }}<br>
                                <strong>Alamat:</strong> {{ $anggota->address }}<br>
                                <strong>Nomor Telepon:</strong> {{ $anggota->phone }}<br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <footer class="text-center pt-10 pb-10 font-mono -mt-20"> <!-- footer -->
    2023 Aispriyani. All rights reserved
</footer> --}}
</body>
</html>
