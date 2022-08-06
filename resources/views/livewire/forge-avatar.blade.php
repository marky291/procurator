<x-forge>
    <x-forge-heading>Avatar Initials</x-forge-heading>
    <x-forge-container>
        <x-forge-header>
            <x-forge-button-generate>Generate</x-forge-button-generate>
            <x-forge-button-download on-click="downloadImage">Download PNG</x-forge-button-download>
            <x-forge-button-copy-image  on-click="copyAvatarImage">Copy</x-forge-button-copy-image>
        </x-forge-header>
        <x-forge-image/>
    </x-forge-container>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('avatarImagedCopied', data => {
                async function copyPicture(imageData) {
                    try {
                        const response = await fetch(imageData);
                        const blob = await response.blob();
                        await navigator.clipboard.write([
                        new ClipboardItem({
                            [blob.type]: blob
                        })
                        ]);
                        console.log('Image copied.');
                    } catch (err) {
                        console.error(err.name, err.message);
                    }
                };
                copyPicture(data);
            })
        })
    </script>

</x-forge>

