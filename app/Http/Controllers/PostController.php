<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET /api/posts - ambil semua artikel
    public function index(Request $request)
    {
        $posts = Post::where('user_id', $request->user()->id)
                     ->latest()
                     ->get();

        return response()->json(['posts' => $posts]);
    }

    // POST /api/posts - buat artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|string|max:255',
            'content' => 'required|string',
            'status'  => 'in:draft,published',
        ]);

        $post = Post::create([
            'user_id' => $request->user()->id,
            'title'   => $request->title,
            'content' => $request->content,
            'status'  => $request->status ?? 'draft',
        ]);

        return response()->json([
            'message' => 'Artikel berhasil dibuat.',
            'post'    => $post,
        ], 201);
    }

    // GET /api/posts/{id} - ambil 1 artikel
    public function show(Request $request, Post $post)
    {
        if ($post->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Tidak diizinkan.'], 403);
        }

        return response()->json(['post' => $post]);
    }

    // PUT /api/posts/{id} - update artikel
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Tidak diizinkan.'], 403);
        }

        $request->validate([
            'title'   => 'sometimes|string|max:255',
            'content' => 'sometimes|string',
            'status'  => 'sometimes|in:draft,published',
        ]);

        $post->update($request->only('title', 'content', 'status'));

        return response()->json([
            'message' => 'Artikel berhasil diupdate.',
            'post'    => $post,
        ]);
    }

    // DELETE /api/posts/{id} - hapus artikel
    public function destroy(Request $request, Post $post)
    {
        if ($post->user_id !== $request->user()->id) {
            return response()->json(['message' => 'Tidak diizinkan.'], 403);
        }

        $post->delete();

        return response()->json(['message' => 'Artikel berhasil dihapus.']);
    }
}