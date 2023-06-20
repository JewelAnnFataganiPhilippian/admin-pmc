<div>
    <div class="h-20 gap-5">
        <h2 class=" text-white text-xl font-bold">
            WELCOME, ALEX!
        </h2>
        <h2 class="text-white ">
            Dashboard
        </h2>
    </div>
    
    <div class=" grid grid-cols-1 md:grid-cols-1 xl:grid-cols-3 gap-6 justify-between mb-6">
    
        <div class="bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
            <div class="flex justify-between mx-3">
                <div class="text-base font-medium text-gray-600 flex items-center" >Total number of application</div>
                <div class="w-10 h-10 mt-2 rounded-full flex justify-center items-center bg-white bg-opacity-10 border transition-all duration-500">
                    <i class="icon text-xl fa-solid fa-user-lock"></i>
                </div>
            </div>
    
            <div class="flex justify-center mt-4 mb-8">
                <span class=" text-5xl font-light">20</span>
            </div>
    
            <div class="w-full bg-gray-200 p-3">
                <div class="flex justify-around">
                    <div class="text-center">
                        <p class="font-bold text-lg">10</p>
                        <p class="text-xs">Active</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-lg">10</p>
                        <p class="text-xs">Inactive</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
            <div class="flex justify-between mx-3">
                <div class="text-base font-medium text-gray-600 flex items-center" >Total number of application</div>
                <div class="w-10 h-10 mt-2 rounded-full flex justify-center items-center bg-white bg-opacity-10 border transition-all duration-500">
                    <i class="icon text-xl fa-solid fa-user-lock"></i>
                </div>
            </div>
    
            <div class="flex justify-center mt-4 mb-8">
                <span class=" text-5xl font-light">25</span>
            </div>
    
            <div class="w-full bg-gray-200 p-3">
                <div class="flex justify-around">
                    <div class="text-center">
                        <p class="font-bold text-lg">10</p>
                        <p class="text-xs">Hired</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-lg">5</p>
                        <p class="text-xs">Decline</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-lg">10</p>
                        <p class="text-xs">On Process</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.10);">
            <div class="flex justify-between mx-3">
                <div class="text-base font-medium text-gray-600 flex items-center" >Total number of application</div>
                <div class="w-10 h-10 mt-2 rounded-full flex justify-center items-center bg-white bg-opacity-10 border transition-all duration-500">
                    <i class="icon text-xl fa-solid fa-user-lock"></i>
                </div>
            </div>
    
            <div class="flex justify-center mt-4 mb-8">
                <span class=" text-5xl font-light">45</span>
            </div>
    
            <div class="w-full bg-gray-200 p-3">
                <div class="flex justify-around">
                    <div class="text-center">
                        <p class="font-bold text-lg">30</p>
                        <p class="text-xs">Active</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-lg">10</p>
                        <p class="text-xs">Full</p>
                    </div>
                    <div class="text-center">
                        <p class="font-bold text-lg">5</p>
                        <p class="text-xs">Inactive</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    
    <!-- bar-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 ">
        <div class="w-full h-80 bg-white col-span-2" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >

        </div>
        <div class="w-full h-80 bg-white flex justify-center items-center" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="">
                <p class="mb-10 text-7xl text-center">50</p>
                <p class="flex items-center px-5 text-gray-800 font-medium text-center">Total number of inquiries</p>
            </div>
        </div>
    </div>
    
    <!-- PIEs -->
    
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-5">
        <div class="w-full h-80 bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <p class="h-1/6 flex items-center px-5 text-gray-800 font-medium">Total number of news and announcement</p>
            <div class="h-2/3 w-full flex justify-center">
               <div class="h-full w-10/12 flex items-start">
                    <canvas id="doughnut1Chart" class="w-full "></canvas>
               </div>
            </div>
            <div class="h-1/6  flex justify-center items-center">
                <div class="h-2/6 flex gap-5 ">
                    <div class="h-full flex gap-2">
                        <div style="color:#555555"> New</div>
                    </div>
                    <div class="h-full flex gap-2">
                        <div style="color:  #860909"> On Process</div>
                    </div>
                    <div class="h-full flex gap-2">
                        <div class="text-black"> Done</div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="w-full h-80 z-10 bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <p class="h-1/6 flex items-center px-5 text-gray-800 font-medium">Total number of seminars and training</p>
            <div class="h-2/3 w-full flex justify-center ">
                <div class="h-full w-10/12 flex items-start">
                     <canvas id="doughnut2Chart" class="w-full "></canvas>
                </div>
             </div>
             <div class="h-1/6  flex justify-center items-center">
                 <div class="h-2/6 flex gap-5 ">
                     <div class="h-full flex gap-2">
                         <div style="color:#555555"> New</div>
                     </div>
                     <div class="h-full flex gap-2">
                         <div style="color:  #860909"> On Process</div>
                     </div>
                     <div class="h-full flex gap-2">
                         <div class="text-black"> Done</div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
    <div class="w-full mt-6 sm:w h-80 bg-white" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
        <p class="h-1/6 flex items-center px-5 text-gray-800 font-medium">Total number of exam</p>
        <div class="h-1/12 grid grid-cols-2 w-full">
            <div class=" w-full flex justify-center">
                <div class="h-full w-10/12 flex items-start">
                     <canvas id="doughnut3Chart" class="w-full "></canvas>
                </div>
             </div >
             <div class=" w-full flex justify-center items-center">
                <div class="h-3/12 w-3/5 grid grid-cols-2 gap-5 md:gap-0 gap-x-10 " >
                    {{-- <div class="h-full md:h-2/6 flex gap-2 md:gap-0"> --}}
                        <div style="color:#555555" > New</div>
                    {{-- </div> --}}
                    {{-- <div class="h-full md:h-2/6 flex gap-2"> --}}
                        <div style="color:  #860909"> On Process</div>
                    {{-- </div> --}}
                    {{-- <div class="h-full md:h-2/6 flex gap-2 md:gap-0"> --}}
                        <div class="text-black"> Done</div>
                    {{-- </div> --}}
                    {{-- <div class="h-full md:h-2/6 flex gap-2 md:gap-0"> --}}
                        <div class="text-black"> None</div>
                    {{-- </div> --}}
                </div>
             </div>
        </div>
    </div>
    
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-piechart-outlabels@0.1.4/dist/chartjs-plugin-piechart-outlabels.min.js"></script>

<script>
    // PIE

    /**
     * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
     */
    const doughnut1Config = {
        type: 'doughnut',
        data: {
            datasets: [
                {
                    data: [20, 50, 52],
                    backgroundColor: ['#CCCCCC', '#860909',  'black'],
                },
            ],
            labels: ['New', 'Process', 'Done'],
        },
        options: {
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 25,
                    bottom: 0
                },
            },
            responsive: true,
            cutoutPercentage: 70,
            legend: {
                display: false,
                position: 'bottom',
            },
            plugins: {
                outlabels: {
                    text: ' %v',
                    color: 'red',
                    stretch: 20,
                    backgroundColor: 'transparent',
                    font: {
                        resizable: true,
                        minSize: 12,
                    }
                },
            },
            animation: {
                onComplete: function () {
                    var ctx = this.chart.ctx;
                    var dataset = this.data.datasets[0];
                    var total = dataset.data.reduce(function (previousValue, currentValue) {
                        return previousValue + currentValue;
                    });
                    var centerX = (this.chartArea.left + this.chartArea.right) / 2;
                    var centerY = (this.chartArea.top + this.chartArea.bottom) / 2;

                    ctx.font = 'bold 2rem Arial';
                    ctx.fillStyle = '#333';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText(total, centerX, centerY);
                }
            },
        },
    }

    // change this to the id of your chart element in HTML
    const doughnut1 = document.getElementById('doughnut1Chart')
    window.myPie = new Chart(doughnut1, doughnut1Config)



    //doughnut2


    /**
     * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
     */
    const doughnut2Config = {
        type: 'doughnut',
        data: {
            datasets: [
                {
                    data: [70, 50, 20],
                    backgroundColor: ['#860909', '#CCCCCC', 'black'],
                },
            ],
            labels: ['New', 'Process', 'Done'],
        },
        options: {
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 25,
                    bottom: 0
                },
            },
            responsive: true,
            cutoutPercentage: 70,
            legend: {
                display: false,
                position: 'bottom',
            },
            plugins: {
                outlabels: {
                    text: ' %v',
                    color: 'red',
                    stretch: 20,
                    backgroundColor: 'transparent',
                    font: {
                        resizable: true,
                        minSize: 12,
                    }
                },
            },
            animation: {
                onComplete: function () {
                    var ctx = this.chart.ctx;
                    var dataset = this.data.datasets[0];
                    var total = dataset.data.reduce(function (previousValue, currentValue) {
                        return previousValue + currentValue;
                    });
                    var centerX = (this.chartArea.left + this.chartArea.right) / 2;
                    var centerY = (this.chartArea.top + this.chartArea.bottom) / 2;

                    ctx.font = 'bold 2rem Arial';
                    ctx.fillStyle = '#333';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillText(total, centerX, centerY);
                }
            },
        },
    }

    // change this to the id of your chart element in HTML
    const doughnut2 = document.getElementById('doughnut2Chart')
    window.myPie = new Chart(doughnut2, doughnut2Config)



        //doughnut2


        /**
         * For usage, visit Chart.js docs https://www.chartjs.org/docs/latest/
         */
        const doughnut3Config = {
            type: 'doughnut',
            data: {
                datasets: [
                    {
                        data: [70, 50, 20],
                        backgroundColor: ['#860909', '#CCCCCC', 'black'],
                    },
                ],
                labels: ['New', 'Process', 'Done'],
            },
            options: {
                layout: {
                    padding: {
                        left: 0,
                        right: 0,
                        top: 25,
                        bottom: 0
                    },
                },
                responsive: true,
                cutoutPercentage: 70,
                legend: {
                    display: false,
                    position: 'bottom',
                },
                plugins: {
                    outlabels: {
                        text: ' %v',
                        color: 'red',
                        stretch: 20,
                        backgroundColor: 'transparent',
                        font: {
                            resizable: true,
                            minSize: 12,
                        }
                    },
                },
                animation: {
                    onComplete: function () {
                        var ctx = this.chart.ctx;
                        var dataset = this.data.datasets[0];
                        var total = dataset.data.reduce(function (previousValue, currentValue) {
                            return previousValue + currentValue;
                        });
                        var centerX = (this.chartArea.left + this.chartArea.right) / 2;
                        var centerY = (this.chartArea.top + this.chartArea.bottom) / 2;

                        ctx.font = 'bold 2rem Arial';
                        ctx.fillStyle = '#333';
                        ctx.textAlign = 'center';
                        ctx.textBaseline = 'middle';
                        ctx.fillText(total, centerX, centerY);
                    }
                },
            },
        }

        // change this to the id of your chart element in HTML
        const doughnut3 = document.getElementById('doughnut3Chart')
        window.myPie = new Chart(doughnut3, doughnut3Config)

</script>


