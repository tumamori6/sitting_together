@extends('layouts.app')
@section('content')
 <section class="shops-wrap">
  <ul>
   @foreach ($shops as $s)
    <li>
     <a href="{{ route('shop',$s->id) }}">
      <div>
       <p>{{ $s->code }}</p>
       <p>
        <span class="men">
         Mens:<b>{{ $s->mens }}</b>
        </span>
        <span class="women">
         Womens:<b>{{ $s->womens }}</b>
        </span>
       </p>
      </div>
     </a>
    </li>
    <div style="display: none;">
     <?print_r($s)?>
    </div>
   @endforeach
  </ul>
 </section>
@endsection
