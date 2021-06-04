<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

// use Illuminate\Support\Facades\Redirect;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', [
            'blogs' => $blogs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $this->middleware(['auth']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // return "Hier komt mijn data!";

        $this->validate($request, [
            'title' => ['required', 'min:6'],
            'content' => 'required|min:50',
        ]);

        // return 'do I get here?';

        // met model te gebruiken
        Blog::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Blog::create($request->expecept('_token'));

        // zonder models met create
        // \DB::table('blogs')->insert([
        //     'title' => $request->title,
        //     'content' => $request->content,
        // ]);

        // return Redirect::route('blogs.index')->with('succes', 'Blog item succesvol opgeslagen!');
        return redirect()->route('blogs.index')->with('succes', 'Blog item succesvol opgeslagen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $blog = Blog:find($id);
        $blog = Blog::findOrFail($id);

        return view('blogs.show', [
            'blog' => $blog,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
