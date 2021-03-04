@extends('layouts.app')

@section('content')
  
  <div class="flex justify-between">
    <div>
      @include('_sidebar-links')
    </div>
    
    <div class="flex-1 lg:mx-4" >
      <div class="border border-blue-400 rounded-lg p-8 mb-6">
        @include('_publish-tweet-panel')
      </div>
      <div class="border border-gray-300 rounded-lg">
        @include('_tweet')
        @include('_tweet')
        @include('_tweet')
        @include('_tweet')
        
      </div>
    </div>

    <div class="bg-blue-100 rounded-lg p-4">
      @include('_friends-list')
    </div>
  </div>
@endsection