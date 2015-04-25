
$("#submit").click(function () {
if (Modernizr.localstorage) {

    saveToLocal();

    if (isOnLine()) {
        saveToServer();
    }
}
else {
    alert("Requires local storage.");
}

});

/*
function isOnLine() {
    return navigator.onLine;
}
*/

function getModel(index) {
    var model = {
        name: "",
        email: "",
        phone_number: "",
        order: "",
        IsDirty: false,
        Key: ""
    };

    if (localStorage[index] != null) {
        model = JSON.parse(localStorage[index]);
    }
    model.Key = index;
    return model;
}

function saveToLocal() {
    var model = getModel(userID);
    model.Name = $("#name").val();
    model.Email = $("#email").val();
    model.Phone_number = $("#phone_number").val();
    model.Order = $("#order").val();
    model.IsDirty = true;
    localStorage.setItem(userID,
        JSON.stringify(model));
    logMessage("'" + model.Name + "' saved locally.");
}

function saveToServer() {
    for (var i = 0; i < localStorage.length; i++) {
        var model = getModel(i);
        if (model.IsDirty) {
            $.post("/customer/save", model,
                function (data) {
                    var key = data.Key;
                    var m = getModel(key);
                    m.ID = data.ID;
                    m.IsDirty = false;
                    localStorage[key] =
                        JSON.stringify(m);
                    logMessage("'" +
                        m.Name + "' saved to server");
            });
        }
    }
}

function logMessage(message) {
    $("#log").append("<li>" + message + "</li>");
}

function clearUI() {
    $("#name, #note").val("");
    $("#log").html("");
}

function reportOnlineStatus() {
    var status = $("#onlineStatus");

    if (isOnLine()) {
        status.text("Online");
    }
    else {
        status.text("Offline");
    }
}

window.applicationCache.onupdateready = function (e) {
applicationCache.swapCache();
window.location.reload();
}

window.addEventListener("Olete hetkel võrgus!", function (e) {
reportOnlineStatus();
saveToServer();
}, true);

window.addEventListener("Te pole hetkel võrgus", function (e) {
reportOnlineStatus();
}, true);

if (isOnLine()) {
saveToServer();
}

reportOnlineStatus();

window.addEventListener("load", function (e) {
reportOnlineStatus();
}, true);

document.addEventListener("load", function (e) {
reportOnlineStatus();
}, true);

function isOnLine() {
    var xhr = new XMLHttpRequest();
    var file = "http://lk-consulting.azurewebsites.net/source/img/LK.jpg";
    var randomNum = Math.round(Math.random() * 10000);
     
    xhr.open('HEAD', file + "?rand=" + randomNum, false);
     
    try {
        xhr.send();
         
        if (xhr.status >= 200 && xhr.status < 304) {
            return true;
        } else {
            return false;
        }
    } catch (e) {
        return false;
    }
}