function initialize() {
    var map = new Microsoft.Maps.Map(document.getElementById("map"), {
        credentials:
            "AqW6ztqpwx8GvKZQZ9MX-HYmqtAe5dMBRdL2bXvv8B_IrE4dFAtFspKZA2KLgGy2",
        center: new Microsoft.Maps.Location(
            -6.146434282338432,
            106.83897795027978
        ),
        zoom: 17,
    });

    var iconSize = new Microsoft.Maps.Size(24, 32);

    var marker = new Microsoft.Maps.Pushpin(
        new Microsoft.Maps.Location(-6.146434282338432, 106.83897795027978),
        {
            icon: "Frontend/img/marker.svg",
            anchor: new Microsoft.Maps.Point(6, 6), // Adjust anchor position if needed
            iconSize: iconSize,
        }
    );

    map.entities.push(marker);
}

// Call the initialize function when the window loads
window.onload = initialize;
