$(document).ready(function() {
                    // Add smooth scrolling to all links in navbar + footer link
                    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                        // Make sure this.hash has a value before overriding default behavior
                        if (this.hash !== "") {
                            // Prevent default anchor click behavior
                            event.preventDefault();

                            // Store hash
                            var hash = this.hash;

                            // Using jQuery's animate() method to add smooth page scroll
                            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                            $('html, body').animate({
                                scrollTop: $(hash).offset().top
                            }, 900, function() {

                                // Add hash (#) to URL when done scrolling (default click behavior)
                                window.location.hash = hash;
                            });
                        } // End if
                    });

                    $(window).scroll(function() {
                        $(".slideanim").each(function() {
                            var pos = $(this).offset().top;

                            var winTop = $(window).scrollTop();
                            if (pos < winTop + 600) {
                                $(this).addClass("slide");
                            }
                        });
                    });


                    function myFunctionUse() {

                        var gallonUse = document.getElementById("gallonUse").value;
                        var siteUse = document.getElementById("siteUse").value;
                        var avgUse = siteUse * 3000;
                        var ctx = document.getElementById("myChart").getContext("2d");


                        var data = {
                            labels: ["Water Usage"],
                            datasets: [{
                                label: "Your Usage",
                                backgroundColor: "red",
                                data: [gallonUse]
                            }, {
                                label: "Average Usage",
                                backgroundColor: "blue",
                                data: [avgUse]
                            }]
                        };

                        var myBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
                            options: {
                                barValueSpacing: 20,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            min: 0,
                                        }
                                    }]
                                }
                            }
                        });

                        var gallonUse = document.getElementById("gallonUse").value;
                        var siteUse = document.getElementById("siteUse").value;
                        var avgUse = siteUse * 3000;
                        var avgCost = avgUse * 0.00295;
                        var yourCost = gallonUse * 0.00295;
                        var ctx = document.getElementById("myChart2").getContext("2d");


                        var data = {
                            labels: ["Post-Meter Savings"],
                            datasets: [{
                                label: "Your Cost Now",
                                backgroundColor: "red",
                                data: [yourCost]
                            }, {
                                label: "Post-Meter Cost",
                                backgroundColor: "blue",
                                data: [avgCost]
                            }]
                        };

                        var myBarChart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
                            options: {
                                barValueSpacing: 20,
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            min: 0,
                                        }
                                    }]
                                }
                            }
                        });
                    }

                    function myFunctionUse1() {
                        var gallonUse = document.getElementById("gallonUse").value;
                        var siteUse = document.getElementById("siteUse").value;
                        var avgUse = siteUse * 3000;
                        var avgCost = avgUse * 0.00295;
                        var yourCost = gallonUse * 0.00295;
                        var saving = yourCost - avgCost;
                        document.getElementById("savings").innerHTML = "You could save $" + saving + " per month by installing water meters.";

                    }



                    $("#calculateUse").click(function() {
                        myFunctionUse();
                        myFunctionUse1();

                    });

                    function myFunctionUseCubic() {
                        var cubicUse = document.getElementById("cubicFT").value;
                        var cubConvert = 7.48052;
                        var totalCub = cubicUse * cubConvert;
                        
                        document.getElementById("CtoG").value = totalCub.toFixed(2);
                    


                    }
                   
                    $("#calculateUseCubic").click(function() {
                        myFunctionUseCubic();
                       

                    });



})