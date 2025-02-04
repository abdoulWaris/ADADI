@extends('layout.app')
@section('contenu')


<div class="box-content" id="MyChart"  ></div>

@endsection
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">

     google.charts.load('current', {'packages':['bar']}); 
     //dessin histogramme pour le nombre de recouvrement par agent
    google.charts.setOnLoadCallback(drawChartNombre);

    //dessin hitogramme pour le montant du recouvrement par date
    google.charts.setOnLoadCallback(drawChartMontant);

    //appel de fonction pour l'histogramme par nombre
    function drawChartNombre()
    {
        //initialisation des données pour nombre
            var data = google.visualization.arrayToDataTable([
                ['Date', 'Nombre Donnation','Montant Donnation'],

                //on boucle sur les societes
                @foreach($stat as $value)
                //initialisation des données
                ["{{$value->date_transaction }}",{{$value->nombre}},{{$value->somme}}],
                @endforeach
            ]);

            //initialisation des options
            var options = {
                chart: {
                    title: 'Vision Donnations',
                    subtitle: 'Date, Nombre ,Montant recouvré',
                },
                series: {
            0: { axis: 'Montant' },
            1: { axis: 'nombre' } 
          },
                bar: { groupWidth: "85%" },
                bars: 'vertical',
                axes: {
            y: {
                Montant: {label: 'Nombre de donnation'}, // ordonnée gauche
                nombre: {side: 'right', label: 'Montant Recouvré'} // ordonnée droite.
            }
          }
               
            }
            //dessin du graphique
            var chart = new google.charts.Bar(document.getElementById('MyChart'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
    }

</script>
