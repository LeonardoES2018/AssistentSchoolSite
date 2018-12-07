$(document).ready(function(){
    $("#btnModal").click(function(){
        $("#myModal").modal();
    });
});

$(document).ready(function(){
    // convert selects already on the page at dom load
    $('select.form-control').combobox();	
      
    $('#it').click(function(e){
      $('ul.dropdown-menu').toggle();
    });
    
  //  $('input').focus(function(e){
  //    $('ul.dropdown-menu').toggle();
  //  });
    
  });
  
var ctx4 = document.getElementById("myPieChart4");
var myPieChart4 = new Chart(ctx4, {
  type: 'pie',
  data: {
    labels: ["Bom", "Medio", "Ruim"],
    datasets: [{
      data: [50, 18, 40],
      backgroundColor: ['#28a745', '#ffc107', '#dc3545'],
    }],
  },
});