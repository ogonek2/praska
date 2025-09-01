<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\B2b;
use App\Models\content;

class B2bController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.admin_pages.b2b', [
            'b2b_data' => B2b::with('contents')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $req)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $validator = $req->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);

        $imageSave = 'Empty';

        if ($req->hasFile('banner')) {
            $customName = generate_random_code(12) . '.' . $req->file('banner')->getClientOriginalExtension();
            $imageSave = $req->file('banner')->storeAs('sources/b2b_icons', $customName, 'public');
        }

        B2b::create([
            'name' => $req->name,
            'title' => $req->title,
            'banner' => $imageSave,
        ]);

        return redirect()->back()->with('success', 'B2B создан успешно!');
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
        //
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
        $b2b = B2b::find($id);

        if (!$b2b) {
            return redirect()->back()->with('error', 'Запис не знайдено');
        }

        if ($req->form_type == 'canonical') {
            $existingContent = $b2b->contents()->first(); // получаем первую связанную запись

            if ($existingContent) {
                // Обновляем существующую
                $existingContent->update([
                    'keys' => $req->keys ?? null,
                    'description' => $req->description ?? null,
                    'content' => $req->value ?? null,
                ]);
            } else {
                // Создаем новую и прикрепляем
                $b2bContent = content::create([
                    'keys' => $req->keys ?? null,
                    'description' => $req->description ?? null,
                    'content' => $req->value ?? null,
                ]);
                $b2b->contents()->attach($b2bContent->id);
            }

            return redirect()->back()->with('success', 'B2B оновлено успішно!');
        }


        if ($req->hasFile('banner')) {
            $customName = generate_random_code(12) . '.' . $req->file('banner')->getClientOriginalExtension();
            $imageSave = $req->file('banner')->storeAs('sources/b2b_icons', $customName, 'public');

            $b2b->update([
                'banner' => $imageSave,
            ]);
        } elseif (!empty(trim($req->title)) || !empty(trim($req->name))) {
            $b2b->update([
                'name' => $req->name,
                'title' => $req->title,
            ]);
        } else {
            return redirect()->back()->with('error', 'Жодне поле не заповнене.');
        }

        return redirect()->back()->with('success', 'B2B оновлено успішно!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        B2b::find($id)->delete();

        return redirect()->back();
    }
}
