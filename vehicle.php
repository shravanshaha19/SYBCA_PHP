<?php
$dom=new DOMDocument('1.0','UTF-8');
$dom->formatOutput=true;
$root=$dom->createElement('vehicle');
$dom->appendChild($root);
$vehicles=[
    ['type'=>'Two Wheeler','vehicles'=>[['name'=>'Activa 6G','company'=>'Honda','color'=>'Black','average'=>'50 km/l'],
    ['name'=>'Pulsar 150','company'=>'Bajaj','color'=>'Red','average'=>'45 km/l']
    ]],
    ['type'=>'Four Wheeler','vehicles'=>[['name'=>'Swift','company'=>'Maruti Suzuki','color'=>'White','average'=>'22 km/l'],
    ['name'=>'Creta','company'=>'Hyundai','color'=>'Blue','average'=>'18 km/l']
    ]]
];

foreach($vehicles as $vehicleType)
{
    $typeElement=$dom->createElement('Type');
    $typeElement->setAttribute('name',$vehicleType['type']);

    foreach($vehicleType['vehicles']as $v)
    {
        $vehicle=$dom->createElement('Vehicle_Details');
        $vehicleName=$dom->createElement('Vehicle_Name',htmlspecialchars($v['name']));
        $company=$dom->createElement('Company',htmlspecialchars($v['company']));
        $color=$dom->createElement('Color',htmlspecialchars($v['color']));
        $average=$dom->createElement('Average',$v['average']);

        $vehicle->appendChild($vehicleName);
        $vehicle->appendChild($company);
        $vehicle->appendChild($color);
        $vehicle->appendChild($average);

        $typeElement->appendChild($vehicle);
    }
    $root->appendChild($typeElement);
}
$dom->save('vehicle.xml');
echo"vehicle.xml file created successfully!";
?>


