var table = document.getElementById("tablica");
if (table != null) {
    for (var i = 0; i < table.rows.length; i++) {
        for (var j = 0; j < table.rows[i].cells.length; j++)
        table.rows[i].cells[j].onclick = function () {
            document.getElementById("printout").innerHTML=table.rows[this.parentNode.rowIndex].innerHTML
        };
    }
}

console.log(table)