<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

abstract class ForgeBase extends Component
{
    public string $forged;

    public string $clipboardTarget;

    public bool $viewImage;

    protected $baseListeners = ['generate', 'generatePNG'];

    abstract public function forge(): string;

    protected function getListeners()
    {
        return array_merge($this->listeners, $this->baseListeners);
    }

    public function mount()
    {
        if ($this->clipboardTarget == 'forge-avatar') {
            $this->viewImage = true;
        }

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
        return view('components.forge-output');
    }
}
