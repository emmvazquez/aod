

<figure class="highcharts-figure">
    <div id="<?=$Id?>1"></div>
    <table id="<?=$Id?>" >
        <thead>
            <tr>
                <th></th>
                <?php foreach ($Productores as $key ): ?>
                    <th><?=$key ?></th>
                <?php endforeach ?>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Contenido as $key ): ?>
                <tr>
                <th><?php echo $key['Descripcion'] ?></th>
                <td><?php echo $key['Cantidad1']  ?></td>
                <td><?php echo $key['Cantidad2']  ?></td>
                 <?php if (isset($key['Cantidad3'])): ?>
                     <td><?php echo $key['Cantidad3']  ?></td>
                 <?php endif ?>
                 <?php if (isset($key['Cantidad4'])): ?>
                     <td><?php echo $key['Cantidad4']  ?></td>
                 <?php endif ?>
                
            </tr> 
            <?php endforeach ?>
           
        </tbody>
    </table>
</figure>


<script type="text/javascript">
Highcharts.chart('<?=$Id?>1', {
    data: {
        table: '<?=$Id ?>'
    },
    chart: {
        type: 'column'
    },
    title: {
        text: '<?=$Titulo ?>'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
		</script>
	


