@extends('layouts.app')

@section('content')
<main class="max-w-3xl mx-auto px-6 py-20">
    <div class="mb-12">
        <h1 class="text-4xl font-extrabold">Checkout</h1>
        <p class="text-slate-500 mt-2">Lengkapi data Anda untuk mendapatkan tiket.</p>
    </div>
    <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
        <h3 class="text-xl font-bold mb-6 italic text-indigo-600">📦 Data Pemesan</h3>
        <form class="space-y-6">
            <input type="text" placeholder="Nama Lengkap" class="w-full px-5 py-4 border-2 rounded-2xl">
            <input type="email" placeholder="Email" class="w-full px-5 py-4 border-2 rounded-2xl">
            <a href="{{ route('ticket') }}" class="block text-center w-full py-5 bg-indigo-600 text-white rounded-2xl font-black text-xl">
                Simulasi Bayar & Lihat Tiket
            </a>
        </form>
    </div>
</main>
@endsection