@extends('layout.masterdark')
@section('title', 'Profile')

@section('content')

@include('layout.sidebar')

    <div class=" container mr-5" style="margin-top:120px">
        {{-- <a style="margin-left: 150px; margin-top:70px;color:white" href="{{route('pdfItem')}}"><button class="btn btn-dark mb-5 mt-5 ml-5"style="color:white" >Download donations</button> </a> --}}
        {{-- <img src="assets/img/furnishareblack.png" alt="" style="width:100px"> --}}
        @if ($items->count() >0)
    <h3 style="margin-left: 200px">Donations</h3>
    <table class="table mb-5 " style=" width:80%;margin-left:200px">
        <thead class="thead bg-dark" style="color:white;">
            <tr>
              <th scope="col">ItemName</th>
              <th scope="col">name</th>
              <th scope="col">email</th>
              <th scope="col">phone</th>
              <th scope="col">address</th>
              <th scope="col">description</th>
              <th scope="col">status</th>
              <th scope="col">image</th>


            </tr>
        </thead>
        <tbody>
          @foreach ($items as $item)
          <tr>
              <td>{{ $item->item->ItemName}}</td>
              <td>{{ $item->volunteerName }}</td>
              <td>{{ $item->volunteerEmail }}</td>
              <td>{{ $item->volunteerPhone }}</td>
              <td>{{ $item->volunteerAddress }}</td>
              <td>{{ $item->description }}</td>
              <td>{{ $item->status }}</td>
              <td> <img src="{{$item->image}}" alt="" style="width:120px"> </td>


          </tr>
            @endforeach


        </tbody>

    </table>
    @endif


</div>

@endsection
