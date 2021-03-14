
fyear();
tyear();

function fyear() {
    for (i = 2019; i < 2025; i++) {
        document.querySelector("#fyear").innerHTML += "<option value='" + i + "'>" + i + "</option>";
    }

};
function tyear() {
    for (i = 2019; i < 2025; i++) {
        document.querySelector("#tyear").innerHTML += "<option value='" + i + "'>" + i + "</option>";
    }

};

showHideMonthF();
showHideMonthT();

function showHideMonthF() {
    if (document.querySelector("#fyear").value == 0) {
        document.querySelector(".select-month").style.display = "none"
    } else {
        document.querySelector(".select-month").style.display = "inline-block"
    }
};
function showHideMonthT() {
    if (document.querySelector("#tyear").value == 0) {
        document.querySelector(".tselect-month").style.display = "none"
    } else {
        document.querySelector(".tselect-month").style.display = "inline-block"
    }
};




showHideDayF();
showHideDayT();

function showHideDayF() {
    if (document.querySelector("#fmonth").value == 0) {
        document.querySelector(".select-day").style.display = "none";
    } else {
        document.querySelector(".select-day").style.display = "inline-block";
        /*
        if (document.querySelector("#month").value == "February") {
            for (i = 1; i >= 28; i++) {
                document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
        }
        else if (document.querySelector("#month").value == "January" || "March" || "may" || "July" || "August" || "October" || "December") {
            for (i = 1; i >= 31; i++) {
                document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
        }
        else if (document.querySelector("#month").value == "April" || "June" || "September" || "November") {
            for (i = 1; i >= 30; i++) {
                document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
        }*/
        function day() {
            var x;
            var line = document.querySelector("#fmonth").value;
            if (line == "February") { x = 29 }
            else if (line == "January" || line == "March" || line == "May" || line == "July" || line == "August" || line == "October" || line == "December") { x = 32 }
            else if (line == "April" || line == "June" || line == "September" || line == "November") { x = 31 }
            else {
                x = 3;
            }
            return x;
        };
        var result = day();
        console.log(result);

        for (i = 1; i < result; i++) {
            document.querySelector("#fday").innerHTML += "<option value='" + i + "'>" + i + "</option>";
        }
        /*
                for (i = 1; i > result; i++) {
                    document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>"
                };
        */
    };
};


function showHideDayT() {
    if (document.querySelector("#tmonth").value == 0) {
        document.querySelector(".tselect-day").style.display = "none";
    } else {
        document.querySelector(".tselect-day").style.display = "inline-block";
        /*
        if (document.querySelector("#month").value == "February") {
            for (i = 1; i >= 28; i++) {
                document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
        }
        else if (document.querySelector("#month").value == "January" || "March" || "may" || "July" || "August" || "October" || "December") {
            for (i = 1; i >= 31; i++) {
                document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
        }
        else if (document.querySelector("#month").value == "April" || "June" || "September" || "November") {
            for (i = 1; i >= 30; i++) {
                document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>";
            }
        }*/
        function day() {
            var x;
            var line = document.querySelector("#tmonth").value;
            if (line == "February") { x = 29 }
            else if (line == "January" || line == "March" || line == "May" || line == "July" || line == "August" || line == "October" || line == "December") { x = 32 }
            else if (line == "April" || line == "June" || line == "September" || line == "November") { x = 31 }
            else {
                x = 3;
            }
            return x;
        };
        var result = day();
        console.log(result);

        for (i = 1; i < result; i++) {
            document.querySelector("#tday").innerHTML += "<option value='" + i + "'>" + i + "</option>";
        }
        /*
                for (i = 1; i > result; i++) {
                    document.querySelector("#day").innerHTML += "<option value='" + i + "'>" + i + "</option>"
                };
        */
    };
};

