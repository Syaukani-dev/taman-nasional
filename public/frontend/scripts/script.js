let currentText = "";
const onScanSuccess = (decodedText, decodedResult) => {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
    document.querySelector("#result").innerText = decodedText;
    if (currentText !== decodedText) {
        currentText = decodedText;
    }
    if (decodedText === "Konservasi") {
        // Redirect to the "konservasi" route
        window.location.href = "konservasi";
    } else if (decodedText === "FloraFauna") {
        // Redirect to the "konservasi" route
        window.location.href = "floraFauna";
    } else if (decodedText === "Mitigasi") {
        // Redirect to the "konservasi" route
        window.location.href = "mitigasi";
    } else if (decodedText === "Sejarah") {
        // Redirect to the "konservasi" route
        window.location.href = "sejarah";
    }
};

const html5QrcodeScanner = new Html5QrcodeScanner("reader", {
    fps: 10,
    qrbox: 200,
});
html5QrcodeScanner.render(onScanSuccess);
