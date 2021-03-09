@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <canvas id="myChart" width="400" height="400"></canvas>
        </div>
    </div>
</div>




@endsection
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script>
document.addEventListener("DOMContentLoaded", function(event) { 
let piatti = [];
let vendite = [];

<?php foreach($restaurant->getDishes as $piatto){
    ?>
    vendite.push(<?php echo(count($piatto->getOrders))?>)
    <?php
}  
?>


for(piatto of <?php echo($restaurant->getDishes)?>){
    piatti.push(piatto.name);
       
}

var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: piatti,
        datasets: [{
            label: '# of Votes',
            
            data: vendite,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
});

</script>