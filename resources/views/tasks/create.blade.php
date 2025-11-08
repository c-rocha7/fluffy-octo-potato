<div>
    <form action="{{ route('tasks.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" required></textarea>
        </div>
        <div>
            <label for="status">Status:</label>
            <select name="status" id="status" required>
                <option value="pending">Pending</option>
                <option value="completed">Completed</option>
            </select>
        </div>
        <button type="submit">Criar Tarefa</button>
        <a href="{{ route('tasks.index') }}">Cancelar</a>
    </form>
</div>
