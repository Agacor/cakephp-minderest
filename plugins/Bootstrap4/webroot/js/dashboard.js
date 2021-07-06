/* globals Chart:false, feather:false */

(function () {
  'use strict'

  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        
        console.log('cucu');
        
        
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        } else {

          console.log('hop');
          // console.log(form);
          // console.log(form.dataset);
          // console.log(form.dataset.ajaxSubmit);

          

          event.preventDefault();
          event.stopPropagation();



        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);





  // feather.replace()

  // // Graphs
  // var ctx = document.getElementById('myChart')
  // // eslint-disable-next-line no-unused-vars
  // var myChart = new Chart(ctx, {
  //   type: 'line',
  //   data: {
  //     labels: [
  //       'Sunday',
  //       'Monday',
  //       'Tuesday',
  //       'Wednesday',
  //       'Thursday',
  //       'Friday',
  //       'Saturday'
  //     ],
  //     datasets: [{
  //       data: [
  //         15339,
  //         21345,
  //         18483,
  //         24003,
  //         23489,
  //         24092,
  //         12034
  //       ],
  //       lineTension: 0,
  //       backgroundColor: 'transparent',
  //       borderColor: '#007bff',
  //       borderWidth: 4,
  //       pointBackgroundColor: '#007bff'
  //     }]
  //   },
  //   options: {
  //     scales: {
  //       yAxes: [{
  //         ticks: {
  //           beginAtZero: false
  //         }
  //       }]
  //     },
  //     legend: {
  //       display: false
  //     }
  //   }
  // })
})()
