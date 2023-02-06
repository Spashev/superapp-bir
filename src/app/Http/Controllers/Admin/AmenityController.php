<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Dto\AmenityDTO;
use App\Http\Repository\Admin\Amenity\AmenityRepositoryInterface;
use App\Http\Requests\AmenityRequest;
use App\Models\Amenity;
use Illuminate\Http\Request;

class AmenityController extends Controller
{
    private AmenityRepositoryInterface $repository;

    public function __construct(AmenityRepositoryInterface $repository)
    {
        $this->middleware('permission:view-amenity|create-amenity|edit-amenity|delete-amenity', ['only' => ['index','store']]);
        $this->middleware('permission:create-amenity', ['only' => ['create','store']]);
        $this->middleware('permission:edit-amenity', ['only' => ['edit','update']]);
        $this->middleware('permission:delete-amenity', ['only' => ['destroy']]);

        $this->repository = $repository;
    }

    public function index()
    {
        $amenities = $this->repository->getAllWithPagination(15);

        return view('admin.amenity.index', compact('amenities'));
    }

    public function edit(Amenity $amenity)
    {
        return view('admin.amenity.edit', compact('amenity'));
    }

    public function update(AmenityRequest $amenityRequest, Amenity $amenity)
    {
        dd($amenityRequest->toArray(), $amenity->toArray());
    }

    public function store(AmenityRequest $request)
    {
        try {
            $tag = $this->repository->create((new AmenityDTO())($request->toArray()));
            $message = $tag ? 'Amenity created successfully' : 'Some error in server, amenity doesn\'t created.';

            return to_route('admin.amenity.index')->withSuccess($message);
        } catch (\Exception $e) {

            return to_route('admin.amenity.index')->withError($e->getMessage());
        }
    }

    public function destroy(Amenity $amenity)
    {
        $this->repository->delete($amenity->id);

        return to_route('admin.amenity.index')->withSuccess('Amenity deleted');
    }
}
