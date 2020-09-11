@props(['data', 'id' => Str::uuid()])

<canvas id="{{ $id }}" class="max-w-full max-h-full"></canvas>
<script>
    var el = document.getElementById('{{ $id }}')
    var ctx = el.getContext("2d");
    console.log(el.clientHeight)
    gradient = ctx.createLinearGradient(0, 0, 0, el.clientHeight);
    gradient.addColorStop(0, 'rgba(45, 55, 72, 1)');
    gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            datasets: [{
                backgroundColor: gradient,
                lineTension: 0.2,
                data: [
                    {
                        x: "2020-01-01",
                        y: 1
                    },
                    {
                        t: "2020-01-02",
                        y: 10
                    },
                    {
                        t: "2020-01-03",
                        y: 5
                    },
                    {
                        t: "2020-01-15",
                        y: 12
                    },
                    {
                        t: "2020-01-20",
                        y: 25
                    },
                    {
                        t: "2020-01-31",
                        y: 4
                    },
                ]
            }]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                    display: false,
                    type: 'time'
                }],
                yAxes: [{
                    display: false,
                }]
            },
            elements: {
                point: {
                    radius: 0
                }
            }
        }
    });

</script>
