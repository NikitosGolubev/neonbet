@component('mail::message')
# @lang('mails/password-reset-approved.header')

@lang('mails/password-reset-approved.login_suggestion_text'){{ " " }}
[@lang('mails/password-reset-approved.login_suggestion_action')]({{ $login_url }})


@lang('mails/password-reset-approved.wish')


@include('mails.common_blocks.gratitude')
@endcomponent