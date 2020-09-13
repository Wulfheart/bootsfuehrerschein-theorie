<?php

namespace App\Http\Livewire;

use App\Models\License;
use App\Traits\Livewire\WithPaginationExtended;
use DB;
use Livewire\Component;
use Livewire\WithPagination;

class LicenseHistory extends Component
{
    use WithPaginationExtended;
    public License $license;
    protected $paginationQueryStringEnabled = false;
    public function mount(){
        // $this->data = DB::table('answered_tasks')
        // ->selectRaw('DATE(answered_at) as date, count(*) as total, sum(answered_correctly) as correct, (count(*)-sum(answered_correctly)) as wrong')
        // ->join('tasks', 'tasks.id', 'answered_tasks.task_id')
        // ->where('license_id', $this->license->id)
        // ->where('user_id', auth()->user()->id)
        // ->orderBy('date')
        // ->groupBy('date')
        // ->paginate(10);
    }
    public function render()
    {
        
        return view('livewire.license-history', [
            'data' => DB::table('answered_tasks')
            ->selectRaw('DATE(answered_at) as date, count(*) as total, sum(answered_correctly) as correct, (count(*)-sum(answered_correctly)) as wrong')
            ->join('tasks', 'tasks.id', 'answered_tasks.task_id')
            ->where('license_id', $this->license->id)
            ->where('user_id', auth()->user()->id)
            ->orderByDesc('date')
            ->groupBy('date')
            ->paginate(10)
        ]);
    }
}
