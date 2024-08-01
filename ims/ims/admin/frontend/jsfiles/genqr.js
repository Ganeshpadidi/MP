// Function to enable or disable the "Generate QR Code" button based on form input
function toggleGenerateQRButton() {
    var id = document.getElementById('id').value;
    var price = document.getElementById('price').value;
    var department = document.getElementById('department').value;
    var date = document.getElementById('date').value;
    var serialnum = document.getElementById('serialnum').value;

    // Check if all required fields are filled
    if (id && price && department && date && serialnum) {
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
function generateQRCode() {
    var id = document.getElementById('id').value;
    var price = document.getElementById('price').value;
    var department = document.getElementById('department').value;
    var date = document.getElementById('date').value;
    var serialnum = document.getElementById('serialnum').value;

    // Generate QR code data
    var qrData = "ID: " + id + "\nPrice: " + price + "\nDepartment: " + department + "\nDate: " + date + "\nSerial Num: " + serialnum;

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
document.getElementById('id').addEventListener('input', toggleGenerateQRButton);
document.getElementById('price').addEventListener('input', toggleGenerateQRButton);
document.getElementById('department').addEventListener('input', toggleGenerateQRButton);
document.getElementById('date').addEventListener('input', toggleGenerateQRButton);
document.getElementById('serialnum').addEventListener('input', toggleGenerateQRButton);
