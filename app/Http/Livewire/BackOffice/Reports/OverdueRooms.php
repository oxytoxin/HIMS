<?php

namespace App\Http\Livewire\BackOffice\Reports;

use Livewire\Component;
use App\Models\CleaningHistory;

class OverdueRooms extends Component
{
    public $date = null;

    public $shift = null; // AM = 8:00 AM - 8:00 PM, PM = 8:00 PM - 8:00 AM

    public function render()
    {
        return view('livewire.back-office.reports.overdue-rooms', [
            'cleaningHistories' => $this->date ? CleaningHistory::whereHas('room', function ($query) {
                $query->where('branch_id', auth()->user()->branch_id);
            })
                ->whereDelayedCleaning(true)
                ->when($this->date, function ($query) {
                    if ($this->shift == 'AM') {
                        $query->whereBetween('created_at', [
                            \Carbon\Carbon::parse($this->date)->format('Y-m-d 08:00:00'), 
                            \Carbon\Carbon::parse($this->date)->format('Y-m-d 19:59:59')
                        ]);
                    } else if ($this->shift == 'PM') {
                        $nextDay = \Carbon\Carbon::parse($this->date)->addDay()->format('Y-m-d 07:59:59');
                        $query->whereBetween('created_at', [
                            \Carbon\Carbon::parse($this->date)->format('Y-m-d 20:00:00'), 
                            $nextDay
                        ]);
                    } else {
                        $nextDay = \Carbon\Carbon::parse($this->date)->addDay()->format('Y-m-d 07:59:59');
                        $query->whereBetween('created_at', [\Carbon\Carbon::parse($this->date)->format('Y-m-d 08:00:00'), $nextDay]);
                    }
                })
                ->get() : [],
        ]);
    }
}
