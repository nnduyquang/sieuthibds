<?php

namespace App\Http\Controllers;

use App\Repositories\Backend\Location\LocationRepositoryInterface;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $locationRepository;

    public function __construct(LocationRepositoryInterface $locationRepository)
    {
        $this->locationRepository = $locationRepository;
    }
    public function index(Request $request)
    {
        $data = $this->locationRepository->getAllLocation();
        $locations = $data['locations'];
        $locales = $data['locales'];
        return view('backend.admin.location.index', compact('locations','locales'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($locale_id)
    {
        $data=$this->locationRepository->showCreateLocation($locale_id);
        $locations = $data['locations'];
        $locales = $data['locales'];
        return view('backend.admin.location.create', compact('roles', 'locations','locales','locale_id'));
    }
    public function createLocale($translation_id, $locale_id)
    {
        $data = $this->locationRepository->showCreateLangLocation($translation_id, $locale_id);
        $locations = $data['locations'];
        $langLocale = $data['lang'];
        return view('backend.admin.location.create', compact('roles', 'locations', 'langLocale', 'translation_id', 'locale_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->locationRepository->createNewLocation($request);
        return redirect()->route('location.index');
    }
    public function storeLocale(Request $request){
        $data = $this->locationRepository->createNewLocationLocale($request);
        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$locale_id)
    {
        $data=$this->locationRepository->showEditLocation($id,$locale_id);
        $location=$data['location'];
        $locations=$data['locations'];
        $locales=$data['locales'];
        $translation=$data['translation'];
        return view('backend.admin.location.edit', compact('location','locations','locales','translation'));
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
        $data = $this->locationRepository->updateLocation($request, $id);
        return redirect()->route('location.index');
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
