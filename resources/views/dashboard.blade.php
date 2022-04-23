     {{--<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        __('Dashboard')
        </h2>
    </x-slot> --}}
{{--
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
    -
</x-app-layout>--}}
@extends('layout')
@extends('livewire-layout')
@section('content')

<style>
  .w-5 {
      height: 10px;
  }
</style>
<div class="container" style="margin-top: 100px; margin-top: 30px;">
{{-- 
| email                     | varchar(255)    | NO   | UNI | NULL    |                |
| pais                      | varchar(255)    | YES  |     | NULL    |                |
| estado                    | varchar(255)    | YES  |     | NULL    |                |
| genero                    | varchar(255)    | YES  |     | NULL    |                |
    
    --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                      </div>
                </th>
                <th scope="col">Cliente </th>
                <th scope="col">Genero</th>
                <th scope="col">Pais</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            {{-- inicio de usuarios --}}
            @foreach ($usrs as $item)
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </th>
                <td>{{$item->email}}</td>
                <td>{{$item->pais}}</td>
                <td>{{$item->estado}}</td>
                <td>{{$item->genero}}</td>
            </tr>
            @endforeach
            {{-- final de usuarios --}}
            
        </tbody>
    </table>
</div>
<center style="margin-top:20px; ">

    {{ $usrs->links() }}
</center>
    


@endsection

