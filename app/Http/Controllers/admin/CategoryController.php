<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Validation\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('services')->get();

        return view('admin.admin_pages.services', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {
        $validator = $req->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => $validator['name']
        ]);

        // Корректный способ вернуть сообщение
        return redirect()->back()->with('status', '200');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $req)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $validator = $req->validate([
            'name' => 'required',
        ]);

        $category = Category::find($id);

        $category->update([
            'name' => $validator['name']
        ]);

        return redirect()->back()->with('status', '200');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Получаем категорию с услугами
        $category = Category::with('services')->findOrFail($id);

        // Находим или создаём категорию "Корзина"
        $trashCategory = Category::firstOrCreate(
            ['name' => 'Корзина'],
            ['href' => 'trash']
        );

        // Перепривязка услуг
        foreach ($category->services as $service) {
            $service->categories()->detach($category->id);

            if (!$service->categories->contains($trashCategory->id)) {
                $service->categories()->attach($trashCategory->id);
            }
        }

        // Удаляем категорию
        $category->delete();

        return redirect()->back()->with('success', 'Категория удалена, услуги перемещены в "Корзину".');
    }
}
