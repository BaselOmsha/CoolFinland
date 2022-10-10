function expandWindow() {
    var x = document.getElementById("profile-info-container");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
//When user clicks somewhere else info box disapears
document.addEventListener('mouseup', function(e) {
    var container = document.getElementById('profile-info-container');
    if (!container.contains(e.target)) {
        container.style.display = 'none';
    }
});