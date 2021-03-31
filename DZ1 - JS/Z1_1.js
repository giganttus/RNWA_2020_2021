var x = document.getElementById("tablica");
if (x != null) {
    for (var i = 0; i < x.rows.length; i++) {
        for (var j = 0; j < x.rows[i].cells.length; j++)
        x.rows[i].cells[j].onclick = function () {
            alert(this.innerHTML);
        };
    }
}
