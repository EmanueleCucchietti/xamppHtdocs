window.onload = function () {

    /* ---------- Domanda 1 --------- */
    let _reRdbtn1_0 = document.getElementById("reRdbtn1-0");
    let _reRdbtn1_1 = document.getElementById("reRdbtn1-1");
    let _reRdbtn1_2 = document.getElementById("reRdbtn1-2");
    let _reRdbtn1_3 = document.getElementById("reRdbtn1-3");
    let rex1;

    /* ---------- Domanda 2 --------- */
    let _reRdbtn2_0 = document.getElementById("reRdbtn2-0");
    let _reRdbtn2_1 = document.getElementById("reRdbtn2-1");
    let _reRdbtn2_2 = document.getElementById("reRdbtn2-2");
    let _reRdbtn2_3 = document.getElementById("reRdbtn2-3");
    let rex2;

    /* ---------- Domanda 3 --------- */
    let _reRdbtn3_0 = document.getElementById("reRdbtn3-0");
    let _reRdbtn3_1 = document.getElementById("reRdbtn3-1");
    let _reRdbtn3_2 = document.getElementById("reRdbtn3-2");
    let _reRdbtn3_3 = document.getElementById("reRdbtn3-3");
    let rex3;

    /* ---------- Domanda 4 --------- */
    let _reRdbtn4_0 = document.getElementById("reRdbtn4-0");
    let _reRdbtn4_1 = document.getElementById("reRdbtn4-1");
    let _reRdbtn4_2 = document.getElementById("reRdbtn4-2");
    let _reRdbtn4_3 = document.getElementById("reRdbtn4-3");
    let rex4;

    /* ---------- Domanda 5 --------- */
    let _reRdbtn5_0 = document.getElementById("reRdbtn5-0");
    let _reRdbtn5_1 = document.getElementById("reRdbtn5-1");
    let _reRdbtn5_2 = document.getElementById("reRdbtn5-2");
    let _reRdbtn5_3 = document.getElementById("reRdbtn5-3");
    let rex5;

    /* ---------- Domanda 6 --------- */
    let _reTxtArea6_0 = document.getElementById("reTxtArea6-0");
    let rex6;

    /* ---------- Domanda 7 --------- */
    let _reChkbtn7_0 = document.getElementById("reChkbtn7-0");
    let _reChkbtn7_1 = document.getElementById("reChkbtn7-1");
    let _reChkbtn7_2 = document.getElementById("reChkbtn7-2");
    let _reChkbtn7_3 = document.getElementById("reChkbtn7-3");
    let _reChkbtn7_4 = document.getElementById("reChkbtn7-4");

    /* vettore domanda 7*/
    let rex7 = [];


    /* ---------- Domanda 8 --------- */
    let _reChkbtn8_0 = document.getElementById("reChkbtn8-0");
    let _reChkbtn8_1 = document.getElementById("reChkbtn8-1");
    let _reChkbtn8_2 = document.getElementById("reChkbtn8-2");
    let _reChkbtn8_3 = document.getElementById("reChkbtn8-3");

    /* vettore domanda 8*/
    let rex8 = [];


    /* ---------- Domanda 9 --------- */
    let _reTxtArea9_0 = document.getElementById("reTxtArea9-0");
    let rex9;

    /* ---------- Domanda 10 --------- */
    let _reTxtArea10_0 = document.getElementById("reTxtArea10-0");
    let rex10;

    /* ---------- Button Invia --------- */
    let _btnInvia = document.getElementById("btnInvia");
    let _btnLeggi = document.getElementById("btnLeggi");
    _btnInvia.addEventListener("click", inviaRisposte);
    _btnLeggi.addEventListener("click", leggiRisposte);

    /* FUNCTION */
    function verificaRe() {
        rex1 = verificaRdBtn(_reRdbtn1_0, _reRdbtn1_1, _reRdbtn1_2, _reRdbtn1_3);
        rex2 = verificaRdBtn(_reRdbtn2_0, _reRdbtn2_1, _reRdbtn2_2, _reRdbtn2_3);
        rex3 = verificaRdBtn(_reRdbtn3_0, _reRdbtn3_1, _reRdbtn3_2, _reRdbtn3_3);
        rex4 = verificaRdBtn(_reRdbtn4_0, _reRdbtn4_1, _reRdbtn4_2, _reRdbtn4_3);
        rex5 = verificaRdBtn(_reRdbtn5_0, _reRdbtn5_1, _reRdbtn5_2, _reRdbtn5_3);
        rex6 = _reTxtArea6_0.value;

        rex7[0] = verificaChkBtn(_reChkbtn7_0);
        rex7[1] = verificaChkBtn(_reChkbtn7_1);
        rex7[2] = verificaChkBtn(_reChkbtn7_2);
        rex7[3] = verificaChkBtn(_reChkbtn7_3);
        rex7[4] = verificaChkBtn(_reChkbtn7_4);

        rex8[0] = verificaChkBtn(_reChkbtn8_0);
        rex8[1] = verificaChkBtn(_reChkbtn8_1);
        rex8[2] = verificaChkBtn(_reChkbtn8_2);
        rex8[3] = verificaChkBtn(_reChkbtn8_3);

        rex9 = _reTxtArea9_0.value;
        rex10 = _reTxtArea10_0.value;
    }
    function verificaRdBtn(radioButton1, radioButton2, radioButton3, radioButton4) {
        if (radioButton1.checked == true)
            return 0;
        else if (radioButton2.checked == true)
            return 1;
        else if (radioButton3.checked == true)
            return 2;
        else if (radioButton4.checked == true)
            return 3;
    }

    function verificaChkBtn(chkbutton) {
        if (chkbutton.checked == true)
            return 1;
        else
            return 0;
    }

    function inviaRisposte() {
        verificaRe();
        let objRisposte = {
            re1: rex1,
            re2: rex2,
            re3: rex3,
            re4: rex4,
            re5: rex5,
            re6: rex6,
            re7: rex7,
            re8: rex8,
            re9: rex9,
            re10: rex10
        }
        let objReSerialized = JSON.stringify(objRisposte);
        localStorage.setItem("oggettoRisposte", objReSerialized);
    }
    function leggiRisposte() {
        let objDeSerialized = JSON.parse(localStorage.getItem("oggettoRisposte"));
        console.log("Oggetto Risposte: ");
        console.log(objDeSerialized);
        let string = "";
        string = "Risposta1: " + objDeSerialized.re1 + "\n"
        string += "Risposta 2: " + objDeSerialized.re2 + "\n"
        string += "Risposta 3: " + objDeSerialized.re3 + "\n"
        string += "Risposta 4: " + objDeSerialized.re4 + "\n"
        string += "Risposta 5: " + objDeSerialized.re5 + "\n"
        string += "Risposta 6: " + objDeSerialized.re6 + "\n"
        string += "Risposta 7: " + objDeSerialized.re7 + "\n"
        string += "Risposta 8: " + objDeSerialized.re8 + "\n"
        string += "Risposta 9: " + objDeSerialized.re9 + "\n"
        string += "Risposta 10: " + objDeSerialized.re10;
        alert(string);
    }
}