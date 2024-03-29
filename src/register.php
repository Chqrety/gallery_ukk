<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Gallery | Login</title>

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- link icon -->
    <!-- no fill -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,400,1,0" />

    <!-- fill -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@40,400,0,0" />

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- import costum css -->
    <link rel="stylesheet" href="costum.css">

</head>

<body>

    <section class="flex h-screen">
        <form method="post" action="authentic_register.php" class="basis-1/2">
            <div class="flex flex-col px-24 py-10">
                <div class="flex items-center gap-5 text-ascentBlack mb-10">
                    <span class="material-symbols-outlined text-7xl">
                        photo_library
                    </span>
                    <span class="text-4xl font-bold">E-Gallery</span>
                </div>
                <div class="flex flex-col mb-10">
                    <span class="font-semibold text-2xl text-primary">Selamat Datang!</span>
                    <span class="text-secondary/70">Silahkan register akun anda terlebih dahulu</span>
                </div>
                <div class="flex flex-col max-w-lg gap-14">
                    <div class="flex flex-col gap-3">
                        <div class="flex flex-col">
                            <label for="username" class="font-semibold pb-1">Username</label>
                            <input type="text" name="Username" placeholder="masukkan username" class="border border-secondary/70 w-full px-2 py-2 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <label for="email" class="font-semibold pb-1">Email</label>
                            <input type="text" name="Email" placeholder="masukkan email" class="border border-secondary/70 w-full px-2 py-2 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold pb-1">Password</label>
                            <input type="password" name="Password" placeholder="masukkan password" class="border border-secondary/70 w-full px-2 py-2 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold pb-1">Nama Lengkap</label>
                            <input type="text" name="NamaLengkap" placeholder="masukkan nama lengkap" class="border border-secondary/70 w-full px-2 py-2 rounded-lg">
                        </div>
                        <div class="flex flex-col">
                            <label class="font-semibold pb-1">Alamat</label>
                            <textarea name="Alamat" placeholder="masukkan alamat" class="border border-secondary/70 w-full px-2 py-2 rounded-lg"></textarea>
                        </div>
                    </div>
                    <div class="flex flex-col gap-5">
                        <button type="submit" class="bg-ascentBlack text-white py-2 rounded-lg transition-all hover:scale-105">Register</button>
                        <div class="w-full">
                            <div class="border-b-2 border-secondary/30 w-full relative">
                                <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 px-5 bg-white text-secondary/80">atau</span>
                            </div>
                        </div>
                        <button type="button" onclick="window.location.href='login.php'" class="border border-ascentBlack py-2 rounded-lg text-ascentBlack hover:bg-ascentBlack hover:text-white">Login</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="basis-1/2 overflow-hidden">
            <img src="/img/afternoon.jpg" alt="night" class="w-full h-full object-cover object-center rounded-bl-[50%] select-none pointer-events-none">
        </div>
    </section>

</body>

</html>