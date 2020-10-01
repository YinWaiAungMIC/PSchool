@extends('layouts.app')

@section('content')
    <div class="roles-permissions">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Timetables</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('timetable.create') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <span class="badge badge-success badge-pill ml-2"  ><i class="fas fa-plus"></i></span>
                    <span class="ml-2 text-xs font-semibold">TimeTable</span>
                </a>
            </div>
        </div>
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                <div class="w-3/12 px-4 py-3">Class</div>
                <div class="w-3/12 px-4 py-3">Teacher</div>
                <div class="w-2/12 px-4 py-3">Day</div>
                <div class="w-2/12 px-4 py-3">Time</div>
                <div class="w-2/12 px-4 py-3 text-right">Action</div>
            </div>
            @foreach ($timetables as $timetable)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $timetable->class->class_name }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $timetable->teacher->user->name }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $timetable->day }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{$timetable->time}}</div>
                    <div class="w-2/12 flex items-center justify-end px-3">
                        <!-- <a href="{{ route('timetable.show',$timetable->id) }}" class="ml-1"><span class="badge badge-success badge-pill ml-2"  ><i class='fas fa-eye'></i></span></a> -->

                        <a href="{{ route('timetable.edit',$timetable->id) }}" class="ml-1"><span class="badge badge-success badge-pill ml-2"><i class="fas fa-edit"></i></span></a>
                    
                        <form action="{{ route('timetable.destroy',$timetable->id)}}" onsubmit="return confirm('Are you sure to delete?')" method="post">
                            @csrf
                            @method('Delete')
                        <button class="btn " type="submit"><span class="badge badge-success badge-pill ml-2"><i class="fas fa-trash-alt"></i></span></button>
                        </form>
                        
                        
                    </div>
                </div>
            @endforeach
        </div>
        

        
    </div>
@endsection

