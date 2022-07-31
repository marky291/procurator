<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

abstract class ForgeBase extends Component
{
    public string $forged;

    public bool $viewImage;

    protected $baseListeners = ['generate', 'generatePNG'];

    abstract public function forge(): string;

    protected function getListeners()
    {
        return array_merge($this->listeners, $this->baseListeners);
    }

    public function mount()
    {
        if ($this->clipboardTarget() == 'forge-avatar') {
            $this->viewImage = true;
        }

        $this->forged = $this->forge();
    }

    public function generate()
    {
        $this->forged = $this->forge();
    }

    public function clipboardTarget(): string
    {
        return $this->kebabedClassname();
    }

    public function anchor(): string
    {
        return 'link-' . $this->kebabedClassname();
    }

    public function kebabedClassname()
    {
        return Str::of(class_basename(static::class))->kebab();
    }

    public function render(): View
    {
        return view('components.forge-output');
    }
}
