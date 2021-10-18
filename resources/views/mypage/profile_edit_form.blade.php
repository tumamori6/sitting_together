@extends('layouts.app')
@section('content')

<br>
<br>

<div class="form-wrap">

 @if (session('status'))
 {{ session('status') }}
 @endif

 <form method="POST" action="{{ route('mypage.edit-profile') }}" enctype="multipart/form-data">

  @csrf
 
  @if (!empty($user->avatar_file_name))
  <img class="user-icon" src="/storage/avatars/{{$user->avatar_file_name}}">
  @else
  <img class="user-icon" src="/img/user-shape.png">
  @endif
  <input type="file" name="avatar" id="avatar" accept="image/png,image/jpeg,image/gif">

  <label for="name">nickname</label>
  <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>
 
  @error('name')
   <b>{{ $message }}</b>
  @enderror
 
  <button type="submit">submit</button>
 
 </form>

</div>

@endsection