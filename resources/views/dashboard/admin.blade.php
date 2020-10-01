<div class="row">
    <div class="col-xl-4 mol-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body">{{ sprintf("%02d", count($students)) }} STUDENTS</div>
        </div>
    </div>
    <div class="col-xl-4 mol-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body">{{ sprintf("%02d", count($teachers)) }} TEACHERS</div>
        </div>
    </div>
    <div class="col-xl-4 mol-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">{{ sprintf("%02d", count($parents)) }} PARENTS</div>
        </div>
    </div>
 </div>





<!-- <div class="w-full block mt-8">
    <div class="flex flex-wrap sm:flex-no-wrap justify-between">
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($parents)) }}</span>
                <span class="leading-tight">Parents</span>
            </h3>
        </div>
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 mx-0 sm:mx-6 my-4 sm:my-0 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($teachers)) }}</span>
                <span class="leading-tight">Teachers</span>
            </h3>
        </div>
        <div class="w-full bg-gray-200 text-center border border-gray-300 px-8 py-6 rounded">
            <h3 class="text-gray-700 uppercase font-bold">
                <span class="text-4xl">{{ sprintf("%02d", count($students)) }}</span>
                <span class="leading-tight">Students</span>
            </h3>
        </div>
    </div>
</div> -->