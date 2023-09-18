@extends('layout.masterdark')
@section('title', 'Profile')

@section('content')

@include('layout.sidebar')

    <div class=" container mr-5" style="margin-top:120px">
        {{-- <a style="margin-left: 150px; margin-top:70px;color:white" href="{{route('pdfItem')}}"><button class="btn btn-dark mb-5 mt-5 ml-5"style="color:white" >Download donations</button> </a> --}}
        {{-- <img src="assets/img/furnishareblack.png" alt="" style="width:100px"> --}}
        @if ($service->count() >0)
    <h3 style="margin-left: 200px">Donations</h3>
    <table class="table mb-5 " style=" width:80%;margin-left:200px">
        <thead class="thead bg-dark" style="color:white;">

                <tr>
                    <th scope="col">Service Name</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">description</th>
                    <th scope="col">time</th>
                    <th scope="col">Date</th>


                </tr>


        </thead>
        <tbody>
            @foreach ($service as $item)
            <tr>
                <td>{{ $item->service->ServiceName}}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->time }}</td>
                <td>{{ $item->Date }}</td>

            </tr>
        @endforeach

        </tbody>

    </table>
    @endif


</div>

@endsection
