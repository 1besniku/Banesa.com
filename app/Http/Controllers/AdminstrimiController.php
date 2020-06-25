<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\ValidationEmailUser;
use App\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminstrimiController extends Controller
{
    //

    public function index()
    {
        $useradmin = User::where('is_admin', '=', '1')->get();
        $user = User::where('is_admin', '=', '0')->get();
        return view('Administrimi.index', compact('useradmin', 'user'));
    }

    public function adduser()
    {
        return view('Administrimi.addUser');
    }

    public function search(Request $request)
    {
        //dd($request);
        $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
        ]);

        $kerko = User::where('name', 'LIKE', '%' . $request->name . '%')->orWhere('name', 'LIKE', '%' . $request->surname . '%')->get();


        return view('Administrimi.search-admin', compact('kerko'));
    }

    public function addUser_store(Request $request)
    {
        //dd($request);

        $request->validate([
                'name' => ['required', 'min:2'],
                'surname' => ['required', 'min:2'],
                'email' => ['required', 'email', new ValidationEmailUser],
                'password' => ['required', 'min:6'],
                'confirmpassword' => ['required_with:password', 'same:password', 'min:6']

            ]
        );

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'is_admin' => 1,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/administrimi');

    }
    public function edit($id){
       // dd($id);

        $user = User::find($id);

        return view('Administrimi.edit', compact('user'));
    }
    public function update(Request $request, User $user, $id)
    {
        //dd($request);
        $data = $request->validate([
            'name' => 'sometimes|required|min:3',
            'surname' => 'sometimes|required|min:3',
            'email' => 'required|email',
            'password' => 'nullable|min:6|',
            'confirmpassword' => 'nullable|required_with:password|same:password|min:6',
        ]);

        $user = User::find($id);
        //$user->update($request->all())
        if ($request->password == null) {
            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'number_sms' => $request->number_sms,
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'email' => $request->email,
                'number_sms' => $request->number_sms,
                'password' => Hash::make($request->password),
            ]);
        }


        return redirect('/administrimi');
    }
    public function destroy($id)
    {

        $user = User::find($id);
        $user->delete();

        return redirect('/administrimi');
    }

}
