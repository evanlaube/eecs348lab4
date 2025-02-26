
function updateColor() {
    const borderR = document.getElementById("borderR").value;
    const borderG = document.getElementById("borderG").value;
    const borderB = document.getElementById("borderB").value;
    const bgR = document.getElementById("bgR").value;
    const bgG = document.getElementById("bgG").value;
    const bgB = document.getElementById("bgB").value;
    const width = document.getElementById("borderWidth").value;

    var paragraph = document.getElementById("target");
    paragraph.style.borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`;
    paragraph.style.background = `rgb(${bgR}, ${bgG}, ${bgB})`;
    paragraph.style.borderWidth = width
}
