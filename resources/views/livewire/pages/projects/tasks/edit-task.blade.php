<div class="mt-3">
    <h1 class="text-2xl">Edit Task &quot;{{ $form->name }}&quot;</h1>

    <section class="mt-3">
        <form wire:submit.prevent="edit" class="w-1/3">
            @csrf
            <div class="form-group">
                <label for="name" class="form-group__label">Task Name</label>
                <input type="text" wire:model="form.name" id="name" class="form-group__input" placeholder="Be clear. e.g. 'Design Login Page UI' ">
            </div>
            <div class="form-group">
                <label for="description" class="form-group__label">Description</label>
                <textarea wire:model="form.description" id="description" cols="30" rows="5" class="form-group__textarea"></textarea>
            </div>
            <div class="form-group">
                <label for="priority" class="form-group__label">Priority</label>
                <select wire:model="form.priority" id="priority" class="form-group__select">
                    <option value="">Select Priority...</option>
                    <option value="low" selected>Low</option>
                    <option value="medium">Medium</option>
                    <option value="high">High</option>
                </select>
            </div>

            <div class="form-group">
                <label for="start_date" class="form-group__label">Start Date</label>
                <input type="date" wire:model="form.start_date" id="start_date" class="form-group__input" min="{{ \Carbon\Carbon::parse($form->start_date)->format('Y-m-d') }}" />
            </div>

            <div class="form-group">
                <label for="due_date" class="form-group__label">Due Date</label>
                <input type="date" wire:model="form.due_date" id="due_date" class="form-group__input" min="{{ \Carbon\Carbon::parse($form->start_date)->format('Y-m-d') }}" />
            </div>

            <div class="form-group">
                <button type="submit" class="button button--primary">Edit Task</button>
            </div>
        </form>
    </section>
</div>
