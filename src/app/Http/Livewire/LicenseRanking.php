<?php

namespace App\Http\Livewire;

use App\Models\License;
use App\Traits\CustomLivewirePagination;
use App\Traits\Livewire\WithPaginationExtended;
use App\Traits\WithFlexiblePagination;
use DB;
use Livewire\Component;
use Livewire\WithPagination;

class LicenseRanking extends Component
{
    use WithPaginationExtended;
    public License $license;
    protected $paginationQueryStringEnabled = false;
    public function mount()
    {

    }
    
    public function render()
    {
        $sub = DB::table('answered_tasks')
            ->join('tasks', 'tasks.id', 'answered_tasks.task_id')
            ->selectRaw('user_id,count(user_id) as count')
            ->groupBy('user_id')
            ->where('license_id', $this->license->id)
            ->where('answered_at', '>', now()->subDays(30))
            ->orderByDesc('count');
    
        $data = DB::table('users')
            ->select('name', 'count')
            ->joinSub($sub, 'sub', function ($join) {
                $join->on('users.id', 'sub.user_id');
            })
            ->orderByDesc('count')
            ->paginate(10);
        return view('livewire.license-ranking', [
            'data' => $data,
        ]);
    }
}
