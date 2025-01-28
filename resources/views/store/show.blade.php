@extends('layouts.app')

@section('content')
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Store list table</h4>
            </div>
            <div class="card-tools">
            <button class="btn btn-primary" id="downloadQR" data-name="{{ $name }}">
                    
            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                    <path d="M12.1221 15.436L12.1221 3.39502" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M15.0381 12.5083L12.1221 15.4363L9.20609 12.5083" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                    <path d="M16.7551 8.12793H17.6881C19.7231 8.12793 21.3721 9.77693 21.3721 11.8129V16.6969C21.3721 18.7269 19.7271 20.3719 17.6971 20.3719L6.55707 20.3719C4.52207 20.3719 2.87207 18.7219 2.87207 16.6869V11.8019C2.87207 9.77293 4.51807 8.12793 6.54707 8.12793L7.48907 8.12793" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>                                </svg>                            Download QR Code
                </button>
            </div>
         </div>
         <div class="card-body">
            <p>Store QR Code download</p>
            <div class="d-flex justify-content-center download-qrcode flex-column align-items-center">
                <div id="qrcode-container" class="qr-design">
                    <h2>SCAN THIS CODE QR TO <br>SEE THE MENU</h2>
                    <div>{{ $qrcode }}</div>
                    <div class="logo-placeholder">
                    <img src="{{ $store->logo != null ? asset('storage/'.$store->logo) : asset('assets/images/browser_file.png') }}" width="64" height="64" alt="" srcset="">
                    </div>
                    <p>MORE COMFORTABLE, FASTER AND <br> ENVIRONMENTALLY FRIENDLY.</p>
                </div>
                
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script>
$(document).ready(function() {
    $('#downloadQR').click(function() {
        const name = $(this).data('name');
        
        // Use html2canvas to capture the QR code container
        html2canvas(document.querySelector('#qrcode-container')).then(canvas => {
            // Convert the canvas to a blob
            canvas.toBlob(function(blob) {
                const blobUrl = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = blobUrl;
                link.download = decodeURI(name) + '.png';
                
                // Trigger download
                document.body.appendChild(link);
                link.click();
                
                // Clean up
                document.body.removeChild(link);
                URL.revokeObjectURL(blobUrl);
            }, 'image/png');
        }).catch(function(error) {
            console.error('Error capturing screenshot:', error);
            alert('Failed to capture screenshot.');
        });
    });

    $('#downloadSVG').click(function() {
        const name = $(this).data('name');
        const svgElement = document.querySelector('#qrcode-container svg');
        if (svgElement) {
            const svgData = new XMLSerializer().serializeToString(svgElement);
            const svgBlob = new Blob([svgData], { type: 'image/svg+xml;charset=utf-8' });
            const svgUrl = URL.createObjectURL(svgBlob);
            const link = document.createElement('a');
            link.href = svgUrl;
            link.download = decodeURI(name) + '.svg';
            
            // Trigger download
            document.body.appendChild(link);
            link.click();
            
            // Clean up
            document.body.removeChild(link);
            URL.revokeObjectURL(svgUrl);
        } else {
            alert('SVG element not found.');
        }
    });
});
</script>
@endsection

<style>
.qr-design {
    text-align: center;
    border: 1px solid black;
    padding: 80px 20px;
    /* background-color: #f8f4e3; Light beige background */
}

.qr-design h2 {
    font-size: 24px;
    line-height: inherit;
    margin-bottom: 20px;
}

.qr-design .logo-placeholder {
    margin-top: 20px;
    font-size: 14px;
    padding: 5px;
    display: inline-block;
}

.qr-design p {
    margin-top: 20px;
    font-size: 12px;
    font-style: italic;
}
</style>