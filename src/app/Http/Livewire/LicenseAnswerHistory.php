<?php

namespace App\Http\Livewire;

use App\Models\License;
use App\Traits\Livewire\WithPaginationExtended;
use Livewire\Component;

class LicenseAnswerHistory extends Component
{
    use WithPaginationExtended;

    public License $license;
    public function render()
    {
        $data = $this->license->answeredTasks()
            ->currentUser()
            ->orderByDesc('answered_at')
            ->with('task')
            ->paginate(10);
        return view('livewire.license-answer-history', [
            'data' => $data
        ]);
    }
}
