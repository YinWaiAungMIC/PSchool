@extends('layouts.app')

@section('content')
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">{{$cname->class_name}} TimeTable </h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('timetable.index') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <span class="badge badge-success badge-pill ml-2"  ><i class="fas fa-arrow-left"></i></span>
                    
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>

        <div class="mt-8 bg-white rounded">
           <table class="table table-bordered">
            
  <thead>
    <tr>
      <th scope="col">Day</th>
      <th scope="col">9:00-10:00</th>
      <th scope="col">10:00-11:00</th>
      <th scope="col">11:00-12:00</th>
      <th scope="col">1:00-2:00</th>
      <th scope="col">2:00-3:00</th>
      
    </tr>
  </thead>
  <tbody>
    
    <tr>
      <th scope="row">Monday</th>
      @foreach ($times as $time)
      @if($time->day=='Monday')
      @if($time->time=='9:00-10:00')
      <td class="bg-success text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
     
      @if($time->day=='Monday')
      @if($time->time=='10:00-11:00')
      <td class="bg-warning text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Monday')
      @if($time->time=='11:00-12:00')
      <td class="bg-secondary text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Monday')
      @if($time->time=='1:00-2:00')
      <td class="bg-danger text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Monday')
      @if($time->time=='2:00-3:00')
      <td class="bg-dark text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
      @endforeach


    </tr>
    
    <tr>
      <th scope="row">Tuesday</th>
      @foreach ($times as $time)
      @if($time->day=='Tuesday')
      @if($time->time=='9:00-10:00')
      <td class="bg-danger text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
     
      @if($time->day=='Tuesday')
      @if($time->time=='10:00-11:00')
      <td class="bg-warning text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Tuesday')
      @if($time->time=='11:00-12:00')
      <td class="bg-dark text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Tuesday')
      @if($time->time=='1:00-2:00')
      <td class="bg-success text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Tuesday')
      @if($time->time=='2:00-3:00')
      <td class="bg-secondary text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
      @endforeach
    </tr>
    <tr>
      <th scope="row">Wednesday</th>
      @foreach ($times as $time)
      @if($time->day=='Wednesday')
      @if($time->time=='9:00-10:00')
      <td class="bg-secondary text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
     
      @if($time->day=='Wednesday')
      @if($time->time=='10:00-11:00')
      <td class="bg-danger text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Wednesday')
      @if($time->time=='11:00-12:00')
      <td class="bg-warning text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Wednesday')
      @if($time->time=='1:00-2:00')
      <td class="bg-secondary text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Wednesday')
      @if($time->time=='2:00-3:00')
      <td class="bg-success text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
      @endforeach
    </tr>
    <tr>
      <th scope="row">Thursday</th>
      @foreach ($times as $time)
      @if($time->day=='Thursday')
      @if($time->time=='9:00-10:00')
      <td class="bg-success text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
     
      @if($time->day=='Thursday')
      @if($time->time=='10:00-11:00')
      <td class="bg-secondary text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Thursday')
      @if($time->time=='11:00-12:00')
      <td class="bg-danger text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Thursday')
      @if($time->time=='1:00-2:00')
      <td class="bg-warning text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Thursday')
      @if($time->time=='2:00-3:00')
      <td class="bg-dark text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
      @endforeach
    </tr>
    <tr>
      <th scope="row">Friday</th>
      @foreach ($times as $time)
      @if($time->day=='Friday')
      @if($time->time=='9:00-10:00')
      <td class="bg-dark text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
     
      @if($time->day=='Friday')
      @if($time->time=='10:00-11:00')
      <td class="bg-warning text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Friday')
      @if($time->time=='11:00-12:00')
      <td class="bg-success text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Friday')
      @if($time->time=='1:00-2:00')
      <td class="bg-warning text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif

      @if($time->day=='Friday')
      @if($time->time=='2:00-3:00')
      <td class="bg-danger text-light">{{$time->teacher->user->name}}<br>{{$time->teacher->subject->name}}</td>
      @endif
      @endif
      
      @endforeach
    </tr>
  </tbody>
</table>
            </div>        
        </div>
        
    </div>
@endsection