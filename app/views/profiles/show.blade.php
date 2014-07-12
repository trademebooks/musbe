<h1> Profile: {{ $user->username }} </h1>
<!--
@if($user->isCurrent())
	{{ link_to_route('profile.edit', 'Edit your profile here', $user->username) }}
@endif
-->

<h3> bio </h3>
<p> {{ $user->profile->bio }} </p>

<h3> twitter account </h3>
<p> {{ $user->profile->twitter_username }} </p>

<h3> github account </h3>
<p> {{ $user->profile->github_username }} </p>