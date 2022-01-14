function change_triangle_color() {
    if(triangle_1 > 0)
    {
        $('.first').css('background', '#EA0C0C');
        $('.second').css('background', '#EA0C0C');
        $('.third').css('background', '#EA0C0C');
        $('.fourth').css('background', '#EA0C0C');
        $('.fifth').css('background', '#EA0C0C');
        $('#container').css('background', '#EA0C0C');
    }
    else if (triangle_2 > 0)
    {        
        $('.second').css('background', '#FD821E');
        $('.third').css('background', '#FD821E');
        $('.fourth').css('background', '#FD821E');
        $('.fifth').css('background', '#FD821E');
        $('#container').css('background', '#FD821E');
    }
    else if (triangle_3 > 0)
    {                
        $('.third').css('background', '#FD821E');
        $('.fourth').css('background', '#FD821E');
        $('.fifth').css('background', '#FD821E');
        $('#container').css('background', '#FD821E');
    }
    else if (triangle_4 > 0)
    {                        
        $('.fourth').css('background', '#FFF825');
        $('.fifth').css('background', '#FFF825');
        $('#container').css('background', '#FFF825');
    }
    
}

var first = document.querySelector('.first');
var event = new Event(change_triangle_color());
first.dispatchEvent(event);


Chart.register(ChartDataLabels);
Chart.defaults.set('plugins.datalabels', {
color: '#F8F6F4'
});

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {        
        datasets: [{
            label: 'My First Dataset',
            data: [ number1_2, number1_1 ],
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
            data: [ number2_2, number2_1 ],
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