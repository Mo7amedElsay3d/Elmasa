<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePackageRequest;
use App\Http\Requests\UpdatePackageRequest;
use App\Http\Resources\PackageResource;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $packages = Package::all();
        return response()->json([
            'message' => 'this is all packages',
            'data' => PackageResource::collection($packages),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePackageRequest $request)
    {
        $validated = $request->validated();

        $package = Package::create($validated);
        return response()->json([
            'message' => 'package create successfully',
            'data' => new PackageResource($package)
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Package $package)
    {
        return response()->json([
            'message' => 'Package retrieved successfully',
            'data' => new PackageResource($package),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePackageRequest $request, Package $package)
    {
        $validated = $request->validated();
        $package->update($validated);
        return response()->json([
            'message' => 'Package updated successfully',
            'data' => new PackageResource($package),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return response()->json([
            'message' => 'package deleted successfully',
        ], 200);
    }
}
