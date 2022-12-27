$(document).ready(function() {

	if (window.Worker) {
		
		var $result = $("#result");
		var isDone = false;
		var total_result=[];
		var str={};
		var combine='';
		var flag=0;
		var combine3='';
		var firstarray1=[];
		var secondarray1=[];
		$("#uploadBtn").on("change", function(evt) {
			
			isDone = false;
			$result.html("");
			$("#load-progress").text("0%").attr("aria-valuenow", 0).css("width", "0%");
			//$("#result_block").removeClass("hidden").addClass("show");
			
			var fileName = evt.target.files[0];
			
			// Read the file
			var reader = new FileReader();
			reader.onload = (function(theFile) {
				return function(e) {
					
					// Web Worker
					// var worker = new Worker('./js/worker.js');
					var worker = new Worker(URL.createObjectURL(new Blob(["("+worker_function.toString()+")()"], {type: 'text/javascript'})));
				
					worker.addEventListener('message', function(e) {
						
						var msg = e.data;
						
						switch(msg.type) {
							case "progress-update":
								$("#load-progress").text(msg.data.toFixed(2) + "%")
									.attr("aria-valuenow", msg.data.toFixed(2))
									.css("width", msg.data.toFixed(2) + "%");
								break;
							case "slide":
								//console.log(msg.data);
								$result.append(msg.data);
								break;
							case "processMsgQueue":
								processMsgQueue(msg.data);
								break;
							case "pptx-thumb":
								$("#pptx-thumb").attr("src", "data:image/jpeg;base64," + msg.data);
								break;
							case "slideSize":
								if (localStorage) {
									localStorage.setItem("slideWidth", msg.data.width);
									localStorage.setItem("slideHeight", msg.data.height);
								} else {
									alert("Browser don't support Web Storage!");
								}
								break;
							case "globalCSS":
								$result.append("<style>" + msg.data + "</style>");
								break;
							case "ExecutionTime":
								$("#info_block").html("Execution Time: " + msg.data + " (ms)");
								isDone = true;
								worker.postMessage({
									"type": "getMsgQueue"
								});
								break;
							case "WARN":
								console.warn('Worker: ', msg.data);
								break;
							case "ERROR":
								console.error('Worker: ', msg.data);
								$("#error_block").text(msg.data);
								break;
							case "DEBUG":
								console.debug('Worker: ', msg.data);
								break;
							case "INFO":
							default:
								console.info('Worker: ', msg.data);
						}
								
					}, false);
					worker.postMessage({
						"type": "processPPTX",
						"data": e.target.result
					});
					
				}
			})(fileName);
			reader.readAsArrayBuffer(fileName);
			
		});
		///////////////////////////////////
		$("#uploadBtn1").on("change", function(evt) {
			
			isDone = false;
			if($result!=0)
			{
				flag=1;
			}
			if(flag==1)
			{
				var comb = $result.html();
				const firstarray=comb.split("</section>");
				for(var k=0; k<firstarray.length; k++)
				{
					firstarray1[k]=firstarray[k]+"</section>";
					//combine3 = combine3 + firstarray1[k];
				}
			}
			$result.html("");
			$("#load-progress").text("0%").attr("aria-valuenow", 0).css("width", "0%");
			//$("#result_block").removeClass("hidden").addClass("show");
			
			var fileName = evt.target.files[0];
			
			// Read the file
			var reader = new FileReader();
			reader.onload = (function(theFile) {
				return function(e) {
					
					// Web Worker
					// var worker = new Worker('./js/worker.js');
					var worker = new Worker(URL.createObjectURL(new Blob(["("+worker_function.toString()+")()"], {type: 'text/javascript'})));
				
					worker.addEventListener('message', function(e) {
						
						var msg = e.data;
						
						switch(msg.type) {
							case "progress-update":
								$("#load-progress").text(msg.data.toFixed(2) + "%")
									.attr("aria-valuenow", msg.data.toFixed(2))
									.css("width", msg.data.toFixed(2) + "%");
								break;
							case "slide":
								//console.log(msg.data);
								$result.append(msg.data);
								break;
							case "processMsgQueue":
								processMsgQueue(msg.data);
								break;
							case "pptx-thumb":
								$("#pptx-thumb1").attr("src", "data:image/jpeg;base64," + msg.data);
								break;
							case "slideSize":
								if (localStorage) {
									localStorage.setItem("slideWidth", msg.data.width);
									localStorage.setItem("slideHeight", msg.data.height);
								} else {
									alert("Browser don't support Web Storage!");
								}
								break;
							case "globalCSS":
								$result.append("<style>" + msg.data + "</style>");
								break;
							case "ExecutionTime":
								$("#info_block").html("Execution Time: " + msg.data + " (ms)");
								isDone = true;
								worker.postMessage({
									"type": "getMsgQueue"
								});
								break;
							case "WARN":
								console.warn('Worker: ', msg.data);
								break;
							case "ERROR":
								console.error('Worker: ', msg.data);
								$("#error_block").text(msg.data);
								break;
							case "DEBUG":
								console.debug('Worker: ', msg.data);
								break;
							case "INFO":
							default:
								console.info('Worker: ', msg.data);
						}
								
					}, false);
					worker.postMessage({
						"type": "processPPTX",
						"data": e.target.result
					});
					
				}
			})(fileName);
			reader.readAsArrayBuffer(fileName);
			
		});
		///////////////////////////////////
		$( "#full-screen-btn" ).on( "click", function() {
			window.open("./reveal/demo.html", "_blank");
		  });
		$("#to-reveal-btn").click(function () {
			//loopboder();
			document.getElementById("buts").style.display="block";
			if (localStorage) {
				
				if( flag == 0)
				{
					var combine1=$result.html();
					
					if(combine1 == null)
					{
						alert(combine1);
					}
					const firstarray=combine1.split("</section>");
					for(var k=0; k<firstarray.length; k++)
					{
						firstarray1[k]=firstarray[k]+"</section>";
					}
					console.log(firstarray1.length);
					localStorage.setItem("slides", LZString.compressToUTF16($result.html()));
					if (localStorage) {
						document.getElementById("target").innerHTML = LZString.decompressFromUTF16(localStorage.getItem("slides"));
						Reveal.initialize({
							width: +localStorage.getItem("slideWidth"),
							height: +localStorage.getItem("slideHeight"),
							controls: true,
							progress: true,
							history: true,
							center: true,
							transition: 'convex',
							dependencies: [{
								src: '/highlight.js',
								async: true,
								condition: function() { return !!document.querySelector('pre code'); },
								callback: function() { hljs.initHighlightingOnLoad(); }
							}]
						});
					} 
					else {
						alert("Browser don't support Web Storage!");
					}
					
				}else
				{
					var combine2=$result.html();
					const secondarray=combine2.split("</section>");
					for(var k=0; k<secondarray.length; k++)
					{
						secondarray1[k]=secondarray[k]+"</section>";
					}	
					//localStorage.setItem("slides", LZString.compressToUTF16(combine3));
					// if(firstarray1.length>secondarray1.length)
					// {	
						for(var g=0; g<28; g++)
						{
							console.log("ere"+g);
							if(firstarray1[g]!=null&&secondarray1[g]!=null)
							{
								combine3=combine3+firstarray1[g]+secondarray1[g];
							}
							if(firstarray1[g]!=null&&secondarray1[g]==null)
							{
								combine3=combine3+firstarray1[g];
							}
							if(firstarray1[g]==null&&secondarray1[g]!=null)
							{
								combine3=combine3+secondarray1[g];
							}
							if(firstarray1[g]==null&&secondarray1[g]==null)
							{
								break;
							}
						}
						console.log(combine3);
						localStorage.setItem("slides", LZString.compressToUTF16(combine3));
					// }
					// else
					// {
					// 	for(var g=0; g<secondarray1.length; g++)
					// 	{
					// 		if(firstarray1[g]!=null&&secondarray1[g]!=null)
					// 		{
					// 			combine3=combine3+firstarray1[g]+secondarray1[g];
					// 		}
					// 		if(firstarray1[g]==null&&secondarray1[g]!=null)
					// 		{
					// 			combine3=combine3+secondarray1[g];
					// 		}
					// 	}
					// 	localStorage.setItem("slides", LZString.compressToUTF16(combine3));
					// }
					if (localStorage) {
						document.getElementById("target").innerHTML = LZString.decompressFromUTF16(localStorage.getItem("slides"));
						Reveal.initialize({
							width: +localStorage.getItem("slideWidth"),
							height: +localStorage.getItem("slideHeight"),
							controls: true,
							progress: true,
							history: true,
							center: true,
							transition: 'convex',
							dependencies: [{
								src: '/highlight.js',
								async: true,
								condition: function() { return !!document.querySelector('pre code'); },
								callback: function() { hljs.initHighlightingOnLoad(); }
							}]
						});
					}
				}
				flag++;
				//window.open("./reveal/demo.html", "_blank");
				
			} else {
				alert("Browser don't support Web Storage!");
			}
		});
		
	} else {
		
		alert("Browser don't support Web Worker!");
		
	}
	
});

function loopboder(){
	var temp = 1;
	setInterval(function() {
		temp = 1 - temp;
		if(temp==0)
		{
			// document.getElementById("pptx-thumb").setAttribute("boder","1px solid red");
			// document.getElementById("pptx-thumb1").setAttribute("boder","none");
			$("#pptx-thumb").css("border", 'none');
			$("#pptx-thumb1").css("border", '1rem solid blue');
			//console.log("1111");
		}
		else{
			// document.getElementById("pptx-thumb").setAttribute("boder","none");
			// document.getElementById("pptx-thumb1").setAttribute("boder","1px solid red");
			$("#pptx-thumb1").css("border", 'none');
			$("#pptx-thumb").css("border", '1rem solid blue');
			//console.log("22222");
		}
	}, 13500);
}
function processMsgQueue(queue) {
	for (var i=0; i<queue.length; i++) {
		processSingleMsg(queue[i].data);
	}
}

function processSingleMsg(d) {
	
	var chartID = d.chartID;
	var chartType = d.chartType;
	var chartData = d.chartData;

	var data =  [];
	
	var chart = null;
	switch (chartType) {
		case "lineChart":
			data = chartData;
			chart = nv.models.lineChart()
						.useInteractiveGuideline(true);
			chart.xAxis.tickFormat(function(d) { return chartData[0].xlabels[d] || d; });
			break;
		case "barChart":
			data = chartData;
			chart = nv.models.multiBarChart();
			chart.xAxis.tickFormat(function(d) { return chartData[0].xlabels[d] || d; });
			break;
		case "pieChart":
		case "pie3DChart":
			data = chartData[0].values;
			chart = nv.models.pieChart();
			break;
		case "areaChart":
			data = chartData;
			chart = nv.models.stackedAreaChart()
						.clipEdge(true)
						.useInteractiveGuideline(true);
			chart.xAxis.tickFormat(function(d) { return chartData[0].xlabels[d] || d; });
			break;
		case "scatterChart":
			
			for (var i=0; i<chartData.length; i++) {
				var arr = [];
				for (var j=0; j<chartData[i].length; j++) {
					arr.push({x: j, y: chartData[i][j]});
				}
				data.push({key: 'data' + (i + 1), values: arr});
			}
			
			//data = chartData;
			chart = nv.models.scatterChart()
						.showDistX(true)
						.showDistY(true)
						.color(d3.scale.category10().range());
			chart.xAxis.axisLabel('X').tickFormat(d3.format('.02f'));
			chart.yAxis.axisLabel('Y').tickFormat(d3.format('.02f'));
			break;
		default:
	}
	
	if (chart !== null) {
		
		d3.select("#" + chartID)
			.append("svg")
			.datum(data)
			.transition().duration(500)
			.call(chart);
		
		nv.utils.windowResize(chart.update);
		
	}
	
}
