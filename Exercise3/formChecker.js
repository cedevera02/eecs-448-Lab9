function checkForm() {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var user = document.forms["webForm"]["uname"].value;
        var pass = document.forms["webForm"]["pswd"].value;
        var loginValid = false;
        var Paper = document.forms["webForm"]["Paper"].checked;
        var PaperAm = document.forms["webForm"]["PaperQuant"].value;
        var Pen = document.forms["webForm"]["Pen"].checked;
        var PenAm = document.forms["webForm"]["PenQuant"].value;
        var Pencil = document.forms["webForm"]["Pencil"].checked;
        var PencilAm = document.forms["webForm"]["PencilQuant"].value;
        var ShippingValue = document.forms["webForm"]["Shipping"].value;
        if (re.test(user)){
            if (pass != ""){
                loginValid = true;
            }
        }
        if(!loginValid){
            alert("Invalid login. Username must be an email and Password cannot be empty.");
            return false;
        }
        if(Paper && (PaperAm == null || PaperAm == "")){
            alert("Select an amount of Paper wanted");
            return false;
        }
        if(!Paper && (PaperAm != null || PaperAm != "")){
            document.forms["webForm"]["PaperQuant"].value = 0;
        }
        if(Pen && (PenAm == null || PenAm == "")){
            alert("Select an amount of Pens wanted");
            return false;
        }
        if(!Pen && (PenAm != null || PenAm != "")){
            document.forms["webForm"]["PenQuant"].value = 0;
        }
        if(Pencil && (PencilAm == null || PencilAm == "")){
            alert("Select an amount of Pencils wanted");
            return false;
        }
        if(!Pencil && (PencilAm == null || PencilAm == "")){
            document.forms["webForm"]["PencilQuant"].value = 0;
        }
        if(ShippingValue == null || ShippingValue == ""){
            alert("Must select a Shipping Option.");
            return false;
        }

    }