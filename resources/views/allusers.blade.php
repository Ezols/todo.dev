@foreach ($users as $user)
     <p>Nikneims - {{ $user->remember_token }} | Vārds - {{ $user-> name}} | paroles - {{ $user-> password }}</p>
@endforeach