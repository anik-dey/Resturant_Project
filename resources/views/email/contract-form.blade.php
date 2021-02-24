@component('mail::message')
# Thank You For Your Message
<strong>Name</strong>{{$data['name']}}
<strong>Email</strong>{{$data['email']}}
<strong>Subject</strong>{{$data['subject']}}
<strong>Message</strong>{{$data['message']}}
@endcomponent
