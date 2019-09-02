@extends('_layouts.master')

@section('body')

<div class="container mx-auto text-center">
  <div class="flex flex-col items-center text-white justify-center h-screen">
    <div class="flex flex-col items-center">
      <img class="w-32 h-32 rounded-full border border-solid" src="/assets/images/profile.jpg" alt="Profile Picture"/>

      <h1 class="mt-4 text-5xl">Tim Redman</h1>

      <p class="font-light">Senior Developer at <a href="https://www.brightblueday.com" title="BrightBlueDay" class="text-pink-700 font-medium">BrightBlueDay</a></p>
    </div>
  </div>
</div>
@endsection
