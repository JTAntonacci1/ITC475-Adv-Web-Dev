function clearList(ThingsToDo) {
    document.getElementById("ThingsToDo").innerHTML = "";
}

function Checkbox(arr, size) {
    const myNode = document.getElementById("ThingsToDo");
    for (i = 0; i < size; i++)
    {   
        var checkbox1 = document.createElement('input');
        checkbox1.type = "checkbox";
        checkbox1.value = "value";
        checkbox1.id = arr[i][0];
        var label = document.createElement('label')
        label.appendChild(document.createTextNode(arr[i][1]));
        var br = document.createElement("br");

        myNode.appendChild(checkbox1);
        myNode.appendChild(label);
        myNode.appendChild(br);
    }
    return (myNode);
}



function Click(arr, size) {
    ReactDOM.render(React.createElement("div", null, React.createElement(Checkbox(arr, size), null)),
        document.getElementById("ThingsToDo"));
}
NewZ.onclick = () => {
    clearList();
    document.getElementById("selectLocation").innerHTML = "New Zealand";

    nzArray = [['NewZtour', "City Tours"], ['NewZsports', "Sports"], ['NewZcycle', "Cycling"],
        ['NewZmuseum', "Museums"], ['NewZboat', "Boating"]];

    len = nzArray.length;
    Click(nzArray, len);
}


Mald.onclick = () => {
    clearList();
    document.getElementById("selectLocation").innerHTML = "Maldives, South Asia";

    mdArray = [['Maldmuseum', "Museums"], ['Maldsailing', "Sailing"], ['Maldbeach', "Beach"],
    ['Maldhiking', "Hiking"], ['Maldboat', "Boating"]];

    len = mdArray.length;
    Click(mdArray, len);
}

Venice.onclick = () => {
    clearList();
    document.getElementById("selectLocation").innerHTML = "Venice, Italy";

    vnArray = [['Venicemuseum', "Museums"], ['Venicetheater', "Theater"], ['Veniceparknrec', "Parks and Recreation"],
        ['Venicetour', "City Tours"]];

    len = vnArray.length;
    Click(vnArray, len);
}

Cancun.onclick = () => {
    clearList();
    document.getElementById("selectLocation").innerHTML = "Cancun";

    ccArray = [['Cancunparknrec', "Parks and Recreation"], ['Cancunbeach', "Beaches"], ['Cancunboat', "Boating"],
        ['Cancunsnork', "Snorkeling"]];

    len = ccArray.length;
    Click(ccArray, len);
}
