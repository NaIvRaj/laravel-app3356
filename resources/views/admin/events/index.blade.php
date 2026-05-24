@extends('layouts.admin')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Event</h1>
        <p class="text-slate-500 font-medium">Buat dan atur acara seru Anda di sini.</p>
    </div>
    <a href="{{ route('admin.events.create') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg shadow-indigo-100 hover:bg-indigo-700 active:scale-95 transition">
        + Tambah Event Baru
    </a>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black tracking-widest">
                <tr>
                    <th class="px-8 py-4 w-16">No</th>
                    <th class="px-8 py-4">Poster</th>
                    <th class="px-8 py-4">Event</th>
                    <th class="px-8 py-4">Harga / Stok</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y border-t">
                {{-- Looping data dari database eventtiket_db --}}
                @forelse($events as $index => $event)
                <tr class="hover:bg-slate-50/50 transition">
                    {{-- Perubahan 1: Penomoran yang menyesuaikan halaman Paginasi --}}
                    <td class="px-8 py-6 font-bold text-slate-400">{{ $events->firstItem() + $index }}</td>
                    <td class="px-8 py-6">
                        <img src="{{ asset($event->poster_path) }}" class="w-16 h-20 rounded-xl object-cover shadow-sm" alt="Poster {{ $event->title }}">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-black text-slate-800">{{ $event->title }}</p>
                        <p class="text-xs text-slate-400">
                            {{ $event->category->name ?? 'Tanpa Kategori' }} • 
                            {{-- Perubahan 2: Format tanggal memanfaatkan $casts di Model --}}
                            {{ $event->date->format('d M Y') }}
                        </p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold text-indigo-600">Rp {{ number_format($event->price, 0, ',', '.') }}</p>
                        <p class="text-xs text-slate-400">Stok: {{ $event->stock }}</p>
                    </td>
                    <td class="px-8 py-6">
                        <div class="flex gap-2">
                            <a href="{{ route('admin.events.edit', $event->id) }}" 
                               class="p-2.5 bg-indigo-50 text-indigo-600 rounded-xl hover:bg-indigo-600 hover:text-white transition text-sm font-bold">
                                Edit
                            </a>
                            
                            <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus event ini?');" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="p-2.5 bg-rose-50 text-rose-600 rounded-xl hover:bg-rose-600 hover:text-white transition text-sm font-bold">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-8 py-12 text-center text-slate-500 font-bold">
                        Belum ada event tersedia di database.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    {{-- Perubahan 3: Link Paginasi (Berada di bawah elemen table) --}}
    <div class="px-8 py-6 bg-slate-50/50 border-t items-center">
        {{ $events->links() }}
    </div>
</div>
@endsection