<x-forge>
    <x-forge-heading>Cat Image</x-forge-heading>
    <x-forge-container>
        <x-forge-header>
            <x-forge-button-generate>Generate</x-forge-button-generate>
            <x-forge-button-dimensions model-width="customWidth" model-height="customHeight"/>
            <x-forge-button-download on-click="downloadImage">Download PNG</x-forge-button-download>
            <x-forge-button-copy-image on-click="copyCatImage">Copy</x-forge-button-copy-image>
        </x-forge-header>
        <x-forge-image/>
    </x-forge-container>
    <script>
        document.addEventListener('livewire:load', function () {
            Livewire.on('catImagedCopied', data => {
                const img = new Image
                const c = document.createElement('canvas')
                const ctx = c.getContext('2d')

                function setCanvasImage(path,func){
                    img.onload = function(){
                        c.width = this.naturalWidth
                        c.height = this.naturalHeight
                        ctx.drawImage(this,0,0)
                        c.toBlob(blob=>{
                            func(blob)
                        },'image/png')
                    }
                    img.src = path
                }

                setCanvasImage(data,(imgBlob)=>{
                    console.log('doing it!')
                    console.log(imgBlob);
                    navigator.clipboard.write(
                        [
                            new ClipboardItem({'image/png': imgBlob})
                        ]
                    )
                    .then(e=>{console.log('Image copied to clipboard')})
                    .catch(e=>{console.log(e)})
                })
            })
        })
    </script>

</x-forge>
