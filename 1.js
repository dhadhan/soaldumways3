function hitungDenda(a) {
    var p = 1000;
    var n = 2000;
    var c = 1500;
    var dh = 10;

    if (a > dh) {
        var jh = a - dh;
        var jp = p * jh;
        var jn = n * jh;
        var jc = c * jh;
        var price = jp + jn + jc;
        var b = "Telat mengembalikan: " + jh + " hari";
        var dp = "Denda buku mata pelajaran: " + jp;
        var dn = "Denda Novel: " + jn;
        var dc = "Denda Cerpen: " + jc;
        var ptotal = "Total: " + price;
        var semua = b + "\n" + dp + "\n" + dn + "\n" + dc + "\n" + ptotal;

        return semua;
    }
    else {

        var ok = "Meminjam selama : " + a + " hari, bebas denda!!!";
        return ok;
    }

};
