<?php

namespace App\Livewire;

use App\Models\Media;
use Livewire\Component;
use Livewire\WithPagination;

class MediaPickerModal extends Component
{
    use WithPagination;

    public ?int $selected = null;
    public string $search = '';
    public string $statePath = '';

    protected $listeners = ['open-media-picker' => 'openModal'];

    public function openModal(string $statePath): void
    {
        $this->statePath = $statePath;
        $this->selected = null;
        $this->dispatch('open-modal', id: 'media-picker-modal');
    }

    public function selectMedia(int $id): void
    {
        $this->selected = $id;
    }

    public function confirm(): void
    {
        $this->dispatch('media-selected', id: $this->selected, statePath: $this->statePath);
        $this->dispatch('close-modal', id: 'media-picker-modal');
    }

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.media-picker-modal', [
            'media' => Media::query()
                ->when($this->search, fn ($q) => $q->where('filename', 'like', "%{$this->search}%"))
                ->latest()
                ->paginate(12),
        ]);
    }
}
