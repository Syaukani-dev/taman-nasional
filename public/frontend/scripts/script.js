let currentText = "";
const onScanSuccess = (decodedText, decodedResult) => {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
    document.querySelector("#result").innerText = decodedText;
    if (currentText !== decodedText) {
        currentText = decodedText;
    }
};

const html5QrcodeScanner = new Html5QrcodeScanner("reader", {
    fps: 10,
    qrbox: 200,
});
html5QrcodeScanner.render(onScanSuccess);
