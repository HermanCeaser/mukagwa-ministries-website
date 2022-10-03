@component('mail::message')
    Hey there, its <span class="text-bold">{{ $name }}</span> contacting you from Mukagwa Ministries website contact
    Page.

    Below is what i wanted to talk to you about: <br>

    {!! $message !!} <br>

    Feel free to contact me at {{ $email }} for more Infomation. <br><br>

    Thanks,<br>
    {{ $name }}
@endcomponent
