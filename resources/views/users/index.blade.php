@extends('layouts.main')

@section('app-title', 'All Users')

@section('body')
<div class="container mx-auto p-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
        @foreach ($ready_users as $user)
        <a href="{{ route('users.show', $user->id) }}">
            <div class="bg-blue-100 rounded-md p-1 shadow flex flex-col gap-0.5">                    
                <div>
                    <div class="inline-flex gap-0.5 items-center justify-center">
                        <span class="font-medium text-blue-900 text-xs">{{$user->id}} - </span>
                        <img src="{{ asset('images/user.png') }}" alt="user" class="rounded w-3.5 h-auto">
                        <h2 class="font-medium text-xs">{{$user->name}}</h2>
                    </div>
                        <p class="text-[10px]"><span class="text-blue-950 font-medium">Role: </span>{{$user->roles}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
    </div>
@endsection
