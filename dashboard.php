<?php
session_start();
include "db.php";

$user_id = $_SESSION['user_id'];

$total_users = $conn->query("SELECT COUNT(*) as total FROM users")->fetch_assoc()['total'];
$total_predictions = $conn->query("SELECT COUNT(*) as total FROM predictions")->fetch_assoc()['total'];
?>

<h2>Dashboard</h2>

<canvas id="usersChart"></canvas>
<canvas id="predChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const usersChart = new Chart(document.getElementById('usersChart'), {
    type: 'bar',
    data: {
        labels: ['Users'],
        datasets: [{
            label: 'Total Users',
            data: [<?= $total_users ?>]
        }]
    }
});

const predChart = new Chart(document.getElementById('predChart'), {
    type: 'line',
    data: {
        labels: ['Predictions'],
        datasets: [{
            label: 'Total Predictions',
            data: [<?= $total_predictions ?>]
        }]
    }
});
</script>