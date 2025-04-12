<?php
$conn = new mysqli("localhost", "root", "", "aviation_nav");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $routeName = $_POST['routeName'];
    $waypoints = $_POST['waypoints'];

    $conn->query("INSERT INTO routes (user_id, name) VALUES (1, '$routeName')");
    $routeId = $conn->insert_id;

    foreach ($waypoints as $index => $waypointId) {
        $conn->query("INSERT INTO route_waypoints (route_id, waypoint_id, sequence) VALUES ($routeId, $waypointId, $index + 1)");
    }

    echo "Route saved successfully!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create Custom Route</title>
</head>
<script src="https://cdn.tailwindcss.com"></script>

<?php //include '../components/htmlHeader.php'; ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"></script>

<body>
    <main class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-6">Create a Custom Route</h1>
        <form method="POST" action="">
            <label for="routeName" class="block text-lg font-medium mb-2">Route Name:</label>
            <input type="text" id="routeName" name="routeName" class="w-full p-2 border rounded mb-4" required>

            <label for="waypoints" class="block text-lg font-medium mb-2">Select Waypoints:</label>
            <select id="waypoints" name="waypoints[]" class="w-full p-2 border rounded mb-4" multiple required>
                <?php
                $result = $conn->query("SELECT id, name, type FROM waypoints");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['name']} ({$row['type']})</option>";
                }
                ?>
            </select>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save Route</button>
        </form>
        <div id="map" style="height: 500px; margin-bottom: 20px;"></div>
    </main>
</body>
<script>
    const map = L.map('map').setView([20.5937, 78.9629], 5); 

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);


const waypointsDropdown = document.getElementById('waypoints');
const markers = [];

for (let i = 0; i < waypointsDropdown.options.length; i++) {
    const option = waypointsDropdown.options[i];
    const lat = option.getAttribute('data-lat');
    const lng = option.getAttribute('data-lng');
    const name = option.text;

    if (lat && lng) {
        const marker = L.marker([lat, lng]).addTo(map).bindPopup(name);
        markers.push(marker);

        option.addEventListener('click', () => {
            map.setView([lat, lng], 10);
            marker.openPopup();
        });
    }
}

waypointsDropdown.addEventListener('change', () => {
    const selectedOptions = Array.from(waypointsDropdown.selectedOptions);
    const latlngs = selectedOptions.map(option => [
        option.getAttribute('data-lat'),
        option.getAttribute('data-lng'),
    ]);

    if (window.routeLine) {
        map.removeLayer(window.routeLine);
    }

    window.routeLine = L.polyline(latlngs, { color: 'blue' }).addTo(map);
    map.fitBounds(window.routeLine.getBounds());
});
</script>
</html>