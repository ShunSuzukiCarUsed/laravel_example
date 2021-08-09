<div id="app">
    <example-component></example-component>
    {{app()->getLocale()}}
    <div>
        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Create Time</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->crttime }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $users->links('pagination') }}
    @lang('passwords.reset')
</div>
<script src="{{ mix('/js/app.js') }}" defer></script>
