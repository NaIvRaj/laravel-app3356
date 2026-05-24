@extends('layouts.admin')

@section('content')
<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Manajemen Kategori</h1>
    </div>
    <a href="{{ route('admin.categories.create') }}" class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold hover:bg-indigo-700 transition">+ Tambah Kategori</a>
</header>

<div class="bg-white rounded-3xl border border-slate-100 shadow-sm overflow-hidden">
    <table class="w-full text-left border-collapse">
        <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black">
            <tr>
                <th class="p-4 pl-8">No</th>
                <th class="p-4">Nama Kategori</th>
                <th class="p-4">Slug</th>
                <th class="p-4">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y border-t">
            @forelse($categories as $index => $category)
            <tr class="hover:bg-slate-50/50 transition">
                <td class="p-4 pl-8">{{ $index + 1 }}</td>
                <td class="p-4 font-bold text-slate-800">{{ $category->name }}</td>
                <td class="p-4 text-slate-500">{{ $category->slug }}</td>
                <td class="p-4 flex gap-3 items-center">
                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="text-indigo-600 font-bold hover:underline">Edit</a>
                    <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus kategori ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-rose-600 font-bold hover:underline">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4" class="p-4 text-center text-slate-500 font-bold">Belum ada kategori.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection