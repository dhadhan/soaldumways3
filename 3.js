//yg atas
function cetakPola(angka) {
    let y = angka;
    let x = angka;

    let str = "";

    for (let i = 0; i < y; i++) {
        for (let j = 1; j <= x; j++) {
            if (i + j >= y) {
                str = str.concat("*");
            } else {
                str = str.concat(" ")
            }
        }
        str = str.concat("\n")
    }

    //nama

    var nama = "DUMBWAYSID" + "\n";

    //yang bawah

    let str2 = "";

    for (let i = 1; i <= y; i++) {
        for (let j = 1; j <= x; j++) {
            if (i <= j) {
                str2 = str2.concat("*");
            } else {
                str2 = str2.concat(" ")
            }
        }
        str2 = str2.concat("\n")
    }

    return str + nama + str2;
}
