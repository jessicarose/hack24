jQuery(document).ready(function ($) {
  var bubbleChart = new d3.svg.BubbleChart({
    supportResponsive: true,
    //container: => use @default
    size: 600,
    //viewBoxSize: => use @default
    innerRadius: 500 / 3.5,
    //outerRadius: => use @default
    radiusMin: 50,
    //radiusMax: use @default
    //intersectDelta: use @default
    //intersectInc: use @default
    //circleColor: use @default
    data: {
      items: [
        {text: "Satisfaction", count: "60"},
        {text: "Development", count: "40"},
        {text: "Pay", count: "72"},
        {text: "Work/Life", count: "60"},
        {text: "Treatment", count: "62"},
        {text: "Culture", count: "40"},
        {text: "Dept Size", count: "38"},
        {text: "Men to Women", count: "60"},
      ],
      eval: function (item) {return item.count;},
      classed: function (item) {return item.text.split(" ").join("");}
    },
    plugins: [
      {
        name: "lines",
        options: {
          format: [
            {// Line #0
              textField: "count",
              classed: {count: true},
              style: {
                "font-size": "28px",
                "font-family": "Source Sans Pro, sans-serif",
                "text-anchor": "middle",
                fill: "white"
              },
              attr: {
                dy: "0px",
                x: function (d) {return d.cx;},
                y: function (d) {return d.cy;}
              }
            },
            {// Line #1
              textField: "text",
              classed: {text: true},
              style: {
                "font-size": "14px",
                "font-family": "Source Sans Pro, sans-serif",
                "text-anchor": "middle",
                fill: "white"
              },
              attr: {
                dy: "20px",
                x: function (d) {return d.cx;},
                y: function (d) {return d.cy;}
              }
            }
          ],
          centralFormat: [
            {// Line #0
              style: {"font-size": "50px"},
              attr: {}
            },
            {// Line #1
              style: {"font-size": "30px"},
              attr: {dy: "40px"}
            }
          ]
        }
      }]
  });

  var bubbleChartMan = new d3.svg.BubbleChart({
      supportResponsive: true,
      container: ".bubbleChartMan",
      size: 600,
      //viewBoxSize: => use @default
      innerRadius: 500 / 3.5,
      //outerRadius: => use @default
      radiusMin: 50,
      //radiusMax: use @default
      //intersectDelta: use @default
      //intersectInc: use @default
      //circleColor: use @default
      data: {
        items: [
          {text: "Communication", count: "60"},
          {text: "Effective", count: "40"},
          {text: "Feedback", count: "72"},
          {text: "Contribution", count: "60"},
          {text: "Bias", count: "62"},
        ],
        eval: function (item) {return item.count;},
        classed: function (item) {return item.text.split(" ").join("");}
      },
      plugins: [
        {
          name: "lines",
          options: {
            format: [
              {// Line #0
                textField: "count",
                classed: {count: true},
                style: {
                  "font-size": "28px",
                  "font-family": "Source Sans Pro, sans-serif",
                  "text-anchor": "middle",
                  fill: "white"
                },
                attr: {
                  dy: "0px",
                  x: function (d) {return d.cx;},
                  y: function (d) {return d.cy;}
                }
              },
              {// Line #1
                textField: "text",
                classed: {text: true},
                style: {
                  "font-size": "14px",
                  "font-family": "Source Sans Pro, sans-serif",
                  "text-anchor": "middle",
                  fill: "white"
                },
                attr: {
                  dy: "20px",
                  x: function (d) {return d.cx;},
                  y: function (d) {return d.cy;}
                }
              }
            ],
            centralFormat: [
              {// Line #0
                style: {"font-size": "50px"},
                attr: {}
              },
              {// Line #1
                style: {"font-size": "30px"},
                attr: {dy: "40px"}
              }
            ]
          }
        }]
    });

  {
  var squiggleChart = c3.generate({
    bindto: ".squiggleChart",

    data: {
        columns: [
            ['Managers average overall score', 80.4]
        ],
        type: 'gauge',
        onclick: function (d, i) { console.log("onclick", d, i); },
        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
    },
    gauge: {
//        label: {
//            format: function(value, ratio) {
//                return value;
//            },
//            show: false // to turn off the min/max labels.
//        },
//    min: 0, // 0 is default, //can handle negative min e.g. vacuum / voltage / current flow / rate of change
//    max: 100, // 100 is default
//    units: ' %',
//    width: 39 // for adjusting arc thickness
    },
    color: {
        pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
        threshold: {
//            unit: 'value', // percentage is default
//            max: 200, // 100 is default
            values: [30, 60, 90, 100]
        }
    },
    size: {
        height: 180
    }
});

setTimeout(function () {
    chart.load({
        columns: [['data', 10]]
    });
}, 1000);

setTimeout(function () {
    chart.load({
        columns: [['data', 50]]
    });
}, 2000);

setTimeout(function () {
    chart.load({
        columns: [['data', 70]]
    });
}, 3000);

setTimeout(function () {
    chart.load({
        columns: [['data', 0]]
    });
}, 4000);

setTimeout(function () {
    chart.load({
        columns: [['data', 100]]
    });
}, 5000);
}

  {
  var squiggleChart2 = c3.generate({
    bindto: ".squiggleChart2",

    data: {
        columns: [
            ['Companys Culture rating', 90.4]
        ],
        type: 'gauge',
        onclick: function (d, i) { console.log("onclick", d, i); },
        onmouseover: function (d, i) { console.log("onmouseover", d, i); },
        onmouseout: function (d, i) { console.log("onmouseout", d, i); }
    },
    gauge: {
//        label: {
//            format: function(value, ratio) {
//                return value;
//            },
//            show: false // to turn off the min/max labels.
//        },
//    min: 0, // 0 is default, //can handle negative min e.g. vacuum / voltage / current flow / rate of change
//    max: 100, // 100 is default
//    units: ' %',
//    width: 39 // for adjusting arc thickness
    },
    color: {
        pattern: ['#FF0000', '#F97600', '#F6C600', '#60B044'], // the three color levels for the percentage values.
        threshold: {
//            unit: 'value', // percentage is default
//            max: 200, // 100 is default
            values: [30, 60, 90, 100]
        }
    },
    size: {
        height: 180
    }
});

setTimeout(function () {
    chart.load({
        columns: [['data', 10]]
    });
}, 1000);

setTimeout(function () {
    chart.load({
        columns: [['data', 50]]
    });
}, 2000);

setTimeout(function () {
    chart.load({
        columns: [['data', 70]]
    });
}, 3000);

setTimeout(function () {
    chart.load({
        columns: [['data', 0]]
    });
}, 4000);

setTimeout(function () {
    chart.load({
        columns: [['data', 100]]
    });
}, 5000);
}

});
