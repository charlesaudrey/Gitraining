<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Verification\UpdateRequest;
use App\ConfirmToken;
use App\Platform;

class VerificationController extends Controller
{
  protected $token;
  protected $user;
  protected $platforms;

  public function __construct()
  {
    $this->middleware('guest');
  }

  public function organization($token)
  {
    $this->token = ConfirmToken::where('token', $token)->first();
    $this->platforms = Platform::orderBy('counter', 'asc')->get();

    return view('register.verification.organization')
      ->with([
        'token' => $this->token,
        'platforms' => $this->platforms
      ]);
  }

  public function individual($token)
  {
    $this->token = ConfirmToken::where('token', $token)->first();
    $this->platforms = Platform::orderBy('counter', 'asc')->get();

    return view('register.verification.individual')
      ->with([
        'token' => $this->token,
        'platforms' => $this->platforms
      ]);
  }

  public function show($token)
  {
    $this->token = ConfirmToken::where('token', $token)->first();
    $this->platforms = Platform::orderBy('counter', 'asc')->get();

    return view('register.verification.show')
      ->with([
        'token' => $this->token,
        'platforms' => $this->platforms
      ]);
  }

  public function update(UpdateRequest $request, $id)
  {
    $this->token = ConfirmToken::findOrFail($id);
    $this->platform = Platform::findOrFail($request->platform_id);
    
    Auth::login($this->token->user);
    
    $this->createClient($request);

    $this->token->delete();

    return redirect('/home');
  }

  protected function createClient($request)
  {
    $this->client = $this->token->user->client()->create([
      'name' => $this->token->user->name,
      'platform_id' => $request->platform_id,
    ]);

    $this->token->user->update([
      'client_id' => $this->client->id,
      'email_verified_at' => now(),
      'status' => true,
    ]);

    $this->company = $this->client->companies()->create([
      'name' => $request->company_name,
      'address' => $request->company_address,
      'phone' => $request->company_phone,
      'postal_code' => $request->company_postal_code,
      'tin' => $request->company_tin,
      'remarks' => $request->company_remarks,
      'status' => true,
      'client_id' => Auth::user()->client->id,
    ]);

    $this->property = $this->company->properties()->create([
      'name' => $request->property_name,
      'number' => $request->property_number,
      'details' => $request->property_details,
      'status' => true,
      'client_id' => Auth::user()->client->id,
    ]);

    $this->room = $this->property->rooms()->create([
      'name' => $request->room_name,
      'room_number' => $request->room_number,
      'details' => $request->room_details,
      'guest' => $request->room_guest,
      'rate' => $request->room_rate,
      'status' => true,
      'client_id' => Auth::user()->client->id,
    ]);
  }
}
