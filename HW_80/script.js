(function () {
    "use strict";

    var contactTable = get("contactTable"),
        contacts = [];

    var firstName =  getValue("firstName");  

    function get(id) {
        return document.getElementById(id);
    }

    function getValue(id) {
        return document.getElementById(id).value;
    }

    function addContact() {
        var contact = {
            firstName: firstName
          
        };

        contacts.push(contact);

        if (contacts.length === 1) {
            contactTable.deleteRow(1);
        }
        
        var row = contactTable.insertRow();
        var firstNameCell = row.insertCell();
        var lastNameCell = row.insertCell();
        var emailCell = row.insertCell();
        var phoneCell = row.insertCell();

        firstNameCell.innerHTML = document.getElementById("firstName").value;
        lastNameCell.innerHTML = document.getElementById("lastName").value;
        emailCell.innerHTML = document.getElementById("email").value;
        phoneCell.innerHTML = document.getElementById("phone").value;
        
    }

    get("add").addEventListener("click", addContact);
}());