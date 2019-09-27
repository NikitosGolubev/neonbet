@component('mail::message')
# @lang('mails/password-reset-attempt-created.header')

@lang('mails/password-reset-attempt-created.ip_reveal_text')
<b class="text_primary">{{ $requested_ip }}</b>

# @lang('mails/password-reset-attempt-created.approve_header')

@lang('mails/password-reset-attempt-created.approve_text')

@component('mail::button', ['url' => $approve_url])
    @slot('color', 'secondary')
    @slot('align', 'center')

    <b>@lang('mails/password-reset-attempt-created.approve_action_text')</b>
@endcomponent

# @lang('mails/password-reset-attempt-created.report_header')

@lang('mails/password-reset-attempt-created.report_text')


<b class="text_danger">
@lang('mails/password-reset-attempt-created.report_ban_warn')
</b>

<small>
@lang('mails/password-reset-attempt-created.cancel_recommendation')
</small>

@component('mail::button', ['url' => $report_url])
    @slot('color', 'danger')
    @slot('align', 'center')

    <b>@lang('mails/password-reset-attempt-created.report_action') </b>
@endcomponent


@include('mails.common_blocks.gratitude')
@endcomponent