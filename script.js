function chargerTaches() {
    fetch("taches.php")
        .then(res => res.text())
        .then(html => document.getElementById("liste").innerHTML = html);
}
document.getElementById("ajout").addEventListener("submit", function(e) {
    e.preventDefault();
    const tache = document.getElementById("tache").value;
    fetch("ajouter.php", {
        method: "POST",
        headers: {"Content-Type": "application/x-www-form-urlencoded"},
        body: "texte_tache=" + encodeURIComponent(tache)
    }).then(() => {
        document.getElementById("tache").value = "";
        chargerTaches();
    });
});
function modifierTache(id) {
    const nouveau = prompt("Modifier la tâche :");
    if (nouveau) {
        fetch("modifier.php", {
            method: "POST",
            headers: {"Content-Type": "application/x-www-form-urlencoded"},
            body: "identifiant=" + id + "&texte_tache=" + encodeURIComponent(nouveau)
        }).then(chargerTaches);
    }
}

function supprimerTache(id) {
    if (confirm("Supprimer cette tâche ?")) {
        fetch("supprimer.php?id=" + id)
            .then(chargerTaches);
    }
}

function supprimerToutesTaches() {
    if (confirm("Tout supprimer ?")) {
        fetch("taches.php", {
            method: "POST",
            headers: {"Content-Type": "application/x-www-form-urlencoded"},
            body: "action=supprimer_tout"
        }).then(chargerTaches);
    }
}

function importerTaches() {
    fetch("importer.php").then(chargerTaches);
}

function exporterTaches() {
    window.location = "exporter.php";
}

window.onload = chargerTaches;
