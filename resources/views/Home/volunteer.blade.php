<div class="section  bg-light" style="">

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <h2 class="heading">Volunteer</h2>
                <p>Volunteering is the art of giving without expecting, the joy of helping without receiving, and the
                    fulfillment of making a difference in someone's life.</p>


            </div>
        </div>
        <div style="text-align: right;margin-right:100px">
           <a href="{{ route('volunteer') }}"><h3 style="color:#59886b;text-decoration: underline;">View All</h3></a>
        </div>
    </div>

    <div class="container">
        <div class="row">

            @foreach ($DonationForms as $form)
                @if ($form->showdonation == 'yes')
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="item" style="margin-bottom: 20px; margin-top: 20px;">
                            <div class="feature bg-color-1"
                                style="border-radius: 10%;  box-shadow: -8px -8px 10px  #d8d8d8; border:1px solid #eee">
                                <img style="border-radius:10%;height: 350px; width:600px"
                                    src="{{ $users->where('id', $form->user_id)->first()->image }}" alt="Image"
                                    class="img-fluid mb-4 ">
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
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="item" style="margin-bottom: 20px; margin-top: 20px;">
                            <div class="feature bg-color-1"
                                style="border-radius: 10%;  box-shadow: -8px -8px 10px  #d8d8d8; border:1px solid #eee">
                                <img style="border-radius:10% ;height: 350px; width:600px" src="assets/img/voo.jpg"
                                    alt="Image" class="img-fluid mb-4 ">
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
</div>
