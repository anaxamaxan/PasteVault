@extends('layouts.website')

@section('page')

	{{ Form::open(array('id'=>'create_form'), true) }}

		{{ Form::honeypot('first_name', 'first_name_time') }}

		{{ Form::label('textbox', Lang::get('pv.text'), array('class'=>'required')) }}
		<span class="help">{{ Lang::get('pv.text_info') }}</span>
		{{ Form::textarea('textbox') }}

		{{ Form::label('password', Lang::get('pv.shared_password'), array('class'=>'required')) }}
		<span class="help">{{ Lang::get('pv.shared_password_info') }}</span>
		{{ Form::text('password') }}

		{{ Form::button(Lang::get('pv.submit'), array('id'=>'encode_button','type'=>'submit', 'class'=> 'nice_button green')) }}

		{{ Form::label('expire', Lang::get('pv.expire_after')) }}
		{{ Form::select('expire', Config::get('pv.minutes'), '720') }}			

		{{ Form::hidden('text', '', array('id'=>'text')) }}
	{{ Form::close() }}

	<div id="sponsor">
		{{ Lang::get('pv.builtby') }}
	</div>	
			
	<div id="results" class="reveal-modal">
		<p>{{ Lang::get('pv.modal_message') }}</p>
		
		{{ Form::textarea('copy_text', '', array('id'=>'copy_text')) }}
		{{ Form::button(Lang::get('pv.copy_to_clipboard'), array('id'=>'copy_button', 'class'=>'nice_button green')) }}

	</div>
	
	<div id="copied"><h2>Copied!</h2></div>
	<div id="error"><h2>Error :(</h2></div>

	<script type="text/template" id="response_template">
		{{ Lang::get('pv.copymessage') }}
	</script>
@stop