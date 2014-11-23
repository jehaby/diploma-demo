

{{ Form::open() }}
{{ Form::label('username') }}
{{ Form::text('username') }}

{{ Form::label('password') }}
{{ Form::password('password') }}

{{ Form::submit('Ok') }}

{{ Form::close() }}
 