@component('mail::message')
# Your post was liked

{{ $liker->name }} liked one of your posts

@component('mail::button', ['url' => route('posts.show', $post)])
    View post
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent
