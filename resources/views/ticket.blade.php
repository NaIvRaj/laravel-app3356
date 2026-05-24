<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-Ticket</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-indigo-600 text-white min-h-screen flex items-center justify-center p-6">
    <div class="max-w-md w-full text-center">
        <h1 class="text-3xl font-black mb-6">Pembayaran Berhasil!</h1>
        <div class="bg-white text-slate-900 rounded-3xl p-8 shadow-2xl">
            <h2 class="text-2xl font-black mb-6">Jazz Night 2026</h2>
            <div class="bg-slate-100 p-6 rounded-3xl flex flex-col items-center">
                <p class="font-mono font-bold text-slate-800 text-xl">TKT-001293848</p>
            </div>
            <a href="{{ route('home') }}" class="block mt-6 text-indigo-600 font-bold">Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>