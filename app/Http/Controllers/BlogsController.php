<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Http\Requests\BlogRequest;

use App\Blog;

use App\Repositories\BlogRepository;

class BlogsController extends Controller
{

	protected $blogs;

	public function __construct(BlogRepository $blogs)
    {
		$this->blogs = $blogs;
	}
    public function index()
    {
        return view('blog.index', ['blogs' => $this->blogs->index()]);
    }

    public function create()
    {
    	return view('blog.create');
    }

    public function store(BlogRequest $request)
    {
        $img = $request->file('image');

        $file = str_random('30').'-'.$img->getClientOriginalName();

        $data = [

            'title'             =>          $request->title,
            'content'           =>          $request->content,
            'image'             =>          $file,
            'date'              =>          Carbon::now()
        ];

        $this->blogs->save($data);

        $img->move(public_path().'/images/', $file);

        Session::flash('alert-class', 'alert-success');
        Session::flash('message', 'Entrada publicada satisfactoriamente.');

        return redirect('/dashboard/blog');
    }

    public function edit($id)
    {
        return view('blog.edit', ['blog' => $this->blogs->edit($id)]);
    }

    public function update($id, Request $request)
    {
        if($request->image != ''){

            $file = $request->image;
            $img = str_random('30').'-'.$file->getClientOriginalName();

            $file->move(public_path().'/images/', $img);

        }else{

            $img = Blog::find($id)->image;
        }

        $data = [

            'title'             =>          $request->title,
            'content'           =>          $request->content,
            'image'             =>          $img,
            'date'              =>          Carbon::now()
        ];

        $this->blogs->update($id, $data);

        Session::flash('alert-class', 'alert-success');
        Session::flash('message', 'Entrada actualizada satisfactoriamente.');

        return redirect('/dashboard/blog');
    }

    public function destroy($id)
    {
        $this->blogs->delete($id);

        Session::flash('alert-class', 'alert-danger');
        Session::flash('message', 'Entrada eliminada correctamente.');

        return redirect('/dashboard/blog');
    }
}
