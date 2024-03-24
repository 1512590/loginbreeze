<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message')}}
    </div>
    @endif
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col-lg-6 p-5 ">Id</th>
                    <th scope="col-lg-6 p-5 ">Name</th>
                    <th scope="col-lg-6 p-5 ">Phone</th>
                    <th scope="col-lg-6 p-5 ">Email</th>
                    <th scope="col-lg-6 p-5 ">Date</th>
                    <th scope="col-lg-6 p-5 ">Time</th>
                    <th scope="col-lg-6 p-5 ">Complaints</th>
                    <th scope="col-lg-6 p-5 ">Action</th>
                </tr>
            </thead>
            <tbody>
                @if (count($contact) > 0)
                    @foreach ($contact as $cont)
                        <tr>
                            <th>{{ $cont->id }}</th>
                            <th>{{ $cont->name }}</th>
                            <th>{{ $cont->phone }}</th>
                            <th>{{ $cont->email }}</th>
                            <th>{{ $cont->date }}</th>
                            <th>{{ $cont->time }}</th>
                            <th>{{ $cont->Complaints }}</th>
                            <th><a href="/edit/{{ $cont->id }}" class="btn btn-primary">Edit</a>
                                <a href="/delete/{{ $cont->id }}" class="btn btn-danger">Delete</a>
                            </th>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th>No Data</th>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
