<div wire:poll>
    <div class="container">
        <h3 class=" text-center">

            @if (auth()->user()->email == 'razan.alkateeb0@gmail.com')
                <a class="btn btn-danger" href="{{ Url('delete_chat') }}">Delete Chat</a>
            @endif
            Furnishare
        </h3>
        <div class="messaging">
            <div class="inbox_msg">
                <div class="mesgs">
                    <div id="chat" class="msg_history">
                        @forelse ($messages as $message)

                            @if ($message->user->name == auth()->user()->name)
                                <!-- Reciever Message-->
                                <div class="outgoing_msg">
                                    <div class="sent_msg">
                                        <p>{{ $message->message_text }}</p>
                                        <span class="time_date">
                                            {{ $message->created_at->diffForHumans(null, false, false) }}</span>
                                    </div>
                                </div>

                            @else

                                <div class="incoming_msg">
                                    <div class="incoming_msg_img"> <img
                                            src="{{ $message->user->image }}" alt="sunil" style="width: 100px;height: 60px; border-radius: 50%; "> </div>
                                            {{ $message->user->name }}
                                    <div class="received_msg">
                                        <div class="received_withd_msg">
                                            <p>{{ $message->message_text }}</p>
                                            <span
                                                class="time_date">{{ $message->created_at->diffForHumans(null, false, false) }}</span>
                                        </div>
                                    </div>
                                </div>

                            @endif
                        @empty
                            <h5 style="text-align: center; color:#222"> There are no previous messages</h5>
                        @endforelse

                    </div>
                    <div class="type_msg">
                        <div class="input_msg_write">
                            <form wire:submit.prevent="sendMessage">
                                <input onkeydown='scrollDown()' wire:model.defer="messageText" type="text"
                                    class="write_msg" placeholder="Write the message" />
                                <button class="msg_send_btn btn-primary" type="submit">Send</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
