@extends('layouts.app')

@section('content')
    <div class="roles-permissions">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold text-danger">Students</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('student.create') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Student</span>
                </a>
            </div>
        </div>
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                <div class="w-3/12 px-4 py-3">Name</div>
                <div class="w-3/12 px-4 py-3">Email</div>
                <div class="w-2/12 px-4 py-3">Class</div>
                <div class="w-2/12 px-4 py-3">Phone</div>
                <div class="w-2/12 px-4 py-3 text-right">Action</div>
            </div>
            @foreach ($students as $student)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $student->user->name }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $student->user->email }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $student->class->class_name ?? '' }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $student->phone }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3">
                        <a href="{{ route('student.show',$student->id) }}" class="ml-1"><span class="badge badge-success badge-pill ml-2"  ><i class='fas fa-eye'></i></span></a>

                        <a href="{{ route('student.edit',$student->id) }}" class="ml-1"><span class="badge badge-success badge-pill ml-2"><i class="fas fa-edit"></i></span></a>
                    
                        <form action="{{ route('student.destroy',$student->id)}}" onsubmit="return confirm('Are you sure to delete?')" method="post">
                            @csrf
                            @method('Delete')
                        <button class="btn btn-danger" type="submit"><span class="badge badge-success badge-pill ml-2"><i class="fas fa-trash-alt"></i></span></button>
                        </form>
                        
                        
                    </div>
                </div>
            @endforeach
        </div>
        

        
    </div>
@endsection

