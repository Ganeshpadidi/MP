
    // Function to enable or disable the "Generate QR Code" button based on form input
    function toggleGenerateQRButton() {
        var id = document.getElementById('uid').value;
        var price = document.getElementById('uprice').value;
        var department = document.getElementById('udepartment').value;
        var date = document.getElementById('udate').value;

        // Check if all required fields are filled
        if (id && price && department && date && type) {
            document.getElementById('generateQRBtn').disabled = false;
            document.getElementById('generateQRBtn').classList.remove("bg-gray-500");
            document.getElementById('generateQRBtn').classList.add("bg-blue-500");
        } else {
            document.getElementById('generateQRBtn').disabled = true;
            document.getElementById('generateQRBtn').classList.remove("bg-blue-500");
            document.getElementById('generateQRBtn').classList.add("bg-gray-500");
        }
    }

    // Function to generate the QR code using local qrcode.js
    function generateQRCode1() {
        var id = document.getElementById('uid').value;
        var price = document.getElementById('uprice').value;
        var department = document.getElementById('udepartment').value;
        var date = document.getElementById('udate').value;

        // Generate QR code data
        var qrData = "ID: " + id + "\nPrice: " + price + "\nDepartment: " + department + "\nDate: " + date ;

        // Clear any previous QR code
        document.getElementById('qrcode').innerHTML = '';

        // Create and display the QR code using local qrcode.js
        var qrcode = new QRCode(document.getElementById('qrcode'), {
            text: qrData,
            width: 300,
            height: 300
        });

        // Show the download button
        document.getElementById('downloadLink').classList.remove('hidden');
    }

    // Function to download the QR code image
    function downloadQRCode() {
        var qrcode = document.getElementById('qrcode').getElementsByTagName('img')[0];
        if (qrcode) {
            var canvas = document.createElement('canvas');
            var context = canvas.getContext('2d');
            canvas.width = qrcode.width;
            canvas.height = qrcode.height;
            context.drawImage(qrcode, 0, 0);

            // Trigger the download
            var link = document.createElement('a');
            link.href = canvas.toDataURL('image/png');
            link.download = 'qrcode.png';
            link.click();
        }
    }

    // Add event listeners to form inputs to enable/disable the "Generate QR Code" button
    document.getElementById('uid').addEventListener('input', toggleGenerateQRButton);
    document.getElementById('uprice').addEventListener('input', toggleGenerateQRButton);
    document.getElementById('udepartment').addEventListener('input', toggleGenerateQRButton);
    document.getElementById('udate').addEventListener('input', toggleGenerateQRButton);

