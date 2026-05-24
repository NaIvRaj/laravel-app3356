@extends('layouts.admin')

@section('content')
<header class="mb-10">
    <h1 class="text-3xl font-black">Tambah Kategori</h1>
</header>
<div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm max-w-xl">
    <form action="{{ route('admin.categories.store') }}" method="POST">
        @csrf
        <div class="mb-6">
            <label class="block text-sm font-bold text-slate-700 mb-2 uppercase tracking-wide">Nama Kategori</label>
            <input type="text" name="name" class="w-full px-5 py-4 border-2 border-slate-100 rounded-2xl outline-none focus:border-indigo-600 transition" required>
        </div>
        <div class="flex gap-4">
            <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold">Simpan</button>
            <a href="{{ route('admin.categories.index') }}" class="px-6 py-3 bg-slate-100 text-slate-600 rounded-xl font-bold">Batal</a>
        </div>
    </form>
</div>
@endsection