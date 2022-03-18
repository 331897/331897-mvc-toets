
<table>
    <thead>
    
    </thead>
    <tbody>
    <?php 
    foreach($data["countryData"] as $value) {
        echo "<tr><td>$value->id</td><td>$value->name</td></tr>";
    }
  
?>
    </tbody>
</table>
