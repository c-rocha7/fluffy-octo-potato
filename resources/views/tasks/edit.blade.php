<div>
    <form action="{{ route('tasks.update', $task->id) }}" method="post">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}">
        </div>
        <div>
            <label for="description">Descrição</label>
            <textarea name="description" id="description">{{ $task->description }}</textarea>
        </div>
        <div>
            <label for="status">Status</label>
            <select name="status" id="status">
                <option value="pending" {{ $task->status === 'pending' ? 'selected' : '' }}>Pendente</option>
                <option value="completed" {{ $task->status === 'completed' ? 'selected' : '' }}>Concluída</option>
            </select>
        </div>
        <button type="submit">Salvar</button>
    </form>
</div>

