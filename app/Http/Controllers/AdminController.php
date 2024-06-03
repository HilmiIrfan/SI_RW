<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashadmin'); // Pastikan Anda memiliki view yang sesuai
    }
    public function rw()
    {
        return view('dashrw'); // Pastikan Anda memiliki view yang sesuai
    }
    public function rt()
    {
        return view('dashrt'); // Pastikan Anda memiliki view yang sesuai
    }
    public function warga()
    {
        return view('dashwarga'); // Pastikan Anda memiliki view yang sesuai
    }
}
