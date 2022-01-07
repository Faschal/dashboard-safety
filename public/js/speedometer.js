
// First Speedometer

/* set radius for all circles */
var r = 120;
var circles = document.querySelectorAll('.circle');
var total_circles = circles.length;
for (var i = 0; i < total_circles; i++) {
    circles[i].setAttribute('r', r);
}
/* set meter's wrapper dimension */
var meter_dimension = (r * 2) + 100;        
var wrapper = document.querySelector('#wrapper');
wrapper.style.width = meter_dimension + 'px';
wrapper.style.height = (meter_dimension) + 'px';		

/* add strokes to circles  */

var cf = 2 * Math.PI * r;
var semi_cf = cf / 2;
var semi_cf_1by3 = semi_cf / 13;  //Change red bar size
var semi_cf_2by3 = semi_cf_1by3 * 2; //Change yellow size        
document.querySelector('#outline_curves')
    .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
document.querySelector('#low')
    .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
document.querySelector('#avg')
    .setAttribute('stroke-dasharray', semi_cf_2by3 + ',' + cf);
document.querySelector('#high')
    .setAttribute('stroke-dasharray', 6 + ',' + cf); //Change green size		
var slider = document.querySelector('#slider');		
var mask = document.querySelector('#mask');
var meter_needle =  document.querySelector('#meter_needle');

function range_change_event() {
    var percent = slider.value;
    var meter_value = (semi_cf - ((percent * semi_cf) / 100));            		    
    meter_needle.style.transform = 'rotate(' + (270 + ((percent * 180) / 100)) + 'deg)';		                
}

var event = new Event(range_change_event());
slider.dispatchEvent(event);               



// Second Speedometer 

/* set radius for all circles */
var r = 120;
var circles = document.querySelectorAll('.circle');
var total_circles = circles.length;
for (var i = 0; i < total_circles; i++) {
    circles[i].setAttribute('r', r);
}
/* set meter's wrapper dimension */
var meter_dimension = (r * 2) + 100;
var wrapper = document.querySelector('#wrapper_2');
wrapper.style.width = meter_dimension + 'px';
wrapper.style.height = meter_dimension + 'px';
/* add strokes to circles  */

var cf = 2 * Math.PI * r;
var semi_cf = cf / 2;
var semi_cf_1by3 = semi_cf / 13;
var semi_cf_2by3 = semi_cf_1by3 * 2;
document.querySelector('#outline_curves_2')
    .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
document.querySelector('#low_2')
    .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
document.querySelector('#avg_2')
    .setAttribute('stroke-dasharray', semi_cf_2by3 + ',' + cf);
document.querySelector('#high_2')
    .setAttribute('stroke-dasharray', 6 + ',' + cf);		
var slider = document.querySelector('#slider_2');		
var mask = document.querySelector('#mask_2');
var meter_needle =  document.querySelector('#meter_needle_2');
function range_change_event_2() {
    var percent = slider.value;
    var meter_value = (semi_cf - ((percent * semi_cf) / 100));            		    
    meter_needle.style.transform = 'rotate(' + (270 + ((percent * 180) / 100)) + 'deg)';		    
}

var event = new Event(range_change_event_2());
slider.dispatchEvent(event);        



// Third Speedometer 

/* set radius for all circles */
var r = 120;
var circles = document.querySelectorAll('.circle');
var total_circles = circles.length;
for (var i = 0; i < total_circles; i++) {
    circles[i].setAttribute('r', r);
}
/* set meter's wrapper dimension */
var meter_dimension = (r * 2) + 100;
var wrapper = document.querySelector('#wrapper_3');
wrapper.style.width = meter_dimension + 'px';
wrapper.style.height = meter_dimension + 'px';
/* add strokes to circles  */

var cf = 2 * Math.PI * r;
var semi_cf = cf / 2;
var semi_cf_1by3 = semi_cf / 13;
var semi_cf_2by3 = semi_cf_1by3 * 2;
document.querySelector('#outline_curves_3')
    .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
document.querySelector('#low_3')
    .setAttribute('stroke-dasharray', semi_cf + ',' + cf);
document.querySelector('#avg_3')
    .setAttribute('stroke-dasharray', semi_cf_2by3 + ',' + cf);
document.querySelector('#high_3')
    .setAttribute('stroke-dasharray', 6 + ',' + cf);		
var slider = document.querySelector('#slider_3');		
var mask = document.querySelector('#mask_3');
var meter_needle =  document.querySelector('#meter_needle_3');
function range_change_event_3() {
    var percent = slider.value;
    var meter_value = (semi_cf - ((percent * semi_cf) / 100));            		    
    meter_needle.style.transform = 'rotate(' + (270 + ((percent * 180) / 100)) + 'deg)';		    
}

var event = new Event(range_change_event_3());
slider.dispatchEvent(event);    

