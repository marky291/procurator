<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Livewire\Component;

class Search extends Component
{
    public $testUrlResult;
    public $message;
    public Collection $results;
    public Collection $urls;
    public $jsonUrlData;

    public $showSearchModal = false;

    public function mount(){
        $this->results = new Collection;
        $this->urls = new Collection;
        $this-> jsonUrlData = json_decode(file_get_contents(storage_path() . "/siteUrls.json"), true);

        foreach ($this->jsonUrlData["urls"] as $url){
            $this->urls->push($url);
        }
    }

    public function showSearch(){
        $this->showSearchModal = true;
    }

    public function closeSearchModal(){
        $this->showSearchModal = false;
    }

    public function search(){
        $this->results->push($this->message);
        $this->checkMessagePresent();
    }

    public function updatedMessage(){
        $this->search();
    }

    public function checkMessagePresent(){
        $this->testUrlResult = $this->urls->filter(function($url){
            return $url;
        });
    }

    public function render()
    {
        return view("components.search");
    }
}
