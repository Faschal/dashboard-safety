Chart.register(ChartDataLabels);
Chart.defaults.set('plugins.datalabels', {
color: '#F8F6F4'
});

var lingkaran_1_1 = number1_2;
var lingkaran_1_2 = number1_1;
var lingkaran_2_1 = number2_2;
var lingkaran_2_2 = number2_1;

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {        
        datasets: [{
            label: 'My First Dataset',
            data: [ lingkaran_1_1, lingkaran_1_2 ],
            backgroundColor: [
                    'rgb(0,38,230)',
                    'rgb(0,179,30)',                                        
                ],
            hoverOffset: 2
            }]
    },    
    options: {                
        responsive: false,
        maintainAspectRatio: true,         
        plugins: {
            dataLabels: {
                formatters: function(value) {
                    return value;
                }
            }
        },
        
    }    
});

const ctx2 = document.getElementById('myChart2').getContext('2d');
const myChart2 = new Chart(ctx2, {
    type: 'doughnut',
    data: {        
        datasets: [{
            label: 'My First Dataset',
            data: [ lingkaran_2_1, lingkaran_2_2 ],
            backgroundColor: [
                    'rgb(0,38,230)',
                    'rgb(0,179,30)',                    
                ],
            hoverOffset: 2
            }]
    },
    options: {    
        responsive: false,
        maintainAspectRatio: true,
        plugins: {
            dataLabels: {
                formatters: function(value) {
                    return value;
                }
            }
        }            
    }    
});