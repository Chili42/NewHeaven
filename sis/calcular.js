function somar() {
    var valorcombo1 = document.getElementById('valorcombo1');
    var multcombo1 = document.getElementById('multcombo1');
    var valorcombo2 = document.getElementById('valorcombo2');
    var multcombo2 = document.getElementById('multcombo2');
    var valorcombo3 = document.getElementById('valorcombo3');
    var multcombo3 = document.getElementById('multcombo3');
    var valorcombo4 = document.getElementById('valorcombo4');
    var multcombo4 = document.getElementById('multcombo4');
    var valorchess = document.getElementById('valorchess');
    var multchess = document.getElementById('multchess');
    var valorgreen = document.getElementById('valorgreen');
    var multgreen = document.getElementById('multgreen');
    var valorlemon = document.getElementById('valorlemon');
    var multlemon = document.getElementById('multlemon');
    var valorcheddar = document.getElementById('valorcheddar');
    var multcheddar = document.getElementById('multcheddar');
    var valorbebida = document.getElementById('valorbebida');
    var multbebida = document.getElementById('multbebida');
    var valorbatata = document.getElementById('valorbatata');
    var multbatata = document.getElementById('multbatata');
    var res = document.getElementById('res');

    var valorcombo1 = Number(valorcombo1.value);
    var multcombo1 = Number(multcombo1.value);
    var valorcombo2 = Number(valorcombo2.value);
    var multcombo2 = Number(multcombo2.value);
    var valorcombo3 = Number(valorcombo3.value);
    var multcombo3 = Number(multcombo3.value);
    var valorcombo4 = Number(valorcombo4.value);
    var multcombo4 = Number(multcombo4.value);
    var valorchess = Number(valorchess.value);
    var multchess = Number(multchess.value);
    var valorgreen = Number(valorgreen.value);
    var multgreen = Number(multgreen.value);
    var valorlemon = Number(valorlemon.value);
    var multlemon = Number(multlemon.value);
    var valorcheddar = Number(valorcheddar.value);
    var multcheddar = Number(multcheddar.value);
    var valorbebida = Number(valorbebida.value);
    var multbebida = Number(multbebida.value);
    var valorbatata = Number(valorbatata.value);
    var multbatata = Number(multbatata.value);

    var resultado = (valorcombo1 * multcombo1) + (valorcombo2 * multcombo2) + (valorcombo3 * multcombo3) + (valorcombo4 * multcombo4) + (valorchess * multchess) + (valorgreen * multgreen) + (valorlemon * multlemon) + (valorcheddar * multcheddar) + (valorbebida * multbebida) + (valorbatata * multbatata);
    res.innerText = `Total R$ ${resultado}`
}

function apagar() {
    document.getElementById('multcombo1').value = ""
    document.getElementById('multcombo1').value = ""
    document.getElementById('multcombo2').value = ""
    document.getElementById('multcombo3').value = ""
    document.getElementById('multcombo4').value = ""
    document.getElementById('multchess').value = ""
    document.getElementById('multgreen').value = ""
    document.getElementById('multlemon').value = ""
    document.getElementById('multcheddar').value = ""
    document.getElementById('multbebida').value = ""
    document.getElementById('multbatata').value = ""
    var res = document.getElementById('res')
    res.innerText = "Total"

}