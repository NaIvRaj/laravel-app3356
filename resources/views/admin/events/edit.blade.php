@extends('layouts.admin')

@section('content')
<header class="mb-10">
    <h1 class="text-3xl font-black">Edit Event</h1>
</header>
<div class="bg-white p-8 rounded-3xl border border-slate-100 shadow-sm max-w-2xl">
    <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="grid grid-cols-2 gap-6 mb-6">
            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Judul Event</label>
                <input type="text" name="title" value="{{ $event->title }}" class="w-full px-5 py-3 border-2 border-slate-100 rounded-xl" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Kategori</label>
                <select name="category_id" class="w-full px-5 py-3 border-2 border-slate-100 rounded-xl" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $event->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Tanggal & Waktu</label>
                <input type="datetime-local" name="date" value="{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d\TH:i') }}" class="w-full px-5 py-3 border-2 border-slate-100 rounded-xl" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Harga Tiket (Rp)</label>
                <input type="number" name="price" value="{{ $event->price }}" class="w-full px-5 py-3 border-2 border-slate-100 rounded-xl" required>
            </div>
            <div>
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Stok Tiket</label>
                <input type="number" name="stock" value="{{ $event->stock }}" class="w-full px-5 py-3 border-2 border-slate-100 rounded-xl" required>
            </div>
            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Lokasi</label>
                <input type="text" name="location" value="{{ $event->location }}" class="w-full px-5 py-3 border-2 border-slate-100 rounded-xl" required>
            </div>
            <div class="col-span-2">
                <label class="block text-sm font-bold text-slate-700 mb-2 uppercase">Deskripsi</label>
                <textarea name="description" rows="3" class="w-full px-5 py-3 border-2 border-slate-100 rounded-xl">{{ $event->description }}</textarea>
            </div>
        </div>
        <button type="submit" class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold">Update Event</button>
        <a href="{{ route('admin.events.index') }}" class="px-6 py-3 ml-2 bg-slate-100 text-slate-600 rounded-xl font-bold">Batal</a>
    </form>
</div>
@endsection