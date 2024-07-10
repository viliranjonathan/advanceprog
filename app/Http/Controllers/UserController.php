<?php

namespace App\Http\Controller;

use Illusinate\Http\Request;

class UserController extends Controller
{
    public funtion index()(
        return view('user_index');
    )
    public funtion create()(
        return view('user_index');
    )
    public funtion store(Request $request)(
        return $request->all();
    )
    public funtion show(string $id)(
        $data['id'] = $id
        return view('user_show', $data);
    )
    public funtion edit(string $id)(
        $data['id'] = $id
        return view('user_edit', $data);
    )
    public funtion update(Request $request)(
        return $request->all();
    )
    public funtion stire(Request $request)(
        return $request->all();
    )
}