<ul class="nav nav-tabs">
    <li role="presentation" {{ Active::pattern('admin/office*', 'class="active"') }}>
        <a href="{{ url('admin/office') }}">Офисы</a>
    </li>
    <li role="presentation" {{ Active::pattern('admin/staff*', 'class="active"') }}>
        <a href="{{ url('admin/staff') }}">Сотрудники</a>
    </li>
    <li role="presentation" {{ Active::pattern('admin/schedule*', 'class="active"') }}>
        <a href="{{ url('admin/schedule') }}">Расписания</a>
    </li>
    <li role="presentation" {{ Active::pattern('admin/record*', 'class="active"') }}>
        <a href="{{ url('admin/record') }}">Записи</a>
    </li>
    <li role="presentation" {{ Active::pattern('admin/service*', 'class="active"') }}>
        <a href="{{ url('admin/service') }}">Услуги</a>
    </li>
    <li role="presentation" {{ Active::pattern('admin/client*', 'class="active"') }}>
        <a href="{{ url('admin/client') }}">Клиенты</a>
    </li>
</ul>