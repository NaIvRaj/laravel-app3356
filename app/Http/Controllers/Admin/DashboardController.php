<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Transaction;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil rekap data aktual dari database
        $totalPendapatan = Transaction::where('status', 'Success')->sum('total_price');
        $tiketTerjual = Transaction::where('status', 'Success')->count();
        $eventAktif = Event::count();
        $pesananPending = Transaction::where('status', 'Pending')->count();
        
        $recentTransactions = Transaction::with('event')->latest()->take(5)->get();

        return view('admin.dashboard', compact('totalPendapatan', 'tiketTerjual', 'eventAktif', 'pesananPending', 'recentTransactions'));
    }
}