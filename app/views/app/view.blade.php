@extends('layouts.website')

@section('headers')
	<meta name="robots" content="noindex, nofollow">
@endsection

@section('page')

	<div id="get_password">
		{{ Form::label('decrypt_password', Lang::get('pv.decrypt_password')) }}
		<span class="help">{{ Lang::get('pv.decrypt_password_info') }}</span>
		{{ Form::text('decrypt_password') }}
		{{ Form::button(Lang::get('pv.display_message'), array('id'=>'display_message')) }}
	</div>

	<h3>{{ Lang::get('pv.message') }}</h3>
	<div id="view_body">{{ trim($encrypted_text) }}</div>

@stop