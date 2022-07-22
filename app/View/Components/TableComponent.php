<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableComponent extends Component
{
    public $data;
    public $numbers;
    public $grand_total;
    public $percentages;
    public $length;

    public function __construct($data)
    {
        $this->data = $data;

        foreach ($this->data as $val)
        {
            $this->numbers[] = $val[1];
        }

        $this->grand_total = calculate_sum($this->numbers);
        $this->percentages = calculate_percentages($this->numbers, $this->grand_total, 1);

        $this->length = count($this->data);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.table-component');
    }
}
