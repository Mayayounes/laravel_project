@extends('layouts.main')

@section('app-title', 'Single User')
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
<div class="container mx-auto p-6">
            <a href="{{route('users.show',$user->id)}}">
                <div class="bg-blue-100 rounded-md p-4 shadow-md flex flex-col gap-3 min-h-[150px]">
                    <div>
                        <div class="flex gap-1 items-center justify-center">
                            <span class="font-bold text-blue-900">{{$user->id}} - </span>
                            <img src="{{asset('images/user.png')}}" alt="user" class="rounded w-5 h-auto">
                            <h2 class="font-bold">{{$user->name}}</h2>
                        </div>
                        <p><span class="text-blue-950">Role: </span>{{$user->roles}}</p>
                        <p><span class="text-blue-950">Mobile: </span>{{$user->mobile}}</p>
                        <p><span class="text-blue-950">Email: </span>{{$user->email}}</p>
                    </div>
                    <div>
                        @foreach ($user->posts as $post)
                            @include('components.1post');
                        @endforeach
                    </div>
                </div>
            </a>
    </div>
</div>
@endsection
