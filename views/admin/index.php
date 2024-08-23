<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-md-12">
        <div id="chart"></div>
    </div>
    <div class="col-md-12">
        <div id="chart1"></div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.42.0/apexcharts.min.js" ></script>
<script>

    var options = {
        series: [{
            name: "Գրանցումներ",
            data: <?php echo json_encode($count_user)?>
        }],
        chart: {
            background: '#fff',
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false,
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            width: [5, 7, 5],
            curve: 'straight',
            dashArray: [0, 8, 5]
        },
        title: {
            text: 'Գրանցված հաճախորդները ըստ ամսվա',
            align: 'left'
        },
        legend: {
            tooltipHoverFormatter: function(val, opts) {
                return val + ' - <strong>' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + '</strong>'
            }
        },
        markers: {
            size: 0,
            hover: {
                sizeOffset: 6
            }
        },
        xaxis: {
            categories: <?php echo json_encode($date)?>,
        },
        yaxis: {
            labels: {
                formatter: function(val) {
                    return Math.round(val);
                }
            }
        },
        tooltip: {
            y: [
                {
                    title: {
                        formatter: function (val) {
                            return val
                        }
                    }
                },
            ]
        },
        grid: {
            borderColor: '#f1f1f1',
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();



    var options1 = {
        series: [{
            name: 'Պատվեր(ներ)',
            data: <?php echo json_encode($count_order)?>
        },
        ],
        chart: {
            background: '#fff',
            height: 350,
            type: 'area',
            zoom: {
                enabled: false
            },
            toolbar: {
                show: false,
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth'
        },
        title: {
            text: 'Պատվերները ըստ ամսվա',
            align: 'left'
        },
        xaxis: {
            categories: <?php echo json_encode($order_date)?>
        },
        yaxis: {
            labels: {
                formatter: function(val) {
                    return Math.round(val);
                }
            }
        },
    };

    var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
    chart1.render();
</script>
