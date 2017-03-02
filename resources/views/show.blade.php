
ID: {{$user->id}}<br/>
Name: {{$user->name}}<br/>
Emails: {{$user->email}}<br/>
Password: {{$user->password}}<br/>
Tokken: {{$user->remember_token}}<br/>
Created: {{$user->created_at}}

<a href="{{ url('/user') }}" ><p>BACK</p></a>

