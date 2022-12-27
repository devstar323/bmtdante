<?php

namespace App\Http\Controllers;
use App\Aspect;
use App\Video;
use GrahamCampbell\Markdown\Facades\Markdown;
use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Storage;
use URL;
use Response;

class AspectHomeController extends Controller
{
    public function index()
    { 
        $aspects = Aspect::with('image')
            ->orderBy('id', 'DESC')
            ->search(request('term')) #...Search Query
            ->paginate(16);
        return view('public.home', compact('aspects'));
    }

    public function pricing()
    { 
        return view('public.pricing');
    }
    
    public function aboutus()
    {
        return view('public.aboutus');
    }
    public function services()
    {
        $aspects = Aspect::with('image')
            ->orderBy('id', 'DESC')
            ->search(request('term')) #...Search Query
            ->paginate(16);
        return view('public.services', compact('aspects'));
    }
    public function blog()
    {
        return view('public.blog');
    }
    public function contactus()
    {
        return view('public.contactus');
    }

    public function allAspects()
    {
        # ComposerServiceProvider load here
        $aspects = Aspect::with('image')
                    ->orderBy('id', 'DESC')
                    ->search(request('term')) #...Search Query
                    ->paginate(16);
        return view('public.aspect-page', compact('aspects'));
    }

    public function getVideo($id)
    {
        $sel_video = Video::findOrFail($id);
        $name = $sel_video->video;
        $fileContents = Storage::disk('local')->get("{$name}");
        $response = Response::make($fileContents, 200);
        $response->header('Content-Type', "video/mp4");
        return $response;
    }

}
