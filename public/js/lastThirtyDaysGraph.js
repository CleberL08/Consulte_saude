var ctx = document.getElementsByClassName('line-chart');

        var chartGraph = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["25/05","26/05", "27/05", "28/05", "29/05", "30/05","31/05","01/06","02/06","03/06","04/06","05/06","06/06","07/06","08/06","09/06","10/06","11/06","12/06","13/06","14/06","15/06","16/06", "17/06", "18/06" , "19/06", "20/06", "21/06", "22/06", "23/06"],
                datasets: [{
                    label: "Óbitos",
                    data: [2173,2398,2245,2371,2012,874,860,2408,2507,1682,1454,1689,873,1010,2378,2723,2504,2216,2037,1129,827,2468,2997,2311,2495,2301,1025,761,2131, 2392],
                    fill: true,
                    backgroundColor: "lightgray",
                    pointBackgroundColor:"gray",   
                    borderColor: "gray",
                    pointRadius: 4
                }]

            }

        });