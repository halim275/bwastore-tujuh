<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
	public function index()
	{
		if (request()->ajax()) {
			$query = Category::query();

			return DataTables::of($query)
				->addColumn('action', function ($item) {
					return '
                  <div class="btn-group">
                     <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle mr-1 mb-1" data-toggle="dropdown">
                           Action
                        </button>
                        <div class="dropdown-menu">
                           <a class="dropdown-item" href="' . route('category.edit', $item->id) . '">Sunting</a>
                           <form action="' . route('category.destroy', $item->id) . '" method="POST">
                              ' . method_field('delete') . csrf_field() . '
                              <button type="submit" class="dropdown-item text-danger" onclick="return confirm(\'Are you sure?\')">Hapus</button>
                           </form>
                        </div>
                     </div>
                  </div>
               ';
				})
				->editColumn('photo', function ($item) {
					return $item->photo ? '<img src="' . Storage::url($item->photo) . '" style="max-height: 40px;" />' : '';
				})
				->rawColumns(['action', 'photo'])
				->make();
		}
		return view('pages.admin.category.index');
	}

	public function create()
	{
		return view('pages.admin.category.create');
	}

	public function store(CategoryRequest $request)
	{
		$data = $request->all();

		$data['slug'] 	= Str::slug($request->name);
		$data['photo'] = $request->file('photo')->store('assets/category', 'public');

		Category::create($data);

		return redirect()->route('category.index');
	}

	public function show($id)
	{
		//
	}

	public function edit($id)
	{
		$item = Category::findOrFail($id);

		return view('pages.admin.category.edit', [
			'item' => $item
		]);
	}

	public function update(CategoryRequest $request, $id)
	{
		$data = $request->all();

		$data['slug'] = Str::slug($request->name);
		$data['photo'] = $request->file('photo')->store('assets/category', 'public');

		$item = Category::findOrFail($id);

		$item->update($data);

		return redirect()->route('category.index');
	}

	public function destroy($id)
	{
		$item = Category::findOrFail($id);
		$item->delete();

		return redirect()->route('category.index');
	}
}
