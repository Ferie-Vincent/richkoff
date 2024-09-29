window.onload = function() {
    // Ouvre le modal automatiquement
    document.getElementById("myModal").style.display = "block";
};

document.getElementById("closeBtn").onclick = function() {
    // Ferme le modal au clic
    document.getElementById("myModal").style.display = "none";
};

// Ferme le modal si on clique en dehors de celui-ci
window.onclick = function(event) {
    if (event.target === document.getElementById("myModal")) {
        document.getElementById("myModal").style.display = "none";
    }
};