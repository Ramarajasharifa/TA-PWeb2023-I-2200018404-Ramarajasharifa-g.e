function calculateTotal() {
    var amistartop = document.getElementById("amistartop").value;
    var starban = document.getElementById("starban").value;
    var plenum = document.getElementById("plenum").value;

    var total = (amistartop * 65000) + (starban * 75000) + (plenum * 35000);

    document.getElementById("total").value = "Rp " + total;
}
