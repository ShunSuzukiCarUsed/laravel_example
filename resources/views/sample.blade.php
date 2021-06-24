<div id="app">
    <example-component></example-component>
    {{app()->getLocale()}}
    @lang('passwords.reset')
</div>
<script src="{{ mix('/js/app.js') }}" defer></script>
