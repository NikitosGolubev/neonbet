@component('mail::message')
# @lang('mails/account-verified.header')

@lang('mails/account-verified.verification_success_text')


@lang('mails/account-verified.login_suggestion_text'){{ " " }}
[@lang('mails/account-verified.login_suggestion_action')]({{ $login_url }})


@include('mails.common_blocks.gratitude')
@endcomponent