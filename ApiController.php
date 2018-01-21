<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ApiController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json([
            'msg' => 'error',
            'data' => $articles
        ],200);
    }

    public function getFirst()
    {
        $articles = Article::first();
        return response()->json([
            'msg' => 'error',
            'data' => $articles
        ],200);
    }

    public function getLast()
    {
        $articles = Article::latest()->first();
        return response()->json([
            'msg' => 'error',
            'data' => $articles
        ],200);
    }

    public function show($id)
    {
        $articles = Article::findOrFail($id);
        return response()->json([
            'msg' => 'error',
            'data' => $articles
        ],200);
    }

    public function store(Request $request)
    {
        $articles = Article::create($request->all());
        return response()->json([
            'msg' => 'error',
            'data' => $articles
        ],200);
    }
}
