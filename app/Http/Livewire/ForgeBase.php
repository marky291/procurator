<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;
use Str;

abstract class ForgeBase extends Component
{
    public string $forged;
    public string $clipboardTarget;

    protected $baseListeners = ['generate'];

    abstract function forge(): string;

    protected function getListeners()
    {
        return array_merge($this->listeners, $this->baseListeners);
    }

    public function mount()
    {
        $this->forged = $this->forge();
    }

    public function generate()
    {
        $this->forged = $this->forge();
    }

    protected function componentView(): string
    {
        return Str::of(class_basename(static::class))->kebab();
    }

    public function render(): View
    {
        return view("livewire.{$this->componentView()}");
    }
}
