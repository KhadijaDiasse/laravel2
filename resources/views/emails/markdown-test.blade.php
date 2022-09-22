@component('mail::message') 
# Bienvenue dans la première Newletter
Cher {{$email}},
Nous sommes impatients de communiquer davantage avec vous. Pour plus d'informations, visitez notre blog.
@component('mail::button', ['url' => 'https://laraveltuts.com']) 
Blog 
@endcomponent
Merci,<br> 
{{ config('app.name') }} 
@endcomponent