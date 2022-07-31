<?php

namespace App\Http\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

abstract class ForgeBase extends Component
{
    public string $forged;

    abstract public function forge(): string;

    // generate on page load.
    public function mount()
    {
        $this->forged = $this->forge();
    }

    // generate on generate button click..
    public function generate()
    {
        error_log($this->customWidth);
        error_log($this->customHeight);
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

    public function kebabedClassname(): string
    {
        return Str::of(class_basename(static::class))->kebab();
    }

    public function render(): View
    {
        return view('components.forge-output');
    }
}
