<?php

namespace App\Http\Controllers;

use App\Repositories\Backend\Facility\FacilityRepositoryInterface;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $facilityRepository;

    public function __construct(FacilityRepositoryInterface $facilityRepository)
    {
        $this->facilityRepository = $facilityRepository;
    }
    public function index(Request $request)
    {
        $data = $this->facilityRepository->getAllFacility();
        $facilities = $data['facilities'];
        $locales = $data['locales'];
        return view('backend.admin.facility.index', compact('facilities', 'locales'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->facilityRepository->showCreateFacility();
        $locales = $data['locales'];
        return view('backend.admin.facility.create', compact('roles', 'locales'));
    }
    public function createLocale($translation_id, $locale_id)
    {
        $data = $this->facilityRepository->showCreateLangFacility($translation_id, $locale_id);
        $langLocale = $data['lang'];
        return view('backend.admin.facility.create', compact('roles', 'langLocale', 'translation_id', 'locale_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->facilityRepository->createNewFacility($request);
        return redirect()->route('facility.index');
    }
    public function storeLocale(Request $request){
        $data = $this->facilityRepository->createNewFacilityLocale($request);
        return redirect()->route('facility.index');
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
    public function edit($id)
    {
        $data = $this->facilityRepository->showEditFacility($id);
        $facility = $data['facility'];
        $locales = $data['locales'];
        $translation=$data['translation'];
        return view('backend.admin.facility.edit', compact( 'facility', 'locales','translation'));
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
        $data = $this->facilityRepository->updateFacility($request, $id);
        return redirect()->route('facility.index');
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
