$(document).ready(function() {

	/**
	 * call the data.php file to fetch the result from db table.
	 */
	$.ajax({
		url : "http://localhost/IVS/chartjs2-master/api/data.php",
		type : "GET",
		success : function(data){
			console.log(data);

			var score = {
				TeamA : [],
				TeamB : []
			};

			var len = data.length;

			for (var i = 0; i < len; i++) {
				if (data[i].team == "TeamA") {
					score.TeamA.push(data[i].score);
				}
				else if (data[i].team == "TeamB") {
					score.TeamB.push(data[i].score);
				}
			}

			//get canvas
			var ctx = $("#line-chartcanvas");

			var data = {
				labels : ["Oct", "Nov", "Des", "Jan", "Feb"],
				datasets : [
					{
						label : "Groth Rate Oct17-Sep18",
						data : score.TeamA,
						backgroundColor : "blue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5
					}
				]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Groth Rate Oct17-Sep18",
					fontSize : 18,
					fontColor : "#111"
				},
				legend : {
					display : true,
					position : "bottom"
				}
			};

			var chart = new Chart( ctx, {
				type : "line",
				data : data,
				options : options
			} );

		},
		error : function(data) {
			console.log(data);
		}
	});

});