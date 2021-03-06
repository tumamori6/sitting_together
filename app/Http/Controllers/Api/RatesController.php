<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Http\Controllers\Controller;

class RatesController extends Controller
{
 /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
 public function update(Request $request, $id)
 {
  $rate = Rate::find($id);
  // $rate->mens = $request->mens;
  // $rate->womens = $request->womens;
  // $rate->save();
  $rate->fill($request->all())->save();
  return redirect('api/rates/'.$id);
 }
}
