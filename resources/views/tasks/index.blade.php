<div>
    <a href="{{ route('tasks.create') }}">Criar Nova Tarefa</a>
</div>

<div>
    <form action="{{ route('tasks.index') }}" method="get">
        <select name="status" id="" onchange="this.form.submit()">
            <option value="">All</option>
            <option value="pending" {{ request('status') === 'pending' ? 'selected' : '' }}>Pending</option>
            <option value="completed" {{ request('status') === 'completed' ? 'selected' : '' }}>Completed</option>
        </select>
        @if (request('status'))
            <a href="{{ route('tasks.index') }}">
                Limpar Filtro
            </a>
        @endif
    </form>
</div>

@if ($tasks->count() > 0)
    @foreach ($tasks as $task)
        <div>
            <p>{{ $task->title }}</p>
            <p>{{ $task->status }}</p>
            <p>{{ $task->created_at->format('d/m/Y H:i') }}</p>
            <p><a href="{{ route('tasks.edit', $task) }}">Editar</a></p>
            <form action="{{ route('tasks.destroy', $task) }}" method="post"
                onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?');">
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </div>
        <hr>
    @endforeach
@else
    Nenhuma tarefa encontrada.
@endif
