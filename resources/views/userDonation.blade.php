@extends('layout.masterdark')
@section('title', 'Profile')

@section('content')
<div class="container" style="margin-top: 150px; ">
    <div class="row" style="margin-bottom: 100px">
        @foreach ($DonationForms as $form)
        @if ($form->showdonation=='yes')
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" >
            <div class="item" style="margin-bottom: 20px; margin-top: 20px;" >
                <div class="feature bg-color-1" style="border-radius: 10%;  box-shadow: -8px -8px 10px  #d8d8d8; border:1px solid #eee">
                    <img style="border-radius:10%;height: 340px; width:360px" src="{{ $users->where('id', $form->user_id)->first()->image }}" alt="Image"
                        class="img-fluid mb-4 " >
                    <div class="row">
                        <div class="col-xl-7">
                            <h3 class="mb-0">{{ $users->where('id', $form->user_id)->first()->name }}</h3>
                        </div>
                        <div class="col-xl-4" style="padding-left:30px">
                            <h3 class="mb-0" style="color:#59886b">{{ $form->price }}JD</h3>
                        </div>
                    </div>
                    <p class="text-black-50" style="padding-left: 15px">
                        {{ $donations->where('id', $form->donation_id)->first()->DonationName }}
                    </p>
                </div>
            </div>
        </div>
        @else
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="100" >
            <div class="item" style="margin-bottom: 20px; margin-top: 20px;" >
                <div class="feature bg-color-1" style="border-radius: 10%;  box-shadow: -8px -8px 10px  #d8d8d8; border:1px solid #eee">
                    <img style="border-radius:10% ;height: 340px; width:360px" src="assets/img/voo.jpg" alt="Image"
                        class="img-fluid mb-4 " >
                    <div class="row">
                        <div class="col-xl-7">
                            <h3 class="mb-0">Anonymous</h3>
                        </div>
                        <div class="col-xl-4" style="padding-left:30px">
                            <h3 class="mb-0" style="color:#59886b">{{ $form->price }}JD</h3>
                        </div>
                    </div>
                    <p class="text-black-50" style="padding-left: 15px">
                        {{ $donations->where('id', $form->donation_id)->first()->DonationName }}
                    </p>
                </div>
            </div>
        </div>
        @endif

        @endforeach
    </div>
</div>
@endsection
