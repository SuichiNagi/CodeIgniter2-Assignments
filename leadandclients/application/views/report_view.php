<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leads and Clients</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    h1{
        border: 2px solid black;
        padding: 5px;
    }
   
    .container{
        padding: 25px;
    }
        h2{
            display: inline-block;
            margin: 15px 0;
            border-bottom: 1px solid black;
        }
        table{
            border-collapse: collapse;
        }
        thead{
            font-size: 20px;
        }
        .title{
            border-bottom: 1px solid black;
        }
        thead{
            border: 1px solid black;
        }
        tbody{
            border-bottom: 1px solid black;
            border-left: 1px solid black;
            border-right: 1px solid black;
        }
        td{
            padding: 2px 10px;
            border-left: 1px solid black;
        }
</style>
<script>
window.onload = function () {

var options = {
	title: {
		text: "Customers and number of new leads"
	},
	animationEnabled: true,
	data: [{
		type: "pie",
		startAngle: 40,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y}%",
		dataPoints: [
        <?php foreach($lists as $value){ ?>
			{ y: <?= $value['number_of_leads']; ?>, label: "<?= $value['client_name']; ?>" },
        <?php } ?>
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
<body>
    <h1>Report Dashboard</h1>
    <div class="container">
    <h2>List of all customers and # of leads</h2>
    <table>
        <thead>
            <tr class="title">
                <td>Customer Name</td>
                <td>Number of Leads</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lists as $row){ ?>
            <tr>
                <td><?= $row['client_name']; ?></td>
                <td><?= $row['number_of_leads']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>