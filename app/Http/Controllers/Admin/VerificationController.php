<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\VerifyRequest;
use App\ConfirmToken;

class VerificationController extends Controller
{
    public function __construct() {
      $this->middleware('guest');
    }

    public function show($token) {
      $this->token = ConfirmToken::where('token', $token)->first();

      return view('admin.verification.show')->with(['token' => $this->token]);
    }

    public function update(VerifyRequest $request, $id) {
      $this->token = ConfirmToken::findOrFail($id);

      $this->token->user->update([
        'password' => bcrypt($request->password),
        'email_verified_at' => now(),
        'active' => true,
      ]);

      Auth::login($this->token->user);

      $this->token->delete();

      return redirect('/home');
    }
}
