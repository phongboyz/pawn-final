
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script>
var options = {
    series: [@js($pawn_one), @js($pawn_two), @js($pawn_three), @js($pawn_four)],
    chart: {
        width: 500,
        type: 'donut',
    },
    labels: ['ສິນເຊື່ອທັງໝົດ', 'ສິນເຊື່ອເຄື່ອນໄຫວ', 'ສິນເຊື່ອກາຍກຳນົດ', 'ສິນເຊື່ອສຳເລັດ'],
    colors: ['#6C00FE', '#003EFF', '#FF0000',  '#08FF00'],
    plotOptions: {
        pie: {
            startAngle: -90,
            endAngle: 270
        }
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        type: 'gradient',
    },
    legend: {
        formatter: function(val, opts) {
            return val + " - " + opts.w.globals.series[opts.seriesIndex]
        }
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();
</script>

@endpush