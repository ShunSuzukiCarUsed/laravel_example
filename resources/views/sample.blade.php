<div id="app">
    <example-component></example-component>
    {{app()->getLocale()}}
    <div>

        @if (count($users) > 0)
            <p>{{ ($users->currentPage() - 1) * $users->perPage() + 1 }} ~
                {{ (($users->currentPage() - 1) * $users->perPage() + 1) + (count($users) - 1) }}
                {{ $users->total() }}件中</p>
        @else
            <p>データがありません。</p>
        @endif

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
