<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Carbon\Carbon;
use App\Http\Requests\VideoRequest;

use App\Repositories\VideoRepository;

class VideosController extends Controller
{

	protected $videos;

	public function __construct(VideoRepository $videos)
    {
		$this->videos = $videos;
	}

    public function index()
    {
    	return view('videos.index', ['videos' => $this->videos->index()]);
    }

    public function create()
    {
    	return view('videos.create');
    }

    public function store(VideoRequest $request)
    {
    	if($request->upload != ""){

    		$vid = $request->file('upload');
    		$file = str_random('30').'-'.$vid->getClientOriginalName();

    		$data = [

    			'title'			=>		$request->title,
    			'video'			=>		$file,
                'type'          =>      '0'
    		];

    		$vid->move(public_path().'/video/', $file);
    	}

    	if($request->link != ""){

    		$data = [

    			'title'			=>		$request->title,
    			'video'			=>		str_replace('watch?v=' ,'embed/', $request->link),
                'type'          =>      '1'
    		];
    	}

    	$this->videos->save($data);

    	$request->session()->flash('msg', [
            'type' => 'success',
            'messages' => [
                'Vídeo publicado satisfactoriamente.'
            ]
        ]);

        return redirect('/dashboard/videos');
    }

    public function show()
    {
        return view('videos.show', ['video' => $this->videos->view(), 'last' => $this->videos->last()]);
    }

    public function edit($id)
    {
    	return view('videos.edit', ['videos' => $this->videos->edit($id)]);
    }

    public function update($id, Request $request)
    {
    	$data = [

    			'title'			=>		$request->title,
    		];

    	$this->videos->update($id ,$data);

    	$request->session()->flash('msg', [
            'type' => 'success',
            'messages' => [
                'Título del vídeo actualizado satisfactoriamente.'
            ]
        ]);

        return redirect('/dashboard/videos');
    }

    public function destroy(Request $request, $id)
    {
    	$this->videos->delete($id);

        $request->session()->flash('msg', [
            'type' => 'success',
            'messages' => [
                'Vídeo eliminado satisfactoriamente.'
            ]
        ]);

        return redirect('/dashboard/videos');
    }

}
