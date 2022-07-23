<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableComponent extends Component
{
    public $myData;
    public $numbers;
    public $grandTotal;
    public $percentages;
    public $length;

    public function __construct($myData)
    {
        $this->myData = $myData;
        // $this->data = json_decode($data);
        // ddd($data);
        // ddd($myData);

        foreach ($this->myData as $val)
        {
            $this->numbers[] = $val[1];
        }

        $this->grandTotal = calculate_sum($this->numbers);
        $this->percentages = calculate_percentages($this->numbers, $this->grandTotal, 1);

        $this->length = count($this->myData);

        // ddd($this->data[0][0]);
        // ddd($this->numbers);
        // ddd($this->data[0]);

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
