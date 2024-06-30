<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;

class NewPortfolio extends Component
{
    public function render()
    {
        return view('livewire.admin.pages.portfolio.new-portfolio');
    }
    use WithFileUploads;

    public $portfolioTitle;
    public $portfolioType;
    public $portfolioAddress;
    public $showDesktop = false;
    public $screenshot;

    protected $rules = [
        'portfolioTitle' => 'required|string|max:255',
        'portfolioType' => 'required|string|max:255',
        'portfolioAddress' => 'required|string|max:255',
        'screenshot' => 'nullable|image|max:1024',
//        'showDesktop' => 'string',
    ];

    public function save()
    {
        $this->validate();

        // Save the data to the database
        $portfolio = new \App\Models\Portfolio();
        $portfolio->title = $this->portfolioTitle;
        $portfolio->type = $this->portfolioType;
        $portfolio->address = $this->portfolioAddress;
        $portfolio->showDesktop = $this->showDesktop;

        if ($this->screenshot) {
            $portfolio->screenShot = $this->screenshot->store('screenshots', 'public');
        }

        $portfolio->save();

        session()->flash('message', 'پورتفولیو با موفقیت ذخیره شد.');
    }

}
