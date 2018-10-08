<?php

namespace App\Http\Controllers;

use App\Repositories\Backend\Unit\UnitRepositoryInterface;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    protected $unitRepository;

    public function __construct(UnitRepositoryInterface $unitRepository)
    {
        $this->unitRepository = $unitRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = $this->unitRepository->getAllUnit();
        $units = $data['units'];
        $locales = $data['locales'];
        return view('backend.admin.unit.index', compact('units', 'locales'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this->unitRepository->showCreateUnit();
        $locales = $data['locales'];
        return view('backend.admin.unit.create', compact('roles', 'locales'));
    }
    public function createLocale($translation_id, $locale_id)
    {
        $data = $this->unitRepository->showCreateLangUnit($translation_id, $locale_id);
        $langLocale = $data['lang'];
        return view('backend.admin.unit.create', compact('roles', 'langLocale', 'translation_id', 'locale_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->unitRepository->createNewUnit($request);
        return redirect()->route('unit.index');
    }
    public function storeLocale(Request $request){
        $data = $this->unitRepository->createNewUnitLocale($request);
        return redirect()->route('unit.index');
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
        $data = $this->unitRepository->showEditUnit($id);
        $unit = $data['unit'];
        $locales = $data['locales'];
        $translation=$data['translation'];
        return view('backend.admin.unit.edit', compact( 'unit', 'locales','translation'));
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
        $data = $this->unitRepository->updateUnit($request, $id);
        return redirect()->route('unit.index');
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
