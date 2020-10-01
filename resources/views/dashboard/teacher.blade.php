<div class="row">
    <div class="col-xl-4 mol-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">{{ sprintf("%02d", $teacher->classes_count) }} CLASSES</div>
        </div>
    </div>
    <div class="col-xl-4 mol-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">{{ ($teacher->students[0]->students_count) ?? 0 }} STUDENTS</div>
        </div>
    </div>
   
 </div>

<div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full sm:w-1/2 mr-2 mb-6">
            <h3 class="text-gray-700 uppercase font-bold mb-2">Class</h3>
            <div class="flex flex-wrap items-center">
                @foreach ($teacher->classes as $class)
                    <div class="w-full sm:w-1/2 text-center border border-gray-200 rounded">
                        <div class="text-gray-800 uppercase font-semibold px-4 py-4 mb-2">{{ $class->class_name }}</div>
                        <a href="{{ route('teacher.attendance.create',$class->id) }}" class="bg-gray-200 inline-block mb-4 text-xs text-gray-600 uppercase font-semibold px-4 py-2 border border-gray-200 rounded">Attendence</a>
                    </div>
                @endforeach
            </div>
        </div>
        
    </div>
</div> <!-- ./END TEACHER -->