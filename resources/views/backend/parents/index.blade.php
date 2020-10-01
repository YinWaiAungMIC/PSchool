@extends('layouts.app')

@section('content')
    <div class="roles-permissions">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Parents</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('parents.create') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <span class="badge badge-success badge-pill ml-2"  ><i class="fas fa-plus"></i></span>
                    <span class="ml-2 text-xs font-semibold">Parents</span>
                </a>
            </div>
        </div>
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                <div class="w-3/12 px-4 py-3">Name</div>
                <div class="w-3/12 px-4 py-3">Email</div>
                <div class="w-2/12 px-4 py-3">Children</div>
                <div class="w-2/12 px-4 py-3">Phone</div>
                <div class="w-2/12 px-4 py-3 text-right">Action</div>
            </div>
            @foreach ($parents as $parent)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $parent->user->name }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $parent->user->email }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                        @foreach ($parent->children as $children)
                            <span class="bg-gray-200 text-xs font-normal px-2 py-px border rounded-full inline-flex my-px">
                                {{ $children->user->name }}
                            </span>
                        @endforeach
                    </div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $parent->phone }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3">
                        <a href="{{ route('parents.show',$parent->id) }}" class="ml-1"><span class="badge badge-success badge-pill ml-2"  ><i class='fas fa-eye'></i></span></a>

                        <a href="{{ route('parents.edit',$parent->id) }}" class="ml-1"><span class="badge badge-success badge-pill ml-2"><i class="fas fa-edit"></i></span></a>
                    
                        <form action="{{ route('parents.destroy',$parent->id)}}" onsubmit="return confirm('Are you sure to delete?')" method="post">
                            @csrf
                            @method('Delete')
                        <button class="btn" type="submit"><span class="badge badge-success badge-pill ml-2"><i class="fas fa-trash-alt"></i></span></button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $parents->links() }}
        </div>

        @include('backend.modals.delete',['name' => 'parent'])
    </div>
@endsection

@push('scripts')
<script>
    $(function() {
        $( ".deletebtn" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
            var url = $(this).attr('data-url');
            $(".remove-record").attr("action", url);
        })        
        
        $( "#deletemodelclose" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
        })
    })
</script>
@endpush