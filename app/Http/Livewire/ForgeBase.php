<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

abstract class ForgeBase extends Component
{
    public string $forged;

    public string $clipboardTarget;

    public string $component;

    public bool $viewImage;

    public $customWidth;

    public $customHeight;

    protected $baseListeners = ['generate', 'generatePNG'];

    abstract public function forge(): string;

    protected function getListeners()
    {
        return array_merge($this->listeners, $this->baseListeners);
    }

    public function mount()
    {
        if ($this->clipboardTarget == 'forge-avatar' || $this->clipboardTarget == 'forge-cat') {
            $this->viewImage = true;
        }

        $this->forged = $this->forge();
    }

    public function generate()
    {
        error_log($this->customWidth);
        error_log($this->customHeight);
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
