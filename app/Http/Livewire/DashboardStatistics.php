<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Carbon\Carbon;
class DashboardStatistics extends Component
{


    public function __construct()
    {
        if(request()->get('date_from')!=null && request()->get('date_to')!=null){
            $this->date_from = \Carbon::parse(request()->get('date_from'))->format('Y-m-d');
            $this->date_to = \Carbon::parse(request()->get('date_to'))->format('Y-m-d');
            $this->days_between= abs(\Carbon::parse($this->date_from)->diffInDays($this->date_to))>31?31:abs(\Carbon::parse($this->date_from)->diffInDays($this->date_to));
        }else{
            $this->date_from = \Carbon::parse(now())->subDays(7)->format('Y-m-d');
            $this->date_to = \Carbon::parse(now())->format('Y-m-d');
            $this->days_between=7;
        }

        $this->url=request()->get('url');
        $this->prev_url=request()->get('prev_url');
        $this->country_code=request()->get('country_code');
        $this->user_id=request()->get('user_id');
    }

    public function render()
    {

        $data = [
            'top_pages'=>$this->top_pages(),
        ];

        return view('livewire.dashboard-statistics');
    }


    public function top_pages()
    {

    }
}
