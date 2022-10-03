@extends('layouts.admin')
@section('content')

    <div class="row">
        <div class="card bg-blueGray-100 w-full">
            <div class="card-header">
                <div class="card-row">
                    <h6 class="card-title">My Card</h6>
                    <button
                        class="bg-indigo-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"
                        type="button">
                        Add Card
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="flex py-3 space-x-2">

                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>

    </script>
@endpush
