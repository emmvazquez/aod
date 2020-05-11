<?php 

print_r($Contenido).'<br />';
print_r($Productores);

 ?>

<figure class="highcharts-figure">
    <div id="<?=$Id?>1"></div>
    <table id="<?=$Id?>" >
        <thead>
            <tr>
                <th></th>
                <?php foreach ($Productores as $key ): ?>
                    <th><?=$key->vendedor ?></th>
                <?php endforeach ?>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
            <?php foreach ($Contenido as $key ): ?>
                
              

                <td><?php echo $key->total  ?></td>          
            
            <?php endforeach ?>
           </tr> 
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
	


