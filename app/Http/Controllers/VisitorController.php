<?php

namespace App\Http\Controllers;

use App\Notifications\SuccessfullySignedUp;
use App\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class VisitorController extends Controller
{
    public function signup(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:visitors,email',
            'accept' => 'accepted'
        ], [
            'name.required' => 'Proszę podaj swoje imię',
            'email.required' => 'Wymagany jest poprawny adres email',
            'email.unique' => 'Podany email jest już zajęty',
            'accept.accepted' => 'Musisz wyrazić zgodę na prztewarzanie Twoich danych'
        ]);

        $user = Visitor::create($validated);
        $user->notify(new SuccessfullySignedUp($user));
        return back()->with('success', 'Zostałeś zapisany do newlettera, sprawdź swoją pocztę w celu potwierdzenia.');
    }

    public function confirm($user, $hash)
    {
        $user = Visitor::where([
            'id' => $user,
            'confirmed' => 0
        ])->firstOrFail();
        if (md5($user->created_at) === $hash ) {
            $user->confirmed = true;
            $user->save();
            return View::make('pages.mailing.confirmed');
        } else {
            return View::make('pages.mailing.confirmation_fail');
        }
    }

    public function remove($user, $hash)
    {
        $user = Visitor::where([
            'id' => $user,
            'confirmed' => 1
        ])->firstOrFail();
        if (md5($user->created_at) === $hash ) {
            $user->confirmed = true;
            $user->save();
            return View::make('pages.mailing.removed');
        } else {
            return View::make('pages.mailing.removing_fail');
        }
    }
}
