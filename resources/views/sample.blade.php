<div id="app">
    <example-component></example-component>
    {{app()->getLocale()}}
    {{app()->get()}}
</div>
<script src="{{ mix('/js/app.js') }}" defer></script>
