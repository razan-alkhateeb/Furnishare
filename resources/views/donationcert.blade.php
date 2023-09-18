@extends('layout.masterdark')
@section('title', 'Profile')

@section('content')

@include('layout.sidebar')

    <div class=" container mr-5" style="margin-top:120px">
        {{-- <a style="margin-left: 150px; margin-top:70px;color:white" href="{{route('pdf')}}"><button class="btn btn-dark mb-5 mt-5 ml-5"style="color:white" >Download donations</button> </a> --}}
        {{-- <img src="assets/img/furnishareblack.png" alt="" style="width:100px"> --}}
        @if ($Donation->count() >0)
    <h3 style="margin-left: 200px">Donations</h3>
    <table class="table mb-5 " style=" width:80%;margin-left:200px">
        <thead class="thead bg-dark " style="color:white;">
            <tr>
                <th scope="col">Donation Name</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone</th>
                <th scope="col">price</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($Donation as $item)
                <tr>
                    <td>{{ $item->donation->DonationName }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->price }}</td>


                </tr>
            @endforeach


        </tbody>

    </table>
    @endif


</div>

@endsection
