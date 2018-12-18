$(document).ready(function () {
    var graf = document.getElementById("grafico1");
    carregaGrafico = function(contrato) {
        $.ajax({
            url: "functions/buscahistoricocheckin.php",
            type: 'POST',
            data: {
                contrato: contrato
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            },
            success: function (data, textStatus, jqXHR) {
                if(!data.erro) {
                    var labels = new Array();
                    var dados = new Array();

                    $.each(data.dados, function(key, value) {
                        labels.push(key);
                        dados.push(value);
                    });

                    var lineChart = new Chart(graf, {
                        type: 'line',
                        data: {
                          labels: labels,
                          datasets: [{
                                label: "Checkins",
                                backgroundColor: "rgba(245, 134, 52, 0.31)",
                                borderColor: "rgba(245, 134, 52, 0.7)",
                                pointBorderColor: "rgba(245, 134, 52, 0.7)",
                                pointBackgroundColor: "rgba(245, 134, 52, 0.7)",
                                pointHoverBackgroundColor: "#fff",
                                pointHoverBorderColor: "rgba(220,220,220,1)",
                                pointBorderWidth: 1,
                                data: dados
                          }]
                        }
                    });
                }
            }
        });
    };
});
