@extends('layouts.main');

@section('app-title', 'Single Post')

<?php
function color(string $status): string {
    switch ($status) {
        case 'Published': return 'bg-green-600';
        case 'Pending': return 'bg-yellow-400';
        case 'Postponed': return 'bg-pink-500'; 
        case 'Private': return 'bg-gray-800';
        case 'Cancelled': return 'bg-gray-500';
        case 'Rejected': return 'bg-red-500';
        default: return 'bg-white';
    }
}

?>
@section('body')
    <div class="border bg-slate-200 p-1 m-2">
        <div class="flex justify-between">
            <div class="flex gap-3 mb-1">
                <img src="{{asset('images/user.png')}}" alt="user" class="rounded w-5 h-auto">
                <p>{{$post->user->name}}</p>
            </div>
            <div class="{{color($post->post_status->type)}} p-1 rounded text-white">
                <p>{{$post->post_status->type}}</p>
            </div>
        </div>
            <p class="text-center text-blue-900 font-medium">{{$post->title}}</p>
        <div class="p-6 font-mono text-center">
            <p>{{$post->body}}</p>
        </div>
        <div class="flex justify-evenly">
            {{-- <p>{{$post->reactions}}</p> --}}
            {{-- <p>{{$post->comments}}</p> --}}
        </div>
    </div>
@endsection