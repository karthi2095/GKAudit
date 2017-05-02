<html>
<head>
<title>My first chart using FusionCharts Suite XT</title>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
<script type="text/javascript" src="http://static.fusioncharts.com/code/latest/themes/fusioncharts.theme.fint.js?cacheBust=56"></script>
<script type="text/javascript">
  FusionCharts.ready(function(){
    var fusioncharts = new FusionCharts({
    type: 'radar',
    renderAt: 'chart-container',
    width: '500',
    height: '350',
    dataFormat: 'json',
    dataSource: {
        "chart": {
            "caption": "Store rating across parameters",
            "subCaption": "Based on customer feedback survey",
            "numberPreffix": "$",
            "theme": "fint",
            "radarfillcolor": "#ffffff",
        },
        "categories": [{
            "category": [{
                "label": "Ambience"
            }, {
                "label": "Product Assortment"
            }, {
                "label": "Price Competitiveness"
            }, {
                "label": "Service"
            },
            {
                "label": "Service"
            },
            {
                "label": "Service"
            }, {
                "label": "Recommend to others"
            }]
        }],
        "dataset": [{
            "seriesname": "User Ratings",
            "data": [{
                "value": "5"
            }, {
                "value": "2.3"
            }, {
                "value": "3"
            }, 
            {
                "value": "0"
            },
            {
                "value": "0"
            },{
                "value": "0"
            }, {
                "value": "0"
            }]
        }]
    }
}
);
    fusioncharts.render();
});
</script>
</head>
<body>
  <div id="chart-container">FusionCharts XT will load here!</div>
</body>
</html>