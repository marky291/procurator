<x-forge>
    <x-forge-heading>Cat Image</x-forge-heading>
    <x-forge-container>
        <x-forge-header>
            <x-forge-button-generate>Generate</x-forge-button-generate>
            <x-forge-button-dimensions model-width="customWidth" model-height="customHeight"/>
            <x-forge-button-download on-click="downloadImage">Download PNG</x-forge-button-download>
            <x-forge-button-copy>Copy Base64</x-forge-button-copy>
        </x-forge-header>
        <x-forge-avatar/>
    </x-forge-container>
</x-forge>
