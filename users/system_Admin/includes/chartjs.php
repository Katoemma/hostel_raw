<script>
// Get the canvas element
var ctx = document.getElementById('myChart').getContext('2d');

// Define the data for the chart
var data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Sales',
        data: [12, 19, 3, 5, 2, 3],
        backgroundColor: [
            'rgba(75, 192, 192)',
            'rgba(54, 162, 235)',
            'rgba(255, 99, 132)',
            'rgba(255, 206, 86)',
            'rgba(153, 102, 255)',
            'rgba(255, 159, 64)'
        ],
        borderColor: [
            'rgba(75, 192, 192)',
            'rgba(54, 162, 235)',
            'rgba(255, 99, 132)',
            'rgba(255, 206, 86)',
            'rgba(153, 102, 255)',
            'rgba(255, 159, 64)'
        ],
        borderWidth: 1
    }]
};

// Create the chart
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


// Get the canvas element
var ctx = document.getElementById('myBar').getContext('2d');

// Define the data for the chart
var data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Sales',
        data: [30, 19, 60, 5, 2, 50],
        backgroundColor: [
            'rgba(75, 192, 192)',
            'rgba(54, 162, 235)',
            'rgba(255, 99, 132)',
            'rgba(255, 206, 86)',
            'rgba(153, 102, 255)',
            'rgba(255, 159, 64)'
        ],
        borderColor: [
            'rgba(75, 192, 192)',
            'rgba(54, 162, 235)',
            'rgba(255, 99, 132)',
            'rgba(255, 206, 86)',
            'rgba(153, 102, 255)',
            'rgba(255, 159, 64)'
        ],
        borderWidth: 1
    }]
};

// Create the chart
var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

</script>
