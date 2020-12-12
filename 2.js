function cekHuruf(kalimat, huruf) {
    var a = kalimat.split(" ");
    var b = a.slice(1);
    var c = b.join(" ");
    var d = c.split(huruf).length - 1;

    return d

}
