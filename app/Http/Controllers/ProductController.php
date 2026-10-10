<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'MOUSE', 'price' => 500, 'category' => 'PERIFERICOS'],
            ['id' => 2, 'name' => 'TECLADO', 'price' => 800, 'category' => 'PERIFERICOS'],
            ['id' => 3, 'name' => 'MONITOR', 'price' => 4500, 'category' => 'PERIFERICOS'],
            ['id' => 4, 'name' => 'CPU', 'price' => 6000, 'category' => 'COMPONENTES'],
        ];

        return Inertia::render('products/index', [
            'products' => $products,
        ]);
    }
}
