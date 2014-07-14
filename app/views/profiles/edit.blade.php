{{ Form::model($user->profile, ['method' =>'patch', 'route' => ['profile.update', $user->username]]) }}

	<h1> Edit Profile </h1>

	<div class="form-group">
		{{ Form::label('location', 'location:') }}
		{{ Form::text('location', null, ['class' => 'form-control']) }}
		{{ errors_for('location', $errors) }}
	</div>

	<div class="form-group">
		{{ Form::label('bio', 'Bio:') }}
		{{ Form::text('bio', null, ['class' => 'form-control']) }}
		{{ errors_for('bio', $errors) }}
	</div>

	<div class="form-group">
		{{ Form::label('twitter_username', 'Twitter:') }}
		{{ Form::text('twitter_username', null, ['class' => 'form-control']) }}
		{{ errors_for('twitter_username', $errors) }}
	</div>

	<div class="form-group">
		{{ Form::label('github_username', 'Github:') }}
		{{ Form::text('github_username', null, ['class' => 'form-control']) }}
		{{ errors_for('github_username', $errors) }}
	</div>


	<div class="form-group">
		{{ Form::submit('Update', ['class' => 'btn btn-primary']) }}
	</div>

{{ Form::close() }}
