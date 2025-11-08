@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700 transition-colors duration-200">
        <!-- Header -->
        <div class="px-6 py-4 border-b border-gray-200 dark:border-gray-700">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Editar Tarefa</h2>
            <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">Atualize as informações da tarefa</p>
        </div>

        <!-- Form -->
        <form action="{{ route('tasks.update', $task->id) }}" method="post" class="p-6 space-y-6">
            @csrf
            @method('PUT')

            <!-- Título -->
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Título <span class="text-red-500 dark:text-red-400">*</span>
                </label>
                <input
                    type="text"
                    name="title"
                    id="title"
                    value="{{ old('title', $task->title) }}"
                    required
                    class="w-full rounded-md @error('title') border-red-300 @else border-gray-300 dark:border-gray-600 @enderror shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:text-white"
                    placeholder="Ex: Estudar Laravel">
                @error('title')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Descrição -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Descrição <span class="text-red-500 dark:text-red-400">*</span>
                </label>
                <textarea
                    name="description"
                    id="description"
                    rows="4"
                    required
                    class="w-full rounded-md @error('description') border-red-300 @else border-gray-300 dark:border-gray-600 @enderror shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:text-white"
                    placeholder="Descreva os detalhes da tarefa...">{{ old('description', $task->description) }}</textarea>
                @error('description')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                    Status <span class="text-red-500 dark:text-red-400">*</span>
                </label>
                <select
                    name="status"
                    id="status"
                    required
                    class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">
                    <option value="pending" {{ old('status', $task->status) === 'pending' ? 'selected' : '' }}>Pendente</option>
                    <option value="completed" {{ old('status', $task->status) === 'completed' ? 'selected' : '' }}>Concluída</option>
                </select>
                @error('status')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <!-- Botões -->
            <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
                <a href="{{ route('tasks.show', $task) }}"
                   class="text-sm text-gray-600 dark:text-gray-400 hover:text-white transition">
                    ← Voltar para detalhes
                </a>
                <div class="flex items-center gap-3">
                    <a href="{{ route('tasks.index') }}"
                       class="px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                        Cancelar
                    </a>
                    <button
                        type="submit"
                        class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 dark:bg-indigo-500 dark:hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        Salvar Alterações
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

