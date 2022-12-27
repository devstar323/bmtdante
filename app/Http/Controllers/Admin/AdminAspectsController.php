<?php

namespace App\Http\Controllers\Admin;

use App\Aspect;
use App\Http\Requests\AspectsCreateRequest;
use App\Http\Requests\AspectsUpdateRequest;
use App\Image;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManagerStatic as Photo;
use Illuminate\Support\Facades\DB;
use Storage;

class AdminAspectsController extends AdminBaseController
{
    public function index()
    {
        $aspects = Aspect::with('image')
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.aspects.index', compact('aspects'));
    }
    public function create()
    {
        return view('admin.aspects.create');
    }
    public function store(AspectsCreateRequest $request)
    {
        $input = $request->all();

        // dd($request->hasfile('video_id'));
        
        $video = new Video;
        if ($request->hasFile('video_id'))
        {
            $path = $request->file('video_id')->store('videos', ['disk' =>      'my_files']);
            // dd($path);
            $video->video = $path;
            $video->save(); 
            $input['video_id'] = $video->id;
        }
         

        if($file = $request->file('image_id'))
        {
            $name = time().$file->getClientOriginalName();

            $image_resize = Photo::make($file->getRealPath());
            $image_resize->resize(340,380);
            $image_resize->save(public_path('assets/img/' .$name));

            $image = Image::create(['file'=>$name]);
            $input['image_id'] = $image->id;
        }
        
        $create_aspects = Aspect::create($input);
        return redirect('/admin/aspects')
            ->with('success_message', 'Aspect created successfully');

    }

    public function edit($id)
    {
        $aspect = Aspect::findOrFail($id);
        return view('admin.aspects.edit', compact('aspect'));

    }
    public function update(AspectsUpdateRequest $request, $id)
    {
        $input = $request->all();

        if($file = $request->file('image_id'))
        {
            $name = time().$file->getClientOriginalName();

            $image_resize = Photo::make($file->getRealPath());
            $image_resize->resize(340,380);
            $image_resize->save(public_path('assets/img/' .$name));

            $image = Image::create(['file'=>$name]);
            $input['image_id'] = $image->id;
        }

        if ($request->hasFile('video_id'))
        {
            $video = new Video;
            $path = $request->file('video_id')->store('videos', ['disk' =>      'my_files']);
            // dd($path);
            $video->video = $path;
            $video->save(); 
            $input['video_id'] = $video->id;
        }

        $aspect = Aspect::findOrFail($id);
        $aspect->update($input);
        return redirect('/admin/aspects')
            ->with('success_message', 'Aspect updated successfully');

    }

    public function destroy($id)
    {
        $aspect= Aspect::findOrFail($id);
        $aspect->delete();
        return redirect()->back()->with('alert_message', 'Aspect move to trash');
    }

    public function restore($id)
    {
        $trash = Aspect::onlyTrashed()->findOrFail($id);
        $trash->restore();
        return redirect()->back()
            ->with('success_message', 'Aspect successfully restore from trash');
    }

    public function forceDelete($id)
    {
        $trash_book = Aspect::onlyTrashed()->findOrfail($id);
        if(!is_null($trash_book->image_id))
        {
            unlink(public_path().'/assets/img/'.$trash_book->image->file);
        }
        $trash_book->image->delete();
        $trash_book->forceDelete();
        return redirect()->back()
            ->with('alert_message', 'Aspect deleted permanently');
    }

    public function trashAspects()
    {
        $aspects = Aspect::onlyTrashed()->orderBy('id', 'DESC')->get();
        return view('admin.aspects.trash-aspects', compact('aspects'));
    }

}
