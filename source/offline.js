
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

function isOnLine() {
    return navigator.onLine;
}

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

window.addEventListener("online", function (e) {
reportOnlineStatus();
saveToServer();
}, true);

window.addEventListener("offline", function (e) {
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