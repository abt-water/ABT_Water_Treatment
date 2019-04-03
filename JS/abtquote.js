$(document).ready(function() {

    function formatMoney(n, c, d, t) {
        var c = isNaN(c = Math.abs(c)) ? 2 : c,
            d = d == undefined ? "." : d,
            t = t == undefined ? "," : t,
            s = n < 0 ? "-" : "",
            i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
            j = (j = i.length) > 3 ? j % 3 : 0;

        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

    function myFunction() {
        $("#metron").val(225);
        $("#neptuneP").val(155.2);
        $("#neptunePA").val(305.2);
        $("#neptunePS3").val(262.4);
        $("#neptunePSIP").val(262.4);
        $("#neptunePSIE").val(272);
        $("#neptunePAq").val(128);
        $("#neptunePAqA").val(278);
        $("#neptunePAqS3").val(235.2);
        $("#neptunePAqSP").val(235.2);
        $("#neptunePAqSE").val(244.8);
        $("#neptuneLT").val(142.5);
        $("#neptuneLTA").val(292.5);
        $("#neptuneLTS3").val(249.7);
        $("#neptuneLTSP").val(249.7);
        $("#neptuneLTSE").val(259.3);
        $("#neptuneLAq").val(110);
        $("#neptuneLAqA").val(260);
        $("#neptuneLAqS3").val(217.2);
        $("#neptuneLAqSP").val(217.2);
        $("#neptuneLAqSE").val(226.8);
        $("#sensus").val(122.4);
        $("#sensusA").val(272.4);
        $("#sensusS3").val(229.6);
        $("#sensusSP").val(229.6);
        $("#sensusSE").val(239.2);
        var meter = document.getElementById("metersAll").value;
        var sites = document.getElementById("siteC").value;
        var markUp = .016;
        var calcParts = 86.6 * sites;
        var calcParts1 = markUp * calcParts;
        var meter1 = meter * sites;
        var time = sites / 15;
        var total5 = sites * 134.57;
        var total6 = sites * 33.47;
        var total2 = total5 + total6;
        var total = calcParts + calcParts1;
        var rep = (sites / 50) - 1;
        var repCost = rep * 810.00;


        document.getElementById("totalMC").value = "$" + formatMoney(meter1);
        document.getElementById("daysC").value = Math.ceil(time) + " Days";
        document.getElementById("totalC").value = "$" + formatMoney(calcParts);
        document.getElementById("total2C").value = "$" + formatMoney(total2);


        var s = document.getElementById('metersAll');
        var item1 = s.options[s.selectedIndex].text;
        var equip;
        var zero = 0;

        if (item1 == "Metron") {
            equip = 1950.00;
            $("#totalMEC").val("$" + formatMoney(equip));

            var rep1 = $("#totalMER").val(Math.ceil(rep));
            $("#totalMERC").val("$" + formatMoney(repCost));
            var totalALL = meter1 + total2 + calcParts + equip + repCost;
        } else if (item1 == "Neptune Pro-Coder T-10 With Aclara" || item1 == "Neptune Pro-Coder Aquity With Aclara" ||
            item1 == "Neptune Legacy T-10 With Aclara" || item1 == "Neptune Legacy Aquity With Aclara" ||
            item1 == "Sensus Accustream With Aclara") {
            equip = 3900.00;
            $("#totalMEC").val("$" + formatMoney(equip));

            $("#totalMER").val(0);
            $("#totalMERC").val("$" + formatMoney(zero));
            var totalALL = meter1 + total2 + calcParts + equip;
        } else if (item1 == "Neptune Pro-Coder T-10 With Cereniti Cellular" || item1 == "Neptune Pro-Coder Aquity With Cereniti Cellular" ||
            item1 == "Neptune Legacy T-10 With Cereniti Cellular" || item1 == "Neptune Legacy Aquity With Cereniti Cellular" ||
            item1 == "Sensus Accustream With Cereniti Cellular") {
            equip = 1280.00;
            $("#totalMEC").val("$" + formatMoney(equip) + " *Plus a $225.00 Annual Celluar Fee");

            $("#totalMER").val(0);
            $("#totalMERC").val("$" + formatMoney(zero));
            var totalALL = meter1 + total2 + calcParts + equip;
        } else if (item1 == "Neptune Pro-Coder T-10 With Cereniti Encoder" ||
            item1 == "Neptune Pro-Coder Aquity With Cereniti Encoder" ||
            item1 == "Neptune Legacy T-10 With Cereniti Encoder" ||
            item1 == "Neptune Legacy Aquity With Cereniti Encoder" ||
            item1 == "Sensus Accustream With Cereniti Encoder") {
            equip = 1280.00;
            $("#totalMEC").val("$" + formatMoney(equip) + " *Plus a $500.00 FCC 10 Year License");

            $("#totalMER").val(0);
            $("#totalMERC").val("$" + formatMoney(zero));
            var totalALL = meter1 + total2 + calcParts + equip;
        } else if (item1 == "Neptune Pro-Coder T-10 With Touchpad" || item1 == "Neptune Legacy T-10 With Touchpad" ||
            item1 == "Neptune Pro-Coder Aquity With Touchpad" || item1 == "Neptune Legacy Aquity With Touchpad" ||
            item1 == "Sensus Accustream With Touchpad") {
            equip = 1200.00;
            $("#totalMEC").val("$" + formatMoney(equip) + " *For Touchpad ProReader and $15-$40 per site / per touchpad (Depends on meter used)");

            $("#totalMER").val(0);
            $("#totalMERC").val("$" + formatMoney(zero));
            var totalALL = meter1 + total2 + calcParts + equip;
        } else if (item1 == "Neptune Pro-Coder T-10 Visual Read" || item1 == "Neptune Pro-Coder Aquity Visual Read" ||
            item1 == "Neptune Legacy T-10 Visual Read" || item1 == "Sensus Accustream Visual Read" ||
            item1 == "Neptune Legacy Aquity Visual Read") {
            equip = 0.00;
            $("#totalMEC").val("$" + formatMoney(equip))

            $("#totalMER").val(0);
            $("#totalMERC").val("$" + formatMoney(zero));
            var totalALL = meter1 + total2 + calcParts + equip;
        } else if (item1 == "Select a Meter") {
            $("#totalMEC").val("Please Pick A Meter Above");
            alert("Pick Meter Above And Enter Site Count");
            //equip = 0.00
            //$("#totalMER").val(0);
            //$("#totalMERC").val("$" + 0);
            //var totalALL = meter1 + total2 + calcParts + equip;
        }


        document.getElementById("totalALL").value = "$" + formatMoney(totalALL);
    }


    function myFunction3() {
        var i = document.getElementById('metersAll');
        var item2 = i.options[i.selectedIndex].text;

        //Metron
        if (item2 == "Metron") {
            $("#pic2").attr("src", "../images/ABTImages/MetronReg.png")
            $("#pic1").attr("src", "../images/ABTImages/Metron1.png")
        }

        //Nep Pro T10
        else if (item2 == "Neptune Pro-Coder T-10 Visual Read") {
            $("#pic2").attr("src", "../images/ABTImages/ProCodeReg.jpg")
            $("#pic1").attr("src", "../images/ABTImages/NepProT10.jpg")
        } else if (item2 == "Neptune Pro-Coder T-10 With Touchpad") {
            $("#pic2").attr("src", "../images/ABTImages/NepTouch.png")
            $("#pic1").attr("src", "../images/ABTImages/NepProT10.jpg")
        } else if (item2 == "Neptune Pro-Coder T-10 With Aclara") {
            $("#pic1").attr("src", "../images/ABTImages/NepProT10.jpg")
            $("#pic2").attr("src", "../images/ABTImages/Aclara.png")
        } else if (item2 == "Neptune Pro-Coder T-10 With Cereniti Cellular" ||
            item2 == "Neptune Pro-Coder T-10 With Cereniti Encoder") {
            $("#pic1").attr("src", "../images/ABTImages/NepProT10.jpg")
            $("#pic2").attr("src", "../images/ABTImages/Cereniti.png")
        }

        //Nep Pro Aquity 
        else if (item2 == "Neptune Pro-Coder Aquity Visual Read") {
            $("#pic1").attr("src", "../images/ABTImages/NepProAquity.jpg")
            $("#pic2").attr("src", "../images/ABTImages/ProCodeReg.jpg")
        } else if (item2 == "Neptune Pro-Coder Aquity With Touchpad") {
            $("#pic1").attr("src", "../images/ABTImages/NepProAquity.jpg")
            $("#pic2").attr("src", "../images/ABTImages/NepTouch.png")
        } else if (item2 == "Neptune Pro-Coder Aquity With Aclara") {
            $("#pic1").attr("src", "../images/ABTImages/NepProAquity.jpg")
            $("#pic2").attr("src", "../images/ABTImages/Aclara.png")
        } else if (item2 == "Neptune Pro-Coder Aquity With Cereniti Cellular" ||
            item2 == "Neptune Pro-Coder Aquity With Cereniti Encoder") {
            $("#pic1").attr("src", "../images/ABTImages/NepProAquity.jpg")
            $("#pic2").attr("src", "../images/ABTImages/Cereniti.png")
        }

        //Nep Leg T10
        else if (item2 == "Neptune Legacy T-10 Visual Read") {
            $("#pic1").attr("src", "../images/ABTImages/NeptuneLegT10.png")
            $("#pic2").attr("src", "../images/ABTImages/NepReg.png")
        } else if (item2 == "Neptune Legacy T-10 With Touchpad") {
            $("#pic1").attr("src", "../images/ABTImages/NeptuneLegT10.png")
            $("#pic2").attr("src", "../images/ABTImages/NepTouch.png")
        } else if (item2 == "Neptune Legacy T-10 With Aclara") {
            $("#pic1").attr("src", "../images/ABTImages/NeptuneLegT10.png")
            $("#pic2").attr("src", "../images/ABTImages/Aclara.png")
        } else if (item2 == "Neptune Legacy T-10 With Cereniti Cellular" ||
            item2 == "Neptune Legacy T-10 With Cereniti Encoder") {
            $("#pic1").attr("src", "../images/ABTImages/NeptuneLegT10.png")
            $("#pic2").attr("src", "../images/ABTImages/Cereniti.png")
        }

        //Nep Leg Aquity
        else if (item2 == "Neptune Legacy Aquity Visual Read") {
            $("#pic1").attr("src", "../images/ABTImages/NepAquity1.png")
            $("#pic2").attr("src", "../images/ABTImages/NepReg.png")
        } else if (item2 == "Neptune Legacy Aquity With Touchpad") {
            $("#pic1").attr("src", "../images/ABTImages/NepAquity1.png")
            $("#pic2").attr("src", "../images/ABTImages/NepTouch.png")
        } else if (item2 == "Neptune Legacy Aquity With Aclara") {
            $("#pic1").attr("src", "../images/ABTImages/NepAquity1.png")
            $("#pic2").attr("src", "../images/ABTImages/Aclara.png")
        } else if (item2 == "Neptune Legacy Aquity With Cereniti Cellular" ||
            item2 == "Neptune Legacy Aquity With Cereniti Encoder") {
            $("#pic1").attr("src", "../images/ABTImages/NepAquity1.png")
            $("#pic2").attr("src", "../images/ABTImages/Cereniti.png")
        }

        //Sensus Accustream
        else if (item2 == "Sensus Accustream Visual Read") {
            $("#pic1").attr("src", "../images/ABTImages/SensusAccu.jpg")
            $("#pic2").attr("src", "../images/ABTImages/SensusReg.jpg")
        } else if (item2 == "Sensus Accustream With Touchpad") {
            $("#pic1").attr("src", "../images/ABTImages/SensusAccu.jpg")
            $("#pic2").attr("src", "../images/ABTImages/SensusTouch.png")
        } else if (item2 == "Sensus Accustream With Aclara") {
            $("#pic1").attr("src", "../images/ABTImages/SensusAccu.jpg")
            $("#pic2").attr("src", "../images/ABTImages/Aclara.png")
        } else if (item2 == "Sensus Accustream With Cereniti Cellular" ||
            item2 == "Sensus Accustream With Cereniti Encoder") {
            $("#pic1").attr("src", "../images/ABTImages/SensusAccu.jpg")
            $("#pic2").attr("src", "../images/ABTImages/Cereniti.png")
        } else if (item2 == "Select a Meter") {
            $("#pic1").attr("src", "../images/ABTImages/glassWater.jpg")
            $("#pic2").attr("src", "../images/ABTImages/waterDrop.jpg")
        }

    }

    $(".toggle").click(function() {
        $(".table").toggle();

    });


    $("#calculate").click(function() {
        myFunction();
        myFunction5();

    });

    //function setPic() {
    //var img = document.getElementById("pic1");
    //img.src = this.value;
    //return false;
    //}
    //function setPics() {
    //setPic();
    //myFunction3();

    //}
    document.getElementById("metersAll").onchange = myFunction3;



    function myFunction2() {
        document.getElementById("metron").value = "Metron";
        document.getElementById("neptuneP").value = "Neptune ProCoder With Touchpad";
        document.getElementById("neptunePA").value = "Neptune Pro-Coder T-10 With Aclara";
        document.getElementById("neptunePS3").value = "Neptune Pro-Coder T-10 With Cereniti Cellular";
        document.getElementById("neptunePSIP").value = "Neptune Pro-Coder T-10 With Cereniti Pulse";
        document.getElementById("neptunePSIE").value = "Neptune Pro-Coder T-10 With Cereniti Encoder";
        document.getElementById("neptunePAq").value = "Neptune Pro-Coder Aquity With Touchpad";
        document.getElementById("neptunePAqA").value = "Neptune Pro-Coder Aquity With Aclara";
        document.getElementById("neptunePAqS3").value = "Neptune Pro-Coder Aquity With Cereniti Cellular";
        document.getElementById("neptunePAqSP").value = "Neptune Pro-Coder Aquity With Cereniti Pulse";
        document.getElementById("neptunePAqSE").value = "Neptune Pro-Coder Aquity With Cereniti Encoder";
        document.getElementById("neptuneLT").value = "Neptune Legacy T-10 With Touchpad";
        document.getElementById("neptuneLTA").value = "Neptune Legacy T-10 With Aclara";
        document.getElementById("neptuneLTS3").value = "Neptune Legacy T-10 With Cereniti Cellular";
        document.getElementById("neptuneLTSP").value = "Neptune Legacy T-10 With Cereniti Pulse";
        document.getElementById("neptuneLTSE").value = "Neptune Legacy T-10 With Cereniti Encoder";
        document.getElementById("neptuneLAq").value = "Neptune Legacy Aquity With Touchpad";
        document.getElementById("neptuneLAqA").value = "Neptune Legacy Aquity With Aclara";
        document.getElementById("neptuneLAqS3").value = "Neptune Legacy Aquity With Cereniti Cellular";
        document.getElementById("neptuneLAqSP").value = "Neptune Legacy Aquity With Cereniti Pulse";
        document.getElementById("neptuneLAqSE").value = "Neptune Legacy Aquity With Cereniti Encoder";
        document.getElementById("sensus").value = "Sensus Accustream With Touchpad";
        document.getElementById("sensusA").value = "Sensus Accustream With Aclara";
        document.getElementById("sensusS3").value = "Sensus Accustream With Cereniti Cellular";
        document.getElementById("sensusSP").value = "Sensus Accustream With Cereniti Pulse";
        document.getElementById("sensusSE").value = "Sensus Accustream With Cereniti Encoder";


    }

    $("#submit").click(function() {
        myFunction2();
        myFunction5();
    });

    function myFunction5() {
        var x, text;

        // Get the value of the input field with id="siteC"
        x = document.getElementById("siteC").value;

        // If x is Not a Number or less than one 
        if (isNaN(x) || x < 1) {
            text = "*Please Enter A Number";
        } else {
            return true;
        }
        document.getElementById("demo4").innerHTML = text;
    }








});