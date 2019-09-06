@component('mail::message')
# @lang('mails/account-verification-request.header')

@lang('mails/account-verification-request.confirmation_text')

@component('mail::button', ['url' => $verify_url])
    @slot('color', 'success')
    @slot('align', 'center')

    <b>@lang('mails/account-verification-request.confirm_action')</b>
@endcomponent

@lang('mails/account-verification-request.reset_text')<br />

[@lang('mails/account-verification-request.reset_action')]($reset_url)


@include('mails.common_blocks.gratitude')
@endcomponent