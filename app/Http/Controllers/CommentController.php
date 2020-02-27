<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(StoreCommentRequest $request, Post $post)
    {
        if (auth()->check()) {
            $author = auth()->user()->name;

            if (auth()->user()->id === $post->user_id) {
                $author .= ' |AUTHOR|';
            }

            if (auth()->user()->hasRole('Admin')) {
                $author .= ' |ADMIN|';
            }
        }

        Comment::create([
            'author' => $author ?? 'Anónimo',
            'body' => $request['body'],
            'post_id' => $post->id,
            'user_id' => auth()->user()->id  ?? null
        ]);

        return redirect()
            ->route('posts.show', $post);

    }

    public function edit(Comment $comment)
    {

        $this->authorize('update', $comment);

        return view('posts.comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {

        $this->authorize('update', $comment);

        $this->validate($request, [
            'body' => 'required',
        ]);

        $comment->update($request->all());

        return redirect()->route('posts.show', $comment->post);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return back()->with('flash', 'Comentario eliminado');

    }
}
